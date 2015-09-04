function gt_navAgent(){
	if((navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i))) {
		return Boolean(navigator.userAgent.match(/OS [0-4]_\d[_\d]* like Mac OS X/i));
	}
	else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE9.0") {
		return true;
	}
	else {
		return false;
	}
}
if (!gt_navAgent()){
	var footerObj = document.getElementsByTagName("footer") && document.getElementsByTagName("footer")[0];
	footerObj.style.position = "fixed";
	footerObj.style.left = 0;
	footerObj.style.bottom = 0;
	document.body.style.paddingBottom = 44+'px';
}
