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
			                    <label>Username</label>
			                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
			                    <div class="invalid-feedback">Oops, you missed this one.</div>
			                </div>
			                <div class="form-group">
			                    <label>Email</label>
			                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">
			                    <div class="invalid-feedback">Oops, you missed this one.</div>
			                </div>
			                <div class="form-group">
			                    <label>Password</label>
			                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
			                    <div class="invalid-feedback">Enter your password too!</div>
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