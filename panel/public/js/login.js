function fn_start_idfocus(){
	try
	{
		document.login_form.userid.focus();
	}
	catch (e){ }
}

function left_checkIsZenkaku(value) {
	var arrtemp = new Array;
	var j;
	j = 0;
	for (var i = 0; i < value.length; i++) {
		var c = value.charCodeAt(i); 
		arrtemp[j] = value.substring(j,j+1);
		j++;
		if(i==0&&c==45){
			alert('IDは最長12文字まで可能です。');
			return false;	
		}
		
	}
	document.login_form.arr.value = arrtemp;
	return true;
}

function fn_left_login_form_submit()
{
	var rtn;
	document.login_form.userid.value = chg_jun_ban(document.login_form.userid.value);
	rtn = left_checkIsZenkaku(document.login_form.userid.value);
	if(!rtn){
		document.login_form.userid.focus();
		return false;	
	}
	
	if(document.login_form.userid.value.length==0){
		alert("IDを入力してください。");
		document.login_form.userid.focus();
		return false;
	}
	
	for(var nBytes=0,i=0; i<document.login_form.userid.value.length; i++) { nBytes +="(" document.login_form.userid.value.charCodeAt(i)>128 ) ? 2 : 1;
	}
	
	if(nBytes < 4 || nBytes > 12 || (document.login_form.userid.value.match(/\S+/) != document.login_form.userid.value) ){
		alert('IDは最長12文字まで可能です。');
		document.login_form.userid.focus();
		return false;
	}
	
	if(document.login_form.pw.value.length==0){
		alert("パスワードを入力してください。");
		document.login_form.pw.focus();
		return false;
	}
	if(document.login_form.pw.value.length>16){
		alert("パスワードは最長16文字まで可能です。");
		document.login_form.pw.focus();
		return false;
	}
	return true;
	
}

function goLogin(){
	if(fn_left_login_form_submit()){
		var ssl_chk = document.login_form.ssl.checked;
		if(ssl_chk==true){
			document.login_form.action="https://login.mgame.jp/slogin_process.php";
		}else{
			document.login_form.action="http://www.mgame.jp/member/plogin_process.php";
		}
		return true;
	}
	return false;
}

//window.attachEvent('onload',fn_start_idfocus);
</document.login_form.userid.value.length;>