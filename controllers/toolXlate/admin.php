<?php
/*
 * Bizuno-Locale - Translation assistant tool
 *
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.TXT.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade bizuno-locale to newer
 * versions in the future. If you wish to customize bizuno-locale for your
 * needs please refer to http://www.phreesoft.com for more information.
 *
 * @name       Bizuno ERP
 * @author     Dave Premo, PhreeSoft <support@phreesoft.com>
 * @copyright  2008-2021, PhreeSoft, Inc.
 * @license    http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @version    6.x Last Update: 2021-04-02
 * @filesource /bizuno-locale/controllers/toolXlate/admin.php
 */

namespace bizuno;

//define('MODULE_TOOLXLATE_GOOGLE_URL', 'https://translation.googleapis.com/language/translate/v2');

bizAutoLoad(BIZBOOKS_ROOT.'controllers/portal/guest.php', 'guest');

class toolXlateAdmin
{
    public  $moduleID = 'toolXlate';
    private $tmp_path = 'temp/';

    function __construct()
    {
        $this->lang     = $this->getModLang();
        $this->myLang   = getUserCache('profile', 'language');
        $this->core     = ['bizuno','contacts','inventory','payment','phreebooks','phreeform'];
        $this->settings = array_replace_recursive(getStructureValues($this->settingsStructure()), getModuleCache($this->moduleID, 'settings'));
        $this->structure= [
            'menuBar' => ['child'=>['tools'=>['child'=>[$this->moduleID=>['order'=>80,'label'=>$this->lang['title'],'icon'=>$this->moduleID,'events'=>['onClick'=>"hrefClick('$this->moduleID/admin/manager');"]]]]]]];
        $this->guest    = new guest();
        $this->tables   = $this->adminTables();
    }

    public function settingsStructure()
    {
        $data = ['general'=>['order'=>10,'label'=>lang('general'),'fields'=>['google_key'=>['options'=>['width'=>450]]]]];
        settingsFill($data, $this->moduleID);
        return $data;
    }

    public function manager(&$layout=[])
    {
        if (!$security = validateSecurity($this->moduleID, $this->moduleID, 1)) { return; }
//      $jsHead= "var googleAPI='".MODULE_TOOLXLATE_GOOGLE_URL."';\nvar googleKey='".getModuleCache($this->moduleID,'settings','general','google_key','')."';";
        $jsHead = "function xlateExport(src) {
    jqBiz.fileDownload(src, { httpMethod: 'POST', data: jqBiz(this).serialize(),
        failCallback: function (response, url) { processJson(JSON.parse(response)); }
    });
}";
        $data  = ['title'=>$this->lang['title'],
            'divs'     => [
                'heading'=> ['order'=>10,'type'=>'html',     'html'=>"<h1>{$this->lang['title']}</h1>"],
                'body'   => ['order'=>50,'type'=>'accordion','key'=>'accXlate']],
            'accordion'=> ['accXlate'=>['divs'=>[
                'divManager'=> ['order'=>30,'label'=>lang('manager'), 'type'=>'datagrid','key' =>'dgXlate'],
                'divDetail' => ['order'=>70,'label'=>lang('details'), 'type'=>'html',    'html'=>'&nbsp;']]]],
            'datagrid' => ['dgXlate'=>$this->dgManager('dgXlate', $security)],
            'jsHead'   => ['init'=>$jsHead],
            'jsReady'  => ['init'=>"bizFocus('search', 'dgXlate');\n"]];
        $layout = array_replace_recursive($layout, viewMain(), $data);
    }

    public function managerRows(&$layout=[])
    {
        if (!$security = validateSecurity($this->moduleID, $this->moduleID, 1)) { return; }
        $this->managerSettings();
        $rows   = dbGetMulti(BIZUNO_DB_PREFIX.$this->moduleID, '', '', ['DISTINCT iso', 'MAX(date_create) AS last_update'], 0, false);
        $output = [];
        foreach ($rows as $row) {
            if (empty($row['iso'])) { continue; }
            $output[] = ['iso'=>$row['iso'], 'percent'=>$this->getPercentComplete($row['iso']), 'date_create'=>$row['last_update']];
        }
        $sorted = sortOrder($output, $this->defaults['sort'], $this->defaults['order']);
        $slice  = array_slice($sorted, ($this->defaults['page']-1)*$this->defaults['rows'], $this->defaults['rows']);
        $layout = array_replace_recursive($layout, ['type'=>'raw', 'content'=>json_encode(['total'=>sizeof($output), 'rows'=>$slice])]);
    }

    private function managerSettings()
    {
        $reset = clean('clr', 'boolean', 'get');
        $data = ['path'=>$this->moduleID, 'values'=>  [
                ['index'=>'rows',  'clean'=>'integer','default'=>getModuleCache('bizuno', 'settings', 'general', 'max_rows')],
                ['index'=>'page',  'clean'=>'integer','default'=>'1'],
                ['index'=>'sort',  'clean'=>'text',   'default'=>BIZUNO_DB_PREFIX."$this->moduleID.module"],
                ['index'=>'order', 'clean'=>'text',   'default'=>'ASC'],
                ['index'=>'f0',    'clean'=>'text',   'default'=>'a'],
                ['index'=>'search','clean'=>'text',   'default'=>'']]];
        if ($reset) { setUserCache($data['path'], false, []); }
        $this->defaults = updateSelection($data);
    }

    public function addNew(&$layout=[])
    {
        $html = $this->lang['new_iso_desc'].'<br />'.html5('isoNew', ['attr' => ['maxlength'=>'5']]);
        $html .= html5('iconGO', ['icon'=>'next', 'events'=>['onClick'=>"jqBiz('#iconGO').linkbutton({ iconCls:'iconL-loading',text:'' });
            jsonAction('$this->moduleID/admin/addNewGo', 0, jqBiz('#isoNew').val());"]]);
        if (getModuleCache($this->moduleID, 'settings', 'general', 'google_key')) {
//          $html .= "<br />{$this->lang['use_google_desc']} ".html5('google', ['icon'=>$this->moduleID, 'events'=>  ['onClick'=>"jsonAction('$this->moduleID/admin/getGoogle&iso='+jqBiz('#isoNew').val());"]]).'<br />';
        }
        $data = ['type'=>'popup','title'=>$this->lang['new_iso_title'],'attr'=>['id'=>'winNewXlate','width'=>400,'height'=>250],
            'divs'=>['winNewXlate'=>['order'=>50,'type'=>'html','html'=>$html]]];
        $layout = array_replace_recursive($layout, $data);
    }

    /**
     * Creates the boilerplate files for a new translation
     */
    public function addNewGo(&$layout=[])
    {
        $iso       = clean('data', 'text', 'get');
        $date      = biz_date('Y-m-d');
        $langList  = $this->getLangList('en_US', portalModuleList());
        foreach ($langList as $module) {
            $output= [];
            $lang  = $this->getLang($module['id'], $module['path']); // get en_US list of indexes
            $xLang = $this->getXlate($module['id'],$module['path'], $iso);
            foreach (array_keys($lang) as $idx) {
                $xVal = !empty($xLang[$idx]) ? addslashes($xLang[$idx]) : '';
                $output[] = "'$iso', '{$module['id']}', '$idx', '$xVal', '0', '$date'";
            }
            if (sizeof($output)) {
                dbGetResult("INSERT INTO ".BIZUNO_DB_PREFIX."$this->moduleID (iso, module, idx, xlate, status, date_create) VALUES (".implode("),\n(", $output).")");
            }
        }
        $layout = array_replace_recursive($layout, ['content' => ['action'=>'eval', 'actionData'=>"jqBiz('#winNewXlate').window('destroy'); jqBiz('#dgXlate').datagrid('reload');"]]);
    }

    public function edit(&$layout=[])
    {
        if (!$security = validateSecurity($this->moduleID, $this->moduleID, 1)) { return; }
        $iso   = clean('iso', 'text', 'get');
        $mID   = clean('mID', ['format'=>'text','default'=>'common'], 'get');
        $result= dbGetMulti(BIZUNO_DB_PREFIX.$this->moduleID, "iso='$iso' AND module='$mID'");
        $terms = [];
        $langList= $this->getLangList($iso, portalModuleList());
        $found = false;
        msgDebug("\nmID = $mID and sizeof langList = ".sizeof($langList));
        foreach ($langList as $module) { if ($module['id'] == $mID) { $found = true; break; } }
        if ($iso && $found) {
            $lang = $this->getLang($mID, $module['path']);
            $dest = [];
            foreach ($result as $row) { $dest[$row['idx']] = $row; }
            foreach ($lang as $idx => $source) {
                $terms[] = ['module'=>$mID, 'source'=>$source, 'idx'=>$idx,
                    'status'=>isset($dest[$idx]['status'])? $dest[$idx]['status']: '0',
                    'xlate' =>isset($dest[$idx]['xlate']) ? $dest[$idx]['xlate'] : ''];
            }
        }
        $jsHead = "var langList = ".json_encode($langList).";
var langDetail = ".json_encode($terms).";
function preSubmit() {
    jqBiz('#dgDetails').edatagrid('saveRow');
    var items = jqBiz('#dgDetails').datagrid('getData');
    jqBiz('#sList').val(JSON.stringify(items));
    return true;
}";
        $jsBody = "jqBiz('#mID').combogrid({width:350, panelWidth:600, idField:'id', textField:'text', data:langList,
    onClickRow: function (idx, row) { accordionEdit('accXlate', 'dgXlate', 'divDetail', '".jsLang('details')."', '$this->moduleID/admin/edit&iso='+jqBiz('#iso').val()+'&mID='+row.id); },
    columns:[[{field:'id',hidden:true},{field:'text',title:'".jsLang('module')."',width:450},{field:'percent',title:'".jsLang('percent')."',width:150}]]});";
        $data   = ['type'=>'divHTML',
            'divs'     => [
                'toolbar' => ['order'=>10,'type'=>'toolbar', 'key' =>'tbXlate'],
                'heading' => ['order'=>15,'type'=>'html',    'html'=>"<h1>".sprintf($this->lang['translating_to'], $iso)."</h1>"],
                'formBOF' => ['order'=>20,'type'=>'form',    'key' =>'frmXlate'],
                'fields'  => ['order'=>30,'type'=>'fields',  'keys'=>['mID','iso','sList']],
                'datagrid'=> ['order'=>60,'type'=>'datagrid','key' =>'dgDetails','classes'=>['block50']],
                'formEOF' => ['order'=>90,'type'=>'html',    'html'=>'</form>']],
            'toolbars' => ['tbXlate'  =>['icons'=>['save'=>['order'=>20,'events'=>['onClick'=>"jqBiz('#frmXlate').submit();"]]]]],
            'forms'    => ['frmXlate' =>['attr'=>['type'=>'form','action'=>BIZUNO_AJAX."&bizRt=$this->moduleID/admin/save"]]],
            'datagrid' => ['dgDetails'=>$this->dgDetails('dgDetails')],
            'fields'   => [
                'mID'  => ['options'=>['value'=>"'$mID'"]],
                'iso'  => ['attr'=>['type'=>'hidden','value'=>$iso]],
                'sList'=> ['attr'=>['type'=>'hidden']]],
            'jsHead'   => ['init'=>$jsHead],
            'jsBody'   => ['init'=>$jsBody],
            'jsReady'  => ['init'=>"ajaxForm('frmXlate'); jqBiz('#mID').combogrid('setValue', '$mID');"]];
        $layout = array_replace_recursive($layout, $data);
    }

    public function save()
    {
        if (!$security = validateSecurity($this->moduleID, $this->moduleID, 2)) { return; }
        $mID   = clean('mID',  'text', 'post');
        $iso   = clean('iso',  'text', 'post');
        $data  = clean('sList','json', 'post');
        if (!$iso || !$mID || !isset($data['rows'])) { return msgAdd("Bad Data!"); }
        $output= [];
        foreach ($data['rows'] as $row) { if ($row['xlate'] <> '') {
            $output[] = "'$iso','$mID','{$row['idx']}','".addslashes(trim($row['xlate']))."','{$row['status']}'";
        } }
        if (sizeof($output) > 0) {
            dbGetResult("DELETE FROM ".BIZUNO_DB_PREFIX."$this->moduleID WHERE iso='$iso' AND module='$mID'");
            dbGetResult("INSERT INTO ".BIZUNO_DB_PREFIX."$this->moduleID (iso, module, idx, xlate, status) VALUES (".implode("),\n(", $output).")");
            dbWrite(BIZUNO_DB_PREFIX.$this->moduleID, ['date_create'=>biz_date('Y-m-d')], 'update', "iso='$iso'");
        }
        msgAdd(lang('msg_record_saved'), 'success');
    }

    public function delete(&$layout=[])
    {
        if (!$security = validateSecurity($this->moduleID, $this->moduleID, 4)) { return; }
        $iso = clean('rID', 'text', 'get');
        if (!$iso) { return msgAdd('Bad Data!'); }
        msgAdd(sprintf($this->lang['delete_success'], $iso), 'success');
        msgLog($this->lang['title']." ".lang('delete')." (iso=$iso)");
        $layout = array_replace_recursive($layout, [
            'content' => ['action'=>'eval', 'actionData'=>"jqBiz('#dgXlate').datagrid('reload');"],
            'dbAction'=> [BIZUNO_DB_PREFIX.$this->moduleID  => "DELETE FROM ".BIZUNO_DB_PREFIX."$this->moduleID WHERE iso='$iso'"]]);
    }

    /**
     * Exports the translated language files in a zip formatted file
     * @return dies if download is successful, msg if there was an error
     */
    public function export()
    {
        global $io;
        if (!$security = validateSecurity($this->moduleID, $this->moduleID, 3)) { return; }
        $iso = clean('iso', 'text', 'get');
        if (!$iso) { return msgAdd('Bad Data!'); }
        $output = [];
        $result = dbGetMulti(BIZUNO_DB_PREFIX.$this->moduleID, "iso='$iso' AND xlate <> ''", "module");
        foreach ($result as $row) { $output[$row['module']][$row['idx']] = trim($row['xlate']); }
        if (sizeof($output) == 0) { return msgAdd("There was not any data to build the file from!"); }
        $langList= $this->getLangList($iso, portalModuleList());
        msgDebug("\nlangList = ".print_r($langList, true));
        foreach ($langList as $module) {
            if (in_array($module['id'], ['common'])) { continue; } // it's the common/locale translation, handle later
            $modType = in_array(explode(':', $module['id'])[0], $this->core) ? 'module' : 'ext';
            if (isset($output[$module['id']])) {
                $data  = '<'.'?'."php\n/* Translated file created by $this->moduleID on ".biz_date('Y-m-d')." for iso code: $iso */\n".'$lang = ['."\n";
                foreach ($output[$module['id']] as $key => $value) { $data .= "\t'$key' => '".str_replace("'", "\'", $value)."',\n"; }
                $data .= "];\n";
                $io->fileWrite($data, "{$this->tmp_path}$iso/$modType/{$module['path']}");
            }
        }
        // build the common
        if (empty($output['common'])) { return msgAdd("The common language file cannot be found! The export cannot happen until the main language file has been translated."); }
        $data  = '<'.'?'."php\n/* Translated file created by $this->moduleID on ".biz_date('Y-m-d')." for iso code: $iso */\n\n".'$langCore = ['."\n";
        foreach ($output['common'] as $key => $value) { $data .= "\t'$key' => '".str_replace("'", "\'", $value)."',\n"; }
        $data .= "];\n\n";
        $io->fileWrite($data, "{$this->tmp_path}$iso/language.php");
        // build the locale
        if (!empty($output['locale'])) {
            ksort($output['locale']);
            $data  = '<'.'?'."php\n/* Translated file created by $this->moduleID on ".biz_date('Y-m-d')." for iso code: $iso */\n\n".'$lang = ['."\n";
            foreach ($output['locale'] as $key => $value) { $data .= "\t'$key' => '".str_replace("'", "\'", $value)."',\n"; }
            $data .= "];\n\n";
            $io->fileWrite($data, "{$this->tmp_path}$iso/langLocale.php");
        }
        // generate the locale.xml file for the new ISO
        $locale = parseXMLstring(file_get_contents(BIZBOOKS_ROOT."locale/en_US/locale.xml"));
        msgDebug("\nlocale from file: ".print_r($locale, true));
        foreach ($locale->Locale as $idx => $row) {
            if (isset($output['locale']["country_{$row->Country->ISO3}"])) { $locale->Locale[$idx]->Country->Title = $output['locale']["country_{$row->Country->ISO3}"]; }
        }
        msgDebug("\nlocale before write file: ".print_r($locale, true));
        $lData = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'."\n".'<!DOCTYPE xml>'."\n<Data>".object_to_xml($locale)."\n</Data>\n";
        msgDebug("\nCreated XML string = ".print_r($lData, true));
        $io->fileWrite($lData, "{$this->tmp_path}$iso/locale.xml");

        // build and save reports

        // Copy the folder to the users locale folder for immediate use
        $dirSrc = "{$this->tmp_path}$iso/";
        $dirDest= "locale/$iso/";
        msgDebug("\n Copying from $dirSrc to $dirDest");
        $io->folderCopy($dirSrc, $dirDest);
        // zip and download the file
        $io->source_dir = "{$this->tmp_path}$iso/";
        $io->dest_dir   = $this->tmp_path;
        $io->dest_file  = "{$iso}.zip";
        $io->zipCreate('folder');
        $io->folderDelete("{$this->tmp_path}$iso/");
        msgLog($this->lang['title']." ".lang('export')." (iso=$iso)");
        $io->download('file', $this->tmp_path, "{$iso}.zip", true);
    }

    /**
     * Generates a list of language files within the Bizuno application, including extensions and methods
     * @return array or modules and keyed methods (modID:methID) formatted for a pull down menu
     */
    private function getLangList($iso, $modules)
    {
        $langCore= [];
        include(BIZBOOKS_ROOT."locale/en_US/language.php");
        $coreDone  = dbGetValue(BIZUNO_DB_PREFIX.$this->moduleID, 'COUNT(*) AS cnt', "module='common' AND iso ='$iso' AND status='1'", false);
        $corePct   = "$coreDone / ".sizeof($langCore)." (".(empty($langCore) ? 0 : number_format(100*$coreDone/sizeof($langCore), 1))." %)";
        $modList   = [['id'=>'common', 'text'=>lang('common'), 'percent'=>$corePct, 'path'=>"language.php"]];
        $lang      = [];
        include(BIZBOOKS_ROOT."locale/en_US/langLocale.php");
        $localeDone= dbGetValue(BIZUNO_DB_PREFIX.$this->moduleID, 'COUNT(*) AS cnt', "module='locale' AND iso ='$iso' AND status='1'", false);
        $localePct = "$localeDone / ".sizeof($lang)." (".(empty($lang) ? 0 : number_format(100*$localeDone/sizeof($lang), 1))." %)";
        $modList[] = ['id'=>'locale', 'text'=>lang('locale'), 'percent'=>$localePct, 'path'=>"langLocale.php"];
        foreach ($modules as $mID => $path) {
            $fqcn     = "\\bizuno\\{$mID}Admin";
            bizAutoLoad("$path/admin.php", $fqcn);
            $modAdmin = $mID <> $this->moduleID ? new $fqcn() : $this;
            $basePath = in_array($mID, $this->core) ? BIZBOOKS_ROOT."locale/en_US/module/$mID/" : BIZBOOKS_EXT."$mID/locale/en_US/";
            $finish   = dbGetValue(BIZUNO_DB_PREFIX.$this->moduleID, 'COUNT(*) AS cnt', "module='$mID' AND iso ='$iso' AND status='1'", false);
            $percent  = "$finish / ".sizeof($modAdmin->lang)." (".(empty($modAdmin->lang) ? 0 : number_format(100*$finish/sizeof($modAdmin->lang), 1))." %)";
            $modList[]= ['id'=>$mID, 'text'=>$modAdmin->lang['title'], 'percent'=>$percent, 'path'=>"$mID/language.php"];
            if (!empty($modAdmin->structure['dirMethods'])) {
                $this->getMethodList($modList, $mID, $modAdmin->lang['title'], $modAdmin->structure['dirMethods'], $basePath, $iso);
            }
            if (is_dir("{$path}dashboards")) {
                $this->getDashboardList($modList, $mID, $modAdmin->lang['title'], $basePath, $iso);
            }
        }
        return $modList;
    }

    private function getMethodList(&$output, $mID, $mTitle, $dirMethods, $basePath, $iso)
    {
        $methods = $this->folderRead($basePath."$dirMethods/");
        msgDebug("\nReading methods at path: {$basePath}$dirMethods/"); // with results: ".print_r($methods, true));
        foreach ($methods as $method) {
            msgDebug("\nWorking with module $mID and method = $method");
            $lang    = [];
            include("{$basePath}$dirMethods/$method/language.php"); // replaces $lang
            $title   = !empty($lang['title']) ? $lang['title'] : $method;
            $finish  = dbGetValue(BIZUNO_DB_PREFIX.$this->moduleID, 'COUNT(*) AS cnt', "module='$mID:$method' AND iso ='$iso' AND status='1'", false);
            $percent = "$finish / ".sizeof($lang)." (".(empty($lang) ? 0 : number_format(100*$finish/sizeof($lang), 1))." %)";
            $output[]= ['id'=>"$mID:$method", 'text'=>"{$mTitle}->{$title}", 'percent'=>$percent, 'path'=>"$mID/$dirMethods/$method/language.php"];
        }
    }

    private function getDashboardList(&$output, $mID, $mTitle, $basePath, $iso)
    {
        $dashboards = $this->folderRead($basePath."dashboards/");
        msgDebug("\nReading dashboards at path: {$basePath}dashboards/"); // with results: ".print_r($dashboards, true));
        foreach ($dashboards as $dashboard) {
            $lang    = [];
            include("{$basePath}dashboards/$dashboard/language.php"); // replaces lang
            $title   = !empty($lang['title']) ? $lang['title'] : $dashboard;
            $finish  = dbGetValue(BIZUNO_DB_PREFIX.$this->moduleID, 'COUNT(*) AS cnt', "module='$mID:$dashboard' AND iso ='$iso' AND status='1'", false);
            $percent = "$finish / ".sizeof($lang)." (".(empty($lang) ? 0 : number_format(100*$finish/sizeof($lang), 1))." %)";
            $output[]= ['id'=>"$mID:$dashboard", 'text'=>"{$mTitle}->{$title}", 'percent'=>$percent, 'path'=>"$mID/dashboards/$dashboard/language.php"];
        }
    }

    /**
     * Fetches the language array for a given iso/module/method from the English base
     * @param string $mID - Module ID, if it is a method it will be formatted like module ID:method ID
     * @param string $iso - ISO code, i.e. en_US, es_MX
     * @return array - lang file contents
     */
    private function getLang($mID, $path)
    {
        $lang = [];
        switch ($mID) {
            case 'common':
                $langCore = [];
                include(BIZBOOKS_ROOT."locale/en_US/language.php");
                return $langCore;
            case 'locale': // @todo read the xml and parse into array and then flaten it out
                $langCore = [];
                include(BIZBOOKS_ROOT."locale/en_US/langLocale.php");
                return $lang;
        }
        $module  = strpos($mID, ':') ? explode(':', $mID, 2) : [$mID];
        $fullPath= in_array($module[0], $this->core) ? BIZBOOKS_ROOT."locale/en_US/module/$path" : BIZBOOKS_EXT."$mID/locale/en_US/".str_replace("{$module[0]}/", '', $path);
        if (file_exists($fullPath)) { include($fullPath); }
        msgDebug("\nRead ISO en_US path = $path and mID = {$module[0]} , path = $fullPath with results sizeof lang = ".sizeof($lang));
        return $lang;
    }

    private function getXlate($mID, $path='', $iso='')
    {
        if (empty($iso) || empty($path)) { return; }
        if (in_array($mID, ['common'])) { //it's a core file
            $langCore = [];
            if (!file_exists(BIZBOOKS_LOCALE."$iso/language.php")) { return []; }
            include(BIZBOOKS_LOCALE."$iso/language.php");
            return $langCore;
        }
        $lang = [];
        $module  = strpos($mID, ':') ? explode(':', $mID, 2) : [$mID];
        $basePath = in_array($module[0], $this->core) ? BIZBOOKS_LOCALE."$iso/module/$path" : BIZBOOKS_LOCALE."$iso/ext/$path";
        if (!file_exists($basePath)) { return []; }
        include ($basePath);
        msgDebug("\nRead ISO $iso path = $path and mID = {$module[0]}, basePath = $basePath with result sizeof lang = ".sizeof($lang));
        return $lang;
    }

    private function getPercentComplete($value)
    {
        $total = dbGetValue(BIZUNO_DB_PREFIX.'toolXlate', 'COUNT(*) AS cnt', "iso= '$value'", false);
        $finish= dbGetValue(BIZUNO_DB_PREFIX.'toolXlate', 'COUNT(*) AS cnt', "iso= '$value' AND status='1'", false);
        return empty($total) ? 0 : "$finish / $total (".number_format(100*$finish/$total, 1)." %)";
    }

    public function folderRead($path)
    {
        $output = [];
        if (!@is_dir($path)) { return $output; }
        $temp = scandir($path);
        foreach ($temp as $fn) {
            if ($fn == '.' || $fn == '..') { continue; }
            $output[] = $fn;
        }
        return $output;
    }

    /**
     * Initializes a new translation by querying Google Translate and filling in the db
     * @param array $layout - structure of view
     * @return array - modified $layout
     */
    public function getGoogle(&$layout=[])
    {
        global $io;
        $iso = clean('iso', 'text', 'get');
        if (!$iso || !getModuleCache($this->moduleID, 'settings', 'general', 'google_key')) { return msgAdd($this->lang['no_google_key']); }
        $langList= $this->getLangList($iso, portalModuleList());
        $rows = [];
        foreach ($langList as $module) {
            $lang = $this->getLang($module['id'], $module['path']);
            foreach ($lang as $idx => $source) { $rows[] = ['module'=>$module['id'], 'source'=>$source, 'idx'=>$idx]; }
        }
        msgDebug("\nNumber of Rows to process = ".sizeof($rows));
        dbGetResult("DELETE FROM ".BIZUNO_DB_PREFIX."$this->moduleID WHERE iso='$iso'");
//$rows = array_slice($rows, 0, 85);
        $io->fileWrite(json_encode($rows), "cache/xlate_{$iso}.json", false, false, true);
        setUserCache('cron', 'getGoogle', ['iso'=>$iso, 'cnt'=>0, 'total'=>sizeof($rows)]);
        $layout = array_replace_recursive($layout, ['content' => ['action'=>'eval', 'actionData'=>"cronInit('getGoogle', '$this->moduleID/admin/getGoogleNext');"]]);
    }

    /**
     * Ajax continuation of getGoogle
     * @param array $layout - view structure
     */
    public function getGoogleNext(&$layout=[])
    {
        global $io;
        $blockSize = 25;
        $cron = getUserCache('cron', 'getGoogle');
        $iso  = $cron['iso'];
        $cache= json_decode(file_get_contents(BIZUNO_DATA."cache/xlate_{$iso}.json"), true);
        $rows = [];
        while ($blockSize) {
            if (!sizeof($cache)) { break; }
            $rows[] = array_shift($cache);
            $cron['cnt']++;
            $blockSize--;
        }
        $getParams= "key=".getModuleCache($this->moduleID, 'settings', 'general', 'google_key')."&source=en&target=".substr($iso, 0, 2);
        for ($i=0; $i<sizeof($rows); $i++) {
            $rows[$i]['source'] = str_replace(['%s','%i', '%%'], ['_001_', '_002_', '_003_'], $rows[$i]['source']);
            $getParams .= '&q='.urlencode($rows[$i]['source']);
        }
        $results  = $io->cURLGet(MODULE_TOOLXLATE_GOOGLE_URL, $getParams, 'get', ['CURLOPT_REFERER' => $_SERVER['HTTP_REFERER']]);
        msgDebug("\nGetParams = $getParams and Google results = ".print_r($results, true));
        $resp = json_decode($results, true);
        if (isset($resp['error'])) { foreach ($resp['error']['errors'] as $error) {
            msgAdd("Google Response Error: ".$error['message']);
        } }
        if (isset($resp['data']['translations'])) { foreach ($resp['data']['translations'] as $idx => $xlate) {
            $xlate['translatedText'] = str_replace(['_001_', '_002_', '_003_'], ['%s','%i', '%%'], $xlate['translatedText']);
            $rows[$idx]['xlate'] = $xlate['translatedText'];
            $rows[$idx]['iso'] = $iso;
            $rows[$idx]['date_create'] = biz_date('Y-m-d');
            unset($rows[$idx]['source']);
            msgDebug("\nWriting row: ".print_r($rows[$idx], true));
            dbWrite(BIZUNO_DB_PREFIX.$this->moduleID, $rows[$idx]);
        } }
        if (sizeof($cache) == 0) {
            msgLog("Translate Tool, New $iso - ({$cron['total']} records)");
            $data = ['content'=>['percent'=>100,'msg'=>"Finished Processing {$cron['total']} translation lines",
                'baseID'=>'getGoogle','urlID'=>"$this->moduleID/admin/getGoogleNext",
                'action'=>'eval', 'actionData'=>"
jqBiz('#destISO').val(jqBiz('#isoNew').val());
jqBiz('#accXlate').accordion('select','".jsLang('details')."');
jqBiz('#dgDetails').datagrid( { url:bizunoAjax+'&bizRt=$this->moduleID/admin/details&mID=langCore&iso='+jqBiz('#isoNew').val() } );
jqBiz('#dgDetails').datagrid('reload');
bizWindowClose('winNewXlate');"]];
            clearUserCache('cron', 'getGoogle');
            unlink(BIZUNO_DATA."cache/xlate_{$iso}.json");
        } else { // return to update progress bar and start next step
            $io->fileWrite(json_encode($cache), "cache/xlate_{$iso}.json", false, false, true);
            $percent = floor(100*$cron['cnt']/$cron['total']);
            $msg = "Completed {$cron['cnt']} of {$cron['total']} lines";
            $data = ['content'=>['percent'=>$percent,'msg'=>$msg,'baseID'=>'getGoogle','urlID'=>"$this->moduleID/admin/getGoogleNext"]];
            setUserCache('cron', 'getGoogle', $cron);
        }
        $layout = array_replace_recursive($layout, $data);
    }

    /**
    * Pulls language files from an extension, overwrites with locale, will keep English if ANY locale index is not set, helps for upgrades where language lags.
    * @return boolean false - But sets the session lang array with the admin language file
    */
   private function getModLang($modID='toolXlate')
   {
       $myLang= getUserCache('profile', 'language', false, 'en_US');
       $output = $lang = [];
       msgDebug("\nChecking lang from file: ".BIZBOOKS_LOCALE."../controllers/toolXlate/locale/en_US/language.php");
       if (file_exists(BIZBOOKS_LOCALE."../controllers/$modID/locale/en_US/language.php")) {
           require    (BIZBOOKS_LOCALE."../controllers/$modID/locale/en_US/language.php"); // populates $lang
           $output = $lang;
       }
       if ($myLang == 'en_US') { return $output; }
       // @todo this doesn't work, need to extract the module and go from there
       if (file_exists(BIZBOOKS_LOCALE."$myLang/ext/$modID/language.php")) {
           require    (BIZBOOKS_LOCALE."$myLang/ext/$modID/language.php"); // populates $lang
           $output = array_replace($output, $lang);
       }
       return $output;
   }

    public function adminHome(&$layout=[])
    {
        if (!$security = validateSecurity('bizuno', 'admin', 1)) { return; }
        $layout = array_replace_recursive($layout, adminStructure($this->moduleID, $this->settingsStructure(), $this->lang));
    }

    public function adminSave()
    {
        readModuleSettings($this->moduleID, $this->settingsStructure());
    }

    /**
     *
     * @param type $name
     * @param type $security
     * @return type
     */
    private function dgManager($name='dgXlate', $security=0)
    {
        $this->managerSettings();
        return ['id' =>$name, 'rows'=>$this->defaults['rows'], 'page'=>$this->defaults['page'],
            'attr'   => ['toolbar'=>"#{$name}Toolbar", 'idField'=>'iso', 'url'=>BIZUNO_AJAX."&bizRt=$this->moduleID/admin/managerRows"],
            'events' => ['onDblClickRow'=>"function(rowIndex, rowData){ accordionEdit('accXlate', 'dgXlate', 'divDetail', '".jsLang('details')."', '$this->moduleID/admin/edit&iso='+rowData.iso); }"],
            'source' => [
                'tables'  => [$this->moduleID=>['table'=>BIZUNO_DB_PREFIX.$this->moduleID]],
                'search'  => [BIZUNO_DB_PREFIX."$this->moduleID.iso",BIZUNO_DB_PREFIX."$this->moduleID.module",BIZUNO_DB_PREFIX."$this->moduleID.idx",BIZUNO_DB_PREFIX."$this->moduleID.xlate"],
                'actions' => [
                    'tmNew'  => ['order'=>10,'icon'=>'new',  'events'=>['onClick'=>"jsonAction('$this->moduleID/admin/addNew');"]],
                    'tmReset'=> ['order'=>90,'icon'=>'clear','events'=>['onClick'=>"bizSelSet('f0', 'a'); bizTextSet('search', ''); {$name}Reload();"]]],
                'filters' => [
                    'search' => ['order'=>90,'attr'=>['id'=>"search",'value'=>$this->defaults['search']]],
                    'iso'    => ['order'=>99,'hidden'=>true,'sql'=>BIZUNO_DB_PREFIX."$this->moduleID.iso<>'en_US'"]],
                'sort' => ['s0'=> ['order'=>10,'field'=>($this->defaults['sort'].' '.$this->defaults['order'])]]],
            'columns' => [
                'action'     => ['order'=>1,'label'=>lang('action'),'events'=>['formatter'=>"function(value,row,index){ return {$name}Formatter(value,row,index); }"],
                    'actions'=> [
                        'mgrEdit'  => ['order'=>70,'icon'=>'edit',  'label'=>lang('edit'),  'events'=>['onClick'=>"var iso=jqBiz('#$name').edatagrid('getRows')[indexTBD]['iso']; accordionEdit('accXlate', 'dgXlate', 'divDetail', '".jsLang('details')."', '$this->moduleID/admin/edit&iso='+iso);"]],
                        'mgrExport'=> ['order'=>80,'icon'=>'export','label'=>lang('export'),'events'=>['onClick'=>"var iso=jqBiz('#$name').edatagrid('getRows')[indexTBD]['iso']; if (confirm('".$this->lang['msg_confirm_export']."')) xlateExport(bizunoAjax+'&bizRt=toolXlate/admin/export&iso='+iso);"]],
                        'mgrTrash' => ['order'=>90,'icon'=>'trash', 'label'=>lang('delete'),'hidden'=>$security>3?false:true,'events'=>['onClick' => "var iso=jqBiz('#$name').edatagrid('getRows')[indexTBD]['iso']; if (confirm('".jsLang('msg_confirm_delete')."')) jsonAction('toolXlate/admin/delete', iso);"]]]],
                'iso'        => ['order'=>10,'label' => $this->lang['iso_code'],      'attr'=>['width'=>100,'sortable'=>true,'resizable'=>true]],
                'percent'    => ['order'=>20,'label'=>$this->lang['percent_complete'],'attr'=>['width'=>100,'sortable'=>true,'resizable'=>true]],
                'date_create'=> ['order'=>30,'label'=>lang('last_update'),            'attr'=>['width'=>100,'sortable'=>true,'resizable'=>true],
                    'events' =>['formatter'=>"function(value) { return formatDate(value); }"]]]];
    }

    /**
     *
     * @param type $name
     * @return type
     */
    private function dgDetails($name='dgDetails')
    {
        return ['id'=>$name, 'type'=>'edatagrid',
            'attr' => ['width'=>'1300', 'rownumbers'=>true, 'checkOnSelect'=>false, 'selectOnCheck'=>false],
            'events' => ['data'=>'langDetail',
                'onLoadSuccess'=> "function(data)    { var rows = jqBiz(this).datagrid('getRows'); for (i=0;i<rows.length;++i) { if (rows[i]['status']==1) jqBiz(this).datagrid('checkRow',i); } }",
                'onCheck'      => "function(rowIndex){ jqBiz('#$name').edatagrid('getRows')[rowIndex]['status']=1; }",
                'onCheckAll'   => "function(rows)    { for (var i=0; i<rows.length; i++) jqBiz('#$name').datagrid('checkRow',i); }",
                'onUncheck'    => "function(rowIndex){ jqBiz('#$name').edatagrid('getRows')[rowIndex]['status']=0; }",
                'onUncheckAll' => "function(rows)    { for (var i=0; i<rows.length; i++) jqBiz('#$name').datagrid('uncheckRow',i); }"],
            'columns' => [
                'status' => ['order'=>10,'attr' => ['checkbox'=>true]],
                'xlate'  => ['order'=>20,'label'=> $this->lang['trans_iso'],   'attr'=>['width'=>400,'sortable'=>true,'resizable'=>true,'editor'=>'textarea']],
                'source' => ['order'=>30,'label'=> $this->lang['trans_source'],'attr'=>['width'=>400,'sortable'=>true,'resizable'=>true,'editor'=>'textarea']],
                'idx'    => ['order'=>40,'label'=> lang('index'),              'attr'=>['width'=>200,'sortable'=>true,'resizable'=>true]],
                'module' => ['order'=>50,'label'=> lang('module'),             'attr'=>['width'=>200,'sortable'=>true,'resizable'=>true]]]];
    }

    /**
     *
     * @return type
     */
    private function adminTables()
    {
        return [$this->moduleID => ['module'=>$this->moduleID,
            'fields' => [
                'id'         => ['format'=>'INT(10)',    'attr'=>"NOT NULL AUTO_INCREMENT",'comment'=>'type:hidden;tag:RecordID;order:1'],
                'iso'        => ['format'=>'VARCHAR(5)', 'attr'=>"DEFAULT ''",    'comment'=>'tag:ISOCode;order:10'],
                'module'     => ['format'=>'VARCHAR(48)','attr'=>"DEFAULT ''",    'comment'=>'tag:ModuleID;order:20'],
                'idx'        => ['format'=>'VARCHAR(48)','attr'=>"DEFAULT ''",    'comment'=>'tag:LanguageIndex;order:30'],
                'xlate'      => ['format'=>'TEXT',       'attr'=>"",              'comment'=>'tag:Translation;order:40'],
                'status'     => ['format'=>'CHAR(1)',    'attr'=>"DEFAULT '0'",   'comment'=>'type:checkbox;tag:Status;order:50'],
                'date_create'=> ['format'=>'DATE',       'attr'=>"DEFAULT NULL",  'comment'=>'type:date;tag:CreateDate;order:60']],
            'keys' => 'PRIMARY KEY (id), KEY iso (iso), KEY module (module)',
            'attr' => 'ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;']];
    }
}
