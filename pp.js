function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#password").val();

    if ((password && confirmPassword) == "") {
        $("#repassword").html("");
    } else if (password != confirmPassword) {
        $("#repassword").html("Password do not match!");
        $("#repassword").css("color", "red");
    } else {
        $("#repassword").html("Password match.");
        $("#repassword").css("color", "green");
    }
}
//trigger keyup event in function checkPasswordMatch
$(document).ready(function() {
    $("#createpassword, #confirmpassword").keyup(checkPasswordMatch);
});

//Add an Email Regular Expression and pass it to function validate
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

//Email Validate function
function validate() {
    var email = $("#email").val();
    if (validateEmail(email)) {
        $("#checkEmail").text("");
    } else 
    {
        $("#checkEmail").text("Please enter a valid email address");
        $("#checkEmail").css("color", "red");
    }
}
//Call the function validate in blur event Jquery
$(document).ready(function(){
	$("#email").blur(validate);
});