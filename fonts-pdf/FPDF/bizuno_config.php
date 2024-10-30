<?php
/*
 * Configuration modifications to use tFPDF and FPDF to generate pdf documents.
 *
 * NOTICE OF LICENSE
 * This software may be used only for one installation of Bizuno when
 * purchased through the PhreeSoft.com website store. This software may
 * not be re-sold or re-distrubuted without written consent of Phreesoft.
 * Please contact us for further information or clarification of you have
 * any questions.
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to automatically upgrade to
 * a newer version in the future. If you wish to customize this module, you
 * do so at your own risk, PhreeSoft will not support this extension if it
 * has been modified from its original content.
 *
 * @name       Bizuno ERP
 * @author     Dave Premo, PhreeSoft <support@phreesoft.com>
 * @copyright  2008-2020, PhreeSoft, Inc.
 * @license    PhreeSoft Proprietary
 * @version    4.x Last Update: 2020-03-26
 * @filesource /apps/FPDF/bizuno_config.php
 */

namespace bizuno;

// @todo NEED TO ROLL THIS AND THE $this->CoreFonts ARRAY INTO A WRAPPER NEEDED TO MODIFY FPDF DIRECTLY TO GET ALL FONTS TO WORK
if (!defined('FPDF_FONTPATH')) { define('FPDF_FONTPATH', BIZUNO_3P_PDF.'font/'); }

if (!defined('BIZUNO_CORE_FONTS')) { define('BIZUNO_CORE_FONTS', [
    'courier'       => ['text'=>'Courier',                           'type'=>'std', 'path'=>FPDF_FONTPATH],
    'courierb'      => ['text'=>'Courier Bold',                      'type'=>'std', 'path'=>FPDF_FONTPATH],
    'courierbi'     => ['text'=>'Courier Bold-Italic',               'type'=>'std', 'path'=>FPDF_FONTPATH],
    'courieri'      => ['text'=>'Courier Italic',                    'type'=>'std', 'path'=>FPDF_FONTPATH],
    'helvetica'     => ['text'=>'Helvetica',                         'type'=>'std', 'path'=>FPDF_FONTPATH],
    'helveticab'    => ['text'=>'Helvetica Bold',                    'type'=>'std', 'path'=>FPDF_FONTPATH],
    'helveticabi'   => ['text'=>'Helvetica Bold-Italic',             'type'=>'std', 'path'=>FPDF_FONTPATH],
    'helveticai'    => ['text'=>'Helvetica Italic',                  'type'=>'std', 'path'=>FPDF_FONTPATH],
    'symbol'        => ['text'=>'Symbol',                            'type'=>'std', 'path'=>FPDF_FONTPATH],
    'times'         => ['text'=>'Times',                             'type'=>'std', 'path'=>FPDF_FONTPATH],
    'timesb'        => ['text'=>'Times Bold',                        'type'=>'std', 'path'=>FPDF_FONTPATH],
    'timesbi'       => ['text'=>'TimesBold-Italic',                  'type'=>'std', 'path'=>FPDF_FONTPATH],
    'timesi'        => ['text'=>'Times Italic',                      'type'=>'std', 'path'=>FPDF_FONTPATH],
    'zapfdingbats'  => ['text'=>'Zap Dingbats',                      'type'=>'std', 'path'=>FPDF_FONTPATH]]);
}

if (!defined('BIZUNO_TTF_FONTS')) { define('BIZUNO_TTF_FONTS', [
    'dejavusans'    => ['text'=>'DejaVu Sans',                       'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansb'   => ['text'=>'DejaVu Sans Bold',                  'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansbo'  => ['text'=>'DejaVu Sans Bold-Oblique',          'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusanso'   => ['text'=>'DejaVu Sans Oblique',               'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansel'  => ['text'=>'DejaVu Sans Extra Light',           'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansc'   => ['text'=>'DejaVu Sans Condensed',             'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusanscb'  => ['text'=>'DejaVu Sans Condensed Bold',        'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusanscbo' => ['text'=>'DejaVu Sans Condensed Bold-Oblique','type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansco'  => ['text'=>'DejaVu Sans Condensed Oblique',     'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansm'   => ['text'=>'DejaVu Sans Mono',                  'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansmb'  => ['text'=>'DejaVu Sans Mono Bold',             'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansmbo' => ['text'=>'DejaVu Sans Mono Bold-Oblique',     'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavusansmo'  => ['text'=>'DejaVu Sans Mono Oblique',          'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserif'   => ['text'=>'DejaVu Serif',                      'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifb'  => ['text'=>'DejaVu Serif Bold',                 'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifbi' => ['text'=>'DejaVu Serif BoldItalic',           'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifi'  => ['text'=>'DejaVu Serif Italic',               'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifc'  => ['text'=>'DejaVu Serif Condensed',            'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifcb' => ['text'=>'DejaVu Serif Condensed Bold',       'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifcbi'=> ['text'=>'DejaVu Serif Condensed Bold-Italic','type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/'],
    'dejavuserifci' => ['text'=>'DejaVu Serif Condensed Italic',     'type'=>'ttf', 'path'=>FPDF_FONTPATH.'unifont/']]);
}
