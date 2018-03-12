<!DOCTYPE html>
<html>



<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>



<body>

	<!-- container -->
	<div class="container py-5">
		<div class="row">
			<div class="col-md-5 mx-auto">
				
				<!-- form card login -->
			    <div class="card rounded-0">
			    	<!--card-block-->
			        <div class="card-header">
			            <h3 class="mb-0">Register</h3>
			        </div>
			        <div class="card-body">
			            <form action="register.php" class="form" role="form" autocomplete="off" novalidate="" method="post">
			            	<div class="form-group">
			                    <label>Your Name</label>
			                    <input type="text" class="form-control form-control-lg rounded-0" name="showname" id="showname" required="" 
			                    title="Enter your name. Minimum 3 characters.">
			                    <div class="invalid-feedback" id="invalid-showname">Please enter your name. Minimum 3 characters.</div>
			                </div>
			                <div class="form-group">
			                    <label>Username</label>
			                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required=""
			                    title="Minimum 6 characters and maximum 50 characters.">
			                    <div class="invalid-feedback" id="invalid-username">Minimum 6 characters and maximum 50 characters.</div>
			                </div>
			                <div class="form-group">
			                    <label>Email</label>
			                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required=""
			                    title="Please enter your valid email.">
			                    <div class="invalid-feedback" id="invalid-email">Please enter your valid email.</div>
			                </div>
			                <div class="form-group">
			                    <label>Password</label>
			                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password"
			                    title="Create your password. Minimum 6 characters and maximum 60 characters.">
			                    <div class="invalid-feedback" id="invalid-password">Please input your password. Minimum 6 characters and maximum 60 characters.</div>
			                </div>
			                <button type="button" class="btn btn-success btn-lg float-right" id="register-button">Register</button>
			            </form>
			        </div>
			        <!--/card-block-->
			    </div>
			    <!-- /form card login -->

			</div>
		</div>
	</div>
	<!-- /container -->
    


	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/js_register.js"></script>

</body>



</html>