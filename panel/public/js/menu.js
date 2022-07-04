function menuLink(frm) {
    var linkLoc = frm.options[frm.selectedIndex].value
    if (linkLoc != "") {
        if (linkLoc.charAt(0) == '#') { window.location.href = linkLoc; }
        else {
            window.open(linkLoc, '_blank');
        }
    }
    frm.selectedIndex = 0;
}
function fn_gomint() {
    alert('ログイン後ご使用ください。');
}
function yahoo_login(dest) {
    window.location.href = "https://login.mgame.jp/yahoo/yahoo_login.php?dest=" + dest;
}
function fuji_login(dest) {
    document.cookie = "login_dest=" + escape(dest) + "; Domain=.mgame.jp; path=/";
    document.cookie = "login_Coop=FUJITV; Domain=.mgame.jp; path=/";
    location.href = "http://odaiba.fujitv.co.jp/cgi-bin/red_mpl/common/id/affiliate_game_gw.cgi?cid=knight&sc=afiodaiba";
}