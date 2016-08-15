function signupAjax(){
	var userEmail = $("#email-init").val();
	if(userEmail != ""){
		$("#email").val(userEmail);
		$("#userSignupForm").modal("show");
	}	
	//writeUserDBAjax(userEmail);
	//mailAjax(userEmail);
}

function writeUserDBAjax(userEmail){
	console.log("writing user information to db");

}

function mailAjax(userEmail){
	console.log("mailing user information to db");
	$.ajax({
		type:"POST",
		url:"mail-user.php",
		dataType:"json",
		data:'email=' + userEmail,
		cache: false,
		processData: false,
		success: function(data){
			if(data.success){
				console.log("Message: " + data.message);
			}
			else{
				console.log("Message: " + data.message);
			}
		}
	});
}

$(document).ready(function() {
    $("#start-init").click(function() {
    	signupAjax();
    });
});
