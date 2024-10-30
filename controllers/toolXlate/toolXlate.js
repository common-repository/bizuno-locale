/**
 * Javascript functions to support translator tool
 * @name       Bizuno Translator Module
 * @copyright  2008-2021, PhreeSoft, Inc. (www.PhreeSoft.com)
 * @author     Dave Premo, PhreeSoft, Inc.
 * @version    6.x Last Update: 2020-10-03
 * @filesource /EXTENSION_PATH/toolXlate/toolXlate.js
 */

function xLateGuessAll() {
    if (!googleKey) return alert('The Google translator key has not been set. The Google translator assistant is not available!');
	jqBiz('#dgDetails').edatagrid('saveRow');
	jqBiz('#dgDetails').datagrid('loading');
	var maxCnt = 10;
	var loopCnt= 0;
	var curCnt = 0;
	var qData  = '';
	var rows   = jqBiz('#dgDetails').datagrid('getRows');
	for (var i=0; i<rows.length; i++) {
		qData += '&q='+encodeURIComponent(rows[i]['source']);
		curCnt++;
		if (curCnt >= maxCnt) {
			bulkQuery((loopCnt * maxCnt), qData);
			loopCnt++;
			curCnt = 0;
			qData = '';
		} 
	}
	bulkQuery((loopCnt * maxCnt), qData);
	jqBiz('#dgDetails').datagrid('loaded');
}

function bulkQuery(baseIdx, qData) {
	var src     = jqBiz('#srcISO').val();
	var srcISO  = src.substr(0, 2);
	var dest    = jqBiz('#destISO').val();
	var destISO = dest.substr(0, 2);
	var rows    = jqBiz('#dgDetails').datagrid('getRows');
	jqBiz.ajax({
		url:     googleAPI+'?key='+googleKey+'&source='+srcISO+'&target='+destISO+qData,
		async:   false,
		success: function(json) {
			if (json.error) alert('There were errors, encoded json response = '+JSON.stringify(json));
			else for (var j=0; j<json.data.translations.length; j++) {
				idx = baseIdx + j;
				rows[idx]['xlate'] = json.data.translations[j].translatedText;
			}
		}
	});
	jqBiz('#dgDetails').datagrid('loadData', rows);
}

function xLateGuessOne(idx) {
    if (!googleKey) return alert('The Google translator key has not been set. The Google translator assistant is not available.');
	var src     = jqBiz('#srcISO').val();
	var srcISO  = src.substr(0, 2);
	var dest    = jqBiz('#destISO').val();
	var destISO = dest.substr(0, 2);
	var sText   = jqBiz('#dgDetails').edatagrid('getRows')[idx]['source'];
	jqBiz.ajax({
		url:     googleAPI,
		data:    { key:googleKey, source:srcISO, target:destISO, q:sText },
		async:   false,
		success: function(json) {
			jqBiz('#dgDetails').edatagrid('getRows')[idx]['xlate'] = json.data.translations[0].translatedText;
			var xEditor = jqBiz('#dgDetails').datagrid('getEditor', {index:idx,field:'xlate'});
			if (xEditor) xEditor.target.val(json.data.translations[0].translatedText);
		}
	});
}
