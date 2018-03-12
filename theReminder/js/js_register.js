$('#register-button').click(function() {

	validateShowname();
	validateUsername();
	validateEmail();
	validatePassword();

	$.ajax({

		type: "POST",
		url: "api/register",
		processData: false,
		contentType: "application/json",

		data: '{"showname": "' + $("#showname").val() 
			+ '", "username": "' + $("#username").val()
			+ '", "email": "' + $("#email").val()
			+ '", "password": "' + $("#password").val()
			+ '" }',

		success: function(d) {
			console.log(d)
			window.location = "index.php";
		},
		error: function(d) {
			console.log(d)
		}

	});

});



function validateShowname() {
	if($('#showname').length < 3 || $('#showname').length > 255) {
		$('#invalid-showname').css("display", "block");
	}
}



function validateUsername() {
	if($('#username').length < 6 || $('#username').length > 50) {
		$('#invalid-username').css("display", "block");
	}
}



/**
	Bug = ga bisa validasi email
*/
function validateEmail() {
	var email = $('#email').val();

	if (checkEmailFormat(email)) {
		$('#invalid-username').css("display", "block");
	}
	else {
		$('#invalid-username').css("display", "block");
	}
}



/**
	Bug = ga bisa validasi email
*/
function checkEmailFormat(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(sEmail)) {
		return true;
	}
	else {
		return false;
	}
}



function validatePassword() {
	if($('#password').length < 6 || $('#password').length > 60) {
		$('#invalid-password').css("display", "block");
	}
}