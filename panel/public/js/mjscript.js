function fn_auth_popup()
{
	var x;
	var y;
	x = 380;
	y = 265;
	window.open('/popup/authpopup.html','yw_auth_popup','width='+x+',height='+y+',scrollbars=no');		
}

function trim_check(str) {
	var count = str.length;
	var len = count;
	var st = 0;
	var i = 0;
	while (len>i){
		if(str.charAt(i) == ' ' || str.charAt(i) == '?'){	// Caution Full char '?' and Half char ' '	
			st++;
		}
		i++;
	}
	if(st>0){
		alert("名前にはスペースを使用できません。");	
		return 1;
	}
	return 0;
}

function chg_jun_ban(value)
{
	
	var temp;
	var j;
	temp = '';
	j = 0;
	for (var i = 0; i < value.length; i++) {
		var c = value.charCodeAt(i); 
		//alert(c);
		switch(c){
		case 65296:	temp = temp + '0';
						break;
		case 65297:	temp = temp + '1';
						break;
		case 65298:	temp = temp + '2';
						break;
		case 65299:	temp = temp + '3';
						break;
		case 65300:	temp = temp + '4';
						break;
		case 65301:	temp = temp + '5';
						break;
		case 65302:	temp = temp + '6';
						break;
		case 65303:	temp = temp + '7';
						break;
		case 65304:	temp = temp + '8';
						break;
		case 65305:	temp = temp + '9';
						break;
		case 65313:	temp = temp + 'A';
						break;
		case 65314:	temp = temp + 'B';
						break;
		case 65315:	temp = temp + 'C';
						break;
		case 65316:	temp = temp + 'D';
						break;
		case 65317:	temp = temp + 'E';
						break;
		case 65318:	temp = temp + 'F';
						break;
		case 65319:	temp = temp + 'G';
						break;
		case 65320:	temp = temp + 'H';
						break;
		case 65321:	temp = temp + 'I';
						break;
		case 65322:	temp = temp + 'J';
						break;
		case 65323:	temp = temp + 'K';
						break;
		case 65324:	temp = temp + 'L';
						break;
		case 65325:	temp = temp + 'M';
						break;
		case 65326:	temp = temp + 'N';
						break;
		case 65327:	temp = temp + 'O';
						break;
		case 65328:	temp = temp + 'P';
						break;
		case 65329:	temp = temp + 'Q';
						break;
		case 65330:	temp = temp + 'R';
						break;
		case 65331:	temp = temp + 'S';
						break;
		case 65332:	temp = temp + 'T';
						break;
		case 65333:	temp = temp + 'U';
						break;
		case 65334:	temp = temp + 'V';
						break;
		case 65335:	temp = temp + 'W';
						break;
		case 65336:	temp = temp + 'X';
						break;
		case 65337:	temp = temp + 'Y';
						break;
		case 65338:	temp = temp + 'Z';
						break;
		case 65345:	temp = temp + 'a';
						break;
		case 65346:	temp = temp + 'b';
						break;
		case 65347:	temp = temp + 'c';
						break;
		case 65348:	temp = temp + 'd';
						break;
		case 65349:	temp = temp + 'e';
						break;
		case 65350:	temp = temp + 'f';
						break;
		case 65351:	temp = temp + 'g';
						break;
		case 65352:	temp = temp + 'h';
						break;
		case 65353:	temp = temp + 'i';
						break;
		case 65354:	temp = temp + 'j';
						break;
		case 65355:	temp = temp + 'k';
						break;
		case 65356:	temp = temp + 'l';
						break;
		case 65357:	temp = temp + 'm';
						break;
		case 65358:	temp = temp + 'n';
						break;
		case 65359:	temp = temp + 'o';
						break;
		case 65360:	temp = temp + 'p';
						break;
		case 65361:	temp = temp + 'q';
						break;
		case 65362:	temp = temp + 'r';
						break;
		case 65363:	temp = temp + 's';
						break;
		case 65364:	temp = temp + 't';
						break;
		case 65365:	temp = temp + 'u';
						break;
		case 65366:	temp = temp + 'v';
						break;
		case 65367:	temp = temp + 'w';
						break;
		case 65368:	temp = temp + 'x';
						break;
		case 65369:	temp = temp + 'y';
						break;
		case 65370:	temp = temp + 'z';
						break;
		
		default :	temp = temp + value.substring(j,j+1);
						break;
		}
		j++;
	}
	
//	alert(temp);
	return temp;
}
function popup(goPageURL,goPageName,goPageWidth,goPageHeight) 
{ 
	window.open(goPageURL,goPageName,'width='+goPageWidth+',height='+goPageHeight+',menubar=no, scrollbars=no, resizable=no,top=50,left=50'); 
} 

function allblur() {
	for (i = 0; i < document.links.length; i++)
	document.links[i].onfocus = document.links[i].blur;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++) if (a[i].indexOf("#")!="0){" d.MM_p[j]="new" Image; d.MM_p[j++].src="a[i];}}" } function MM_swapImgRestore() { v3.0 var i,x,a="document.MM_sr;" for(i="0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++)" x.src="x.oSrc;" MM_findObj(n, d) v4.0 p,i,x; if(!d) d="document;" if((p="n.indexOf("?"))">0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i</a.length;>