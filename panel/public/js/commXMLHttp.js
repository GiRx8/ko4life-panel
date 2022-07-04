/*
Creator : Yeongmin Han
2007-10-16 MGame Ajax Framework
2008-04-22 Modify by Kim KiHyun
*/

// Create XMLHttpRequest Object
function AjaxCore_createXMLHttpRequest(){
	if (window.ActiveXObject) {
		//var aVersions = ['Msxml2.XMLHTTP.7.0', 'Msxml2.XMLHTTP.6.0','Msxml2.XMLHTTP.5.0', 'Msxml2.XMLHTTP.4.0', 'MSXML2.XMLHTTP.3.0', 'MSXML2.XMLHTTP', 'Microsoft.XMLHTTP'];
		//error in japanese explorer ('Msxml2.XMLHTTP.5.0', 'Msxml2.XMLHTTP.4.0')
		var aVersions = ['Msxml2.XMLHTTP.7.0', 'Msxml2.XMLHTTP.6.0','MSXML2.XMLHTTP.3.0', 'MSXML2.XMLHTTP', 'Microsoft.XMLHTTP'];

		for (var i=0; i