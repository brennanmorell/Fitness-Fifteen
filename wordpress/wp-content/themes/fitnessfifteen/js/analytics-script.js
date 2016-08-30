$(document).ready(function() {
	console.log("New site visit");
    $.ajax({
        type:"POST",
        url:"analytics.php",
        dataType:"json",
        cache: false,
        processData: false,
        success: function(data){
            if(data.success){
                console.log("Message: " + data.message);
                console.log("Info: " + data.info);
            }
            else{
                console.log("Message: " + data.message);
            }
        }
    });
});
