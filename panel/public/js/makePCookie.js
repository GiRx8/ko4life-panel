function Nethru_getCookieVal(e){var t=document.cookie.indexOf(";",e);return-1==t&&(t=document.cookie.length),unescape(document.cookie.substring(e,t))}function Nethru_SetCookie(e,t){var n=Nethru_SetCookie.arguments,o=Nethru_SetCookie.arguments.length,i=2<o?n[2]:null,r=3<o?n[3]:null,u=4<o?n[4]:null,a=5<o&&n[5];document.cookie=e+"="+escape(t)+(null==i?"":"; expires="+i.toGMTString())+(null==r?"":"; path="+r)+(null==u?"":"; domain="+u)+(1==a?"; secure":"")}function Nethru_GetCookie(e){for(var t=e+"=",n=t.length,o=document.cookie.length,i=0;i<o;){var r=i+n;if(document.cookie.substring(i,r)==t)return Nethru_getCookieVal(r);if(0==(i=document.cookie.indexOf(" ",i)+1))break}return null}function Nethru_makePersistentCookie(e,t,n,o){var r,u=new Date,a=new Date(2011,1,1);if(Nethru_GetCookie(e))return 1;var h=new Array;for(i=0;i<t;i++)h[i]=""+Math.random();for(r=u.getTime(),i=0;i<t;i++)r+=h[i].charAt(2);Nethru_SetCookie(e,r,a,n,o)}function Nethru_getDomain(){var e=document.domain.split("."),t=e[e.length-2]+"."+e[e.length-1];return 2==e[e.length-1].length?e[e.length-3]+"."+t:t}var Nethru_domain=Nethru_getDomain();Nethru_makePersistentCookie("PCID",10,"/",Nethru_domain);