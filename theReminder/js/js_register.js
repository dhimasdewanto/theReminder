$('#register-button').click(function() {

	$.ajax({

		type: "POST",
		url: "api/register",
		processData: false,
		contentType: "application/json",

		data: '{"username": "' + $("#username").val() 
			+ '", "email": "' + $("#email").val()
			+ '", "password": "' + $("#password").val()
			+ '" }',

		success: function(d) {
			console.log(d)
			window.location = "register.php";
		},
		error: function(d) {
			console.log(d)
		}

	});

});