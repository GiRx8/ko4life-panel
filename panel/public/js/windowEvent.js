function f_isDialogWindow(){return void 0!==self.dialogWidth}function f_getTopBodyObj(){return!!document&&document.body}function windowPositionCenter(e,i){self.top.moveTo((screen.width-e)/2,(screen.height-i)/2)}function f_makeObjChangeSize(e,i){this.width=e,this.height=i}function f_getChangeSize(e,i){var o,n,t;if(o=f_getTopBodyObj())return n=e-o.clientWidth,t=i-o.clientHeight,!(isNaN(n)||isNaN(t)||0==n&&0==t)&&new f_makeObjChangeSize(n,t)}function f_normalWinResize(e){}function f_modalWinResize(e,i,o){var n,t,d;e&&i&&(n=f_getChangeSize(e,i))&&(t=parseInt(top.dialogWidth)+n.width,d=parseInt(top.dialogHeight)+n.height,self.top.dialogWidth=t+"px",self.top.dialogHeight=d+"px",o&&windowPositionCenter(e,i))}function windowPositionCenter(e,i){var o,n;e&&i&&(o=(screen.height-i)/2,n=(screen.width-e)/2,f_isDialogWindow()?(self.top.dialogTop=o+"px",self.top.dialogLeft=n+"px"):self.top.moveTo(n,o))}function windowResize(e,i,o){windowResizeBy(e,i,o)}function windowResizeBy(e,i,o){var n;try{if(f_isDialogWindow())return setTimeout("f_modalWinResize("+e+", "+i+", "+o+")",0);if(!e)return;if(i||(i=document.body.scrollHeight),!(n=f_getChangeSize(e,i)))return;self.top.resizeBy(n.width,n.height),o&&windowPositionCenter(e,i)}catch(e){}}function windowResizeEx(e,i,o){windowResizeBy(e,i,o)}function windowAutoResize(e){windowResizeBy(document.body.scrollWidth,document.body.scrollHeight,e)}function windowAutoResize2(e){windowAutoResize(e)}function winAutoResize(e){windowAutoResize(e)}function windowGetSize(){alert(document.body.scrollWidth+"/"+document.body.scrollHeight)}function fn_iframeResize(e){var i,o,n;(n=document.all[e])&&(i=document.frames[e])&&(o=i.document)&&(n.style.pixelWidth=o.body.scrollWidth,n.style.pixelHeight=o.body.scrollHeight)}function selectByValue(e,i){var o=0;if(e.type){if(e.type.match("select*"))for(o=0;o<e.options.length;o++)if(e.options[o].value==i)return void(e.selectedIndex=o)}else if("radio"==e[0].type)for(o=0;o<e.length;o++)if(e[o].value==i)return void(e[o].checked=!0)}function openWinW(e,i,o,n,t,d,s){var l="",r=screen.width,a=screen.height,f=0,c=0;""==t||""==d?(o<r&&(f=(r-o)/2),n<a&&(c=(a-n)/2-40)):(f=d,c=t),l=(l=l+"toolbar=no, channelmode=no, location=no, directories=no, resizable=yes, menubar=no,"+(0==s?" scrollbars=no":" scrollbars=yes"))+", width="+o+", height="+n+", top="+c+", left="+f;var w=window.open(e,i,l);return w.focus(),w}function f_addOnloadEvent(e){if(void 0!==window.addEventListener)window.addEventListener("load",e,!1);else if(void 0!==window.attachEvent)window.attachEvent("onload",e);else{var i=window.onload;window.onload="function"==typeof i?function(o){i(o),window[e](),window.onload=null}:e}}