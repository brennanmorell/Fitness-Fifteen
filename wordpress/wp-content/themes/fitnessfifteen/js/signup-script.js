var signedUp = false;

function signupAjax(){
	if(!signedUp){
		//prepare relevant signup fields
		$(".modal-title.start").show();
		$(".modal-body form").show();
		$("#signup-wrapper").show();
		$(".modal-footer").show();
		$(".modal-title.confirmation").hide();
		$(".signup-confirmation").hide();

		var userEmail = $("#email-init").val();
		if(filterEmail(userEmail)){
			$("#email").val(userEmail);
			$("#userSignupForm").modal("show");

			$("#signup").off("click");
			$("#signup").on("click", function(){
				console.log("Click event attached");
				userEmail = $("#email").val();
				userFirst = $("#first").val();
				userLast = $("#last").val();
				processInput(userEmail, userFirst, userLast)
			});
		}
		else{
			$("#init-message").show();
		}
	}
	else{
		console.log("User already signed up.")
		//already signed up
		$("#userSignupForm").modal("show");
	}
}

function callToActionAjax(){
	if(!signedUp){
		//prepare relevant signup fields
		$(".modal-title.start").show();
		$(".modal-body form").show();
		$("#signup-wrapper").show();
		$(".modal-footer").show();
		$(".modal-title.confirmation").hide();
		$(".signup-confirmation").hide();

		var userEmail = $("#call-email").val();
		if(filterEmail(userEmail)){
			$("#email").val(userEmail);
			$("#userSignupForm").modal("show");

			$("#signup").off("click");
			$("#signup").on("click", function(){
				console.log("Click event attached");
				userEmail = $("#email").val();
				userFirst = $("#first").val();
				userLast = $("#last").val();
				processInput(userEmail, userFirst, userLast)
			});
		}
		else{
			$("#call-message").show();
		}
	}
	else{
		console.log("User already signed up.")
		//already signed up
		$("#userSignupForm").modal("show");
	}
}

function processInput(userEmail, userFirst, userLast){
	console.log("Processing input.");

	if(filterEmail(userEmail)){
		$.ajax({
			type:"POST",
			url:"process-input.php",
			dataType:"json",
			data:'email=' + userEmail + '&first=' + userFirst + '&last=' + userLast,
			cache: false,
			processData: false,
			success: function(data){
				if(data.success){
					console.log("Message: " + data.message);
					writeUserDBAjax(userEmail, userFirst, userLast);
				}
				else{
					console.log("Message: " + data.message);
					$("#signup-error-msg").html("*" + data.message);
				}
			}
		});
	}
	else{
		$("#signup-error-msg").html("*Email must be a valid .edu address.");
	}
}

function writeUserDBAjax(userEmail, userFirst, userLast){
	console.log("Writing user information to db.");
	$.ajax({
		type:"POST",
		url:"write-user.php",
		dataType:"json",
		data:'email=' + userEmail + '&first=' + userFirst + '&last=' + userLast,
		cache: false,
		processData: false,
		success: function(data){
			if(data.success){
				console.log("Message: " + data.message);
				mailAjax(userEmail, userFirst, userLast);
			}
			else{
				console.log("Message: " + data.message);
				$("#signup-error-msg").html("*" + data.message);
			}
		}
	});
}

function mailAjax(userEmail, userFirst, userLast){
	console.log("Mailing user information.");
	$.ajax({
		type:"POST",
		url:"mail-user.php",
		dataType:"json",
		data:'email=' + userEmail + '&first=' + userFirst + '&last=' + userLast,
		cache: false,
		processData: false,
		success: function(data){
			if(data.success){
				console.log("Message: " + data.message);
				updateModal();
			}
			else{
				console.log("Message: " + data.message);
			}
		}
	});
}

function updateModal(){
	console.log("Updating modal.");
	$(".modal-title.start").hide();
	$(".modal-body form").hide();
	$("#signup-wrapper").hide();
	$(".modal-footer").hide();
	$(".modal-title.confirmation").show();
	$(".signup-confirmation").show();
	signedUp = true;
	$(window).scroll(function(){
        $("#userSignupForm").modal("hide"); 
    })
}

function filterEmail(userEmail){
	var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.+-]+\.edu$/;
	return re.test(userEmail);
}

$(document).ready(function() {
	$("#init-message").hide();
	$("#call-message").hide();
	$("#start-init").hide();

    $("#start-init").click(function() {
    	$("#init-message").hide();
    	signupAjax();
    });

    $("#call-signup").click(function() {
    	$("#call-message").hide(); //change
    	callToActionAjax();
    });

    $("#start-init").on("tap", function(){
    	$("#init-message").hide();
    	signupAjax();
    });


    $("#call-signup").on("tap", function(){
    	$("#call-message").hide();
    	callToActionAjax();
    });
});
