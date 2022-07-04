// Change image script
function ChangeOff(obj) {
	var imgURL = obj.src;
	var fType = imgURL.match(/\.[a-zA-Z]{3,4}$/);

	if(fType && imgURL.match("_on"+fType)){
		obj.src = imgURL.replace(RegExp.lastMatch,"_off"+fType);
		}
	}

function ChangeOn(obj) {
	var imgURL = obj.src;
	var fType = imgURL.match(/\.[a-zA-Z]{3,4}$/);
	
	if(fType && imgURL.match("_off"+fType)){
		obj.src = imgURL.replace(RegExp.lastMatch,"_on"+fType);
		}
	}

// Change image auto
window.onload = function ChangeAuto() {

	pageImg = document.body.getElementsByTagName("img");
	maxi = pageImg.length;
	
	for (i=0;i