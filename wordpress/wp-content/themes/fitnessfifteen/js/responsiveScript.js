
var responsive = false;

function navRespond() {
	console.log("Ready for nav to be respond");
    document.getElementById("navUL").classList.toggle("responsive");
    if(responsive){
    	responsive = false;
    }
    else{
    	responsive = true;
    }
}

function hideNav(){
	if(responsive){
		navRespond();
	}
}

/* fix this so it does on touch (on click function is currently used in html*/
