<!DOCTYPE html>
<html>



<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>



<body>

	<!-- container -->
	<div class="container py-5">
		<div class="row">
			<div class="col-md-5 mx-auto py-5">
				
				<!-- form card login -->
			    <div class="card rounded-0">
			    	<!--card-block-->
			        <div class="card-header">
			            <h3 class="mb-0">Login</h3>
			        </div>
			        <div class="card-body">
			            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
			                <div class="form-group">
			                    <label for="uname1">Username</label>
			                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
			                    <div class="invalid-feedback">Oops, you missed this one.</div>
			                </div>
			                <div class="form-group">
			                    <label>Password</label>
			                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
			                    <div class="invalid-feedback">Enter your password too!</div>
			                </div>
			                <div class="form-check">
			                    <label class="form-check-label">
    								<input class="form-check-input" type="checkbox" value="">
    								<span>Remember Me</span>
  								</label>
			                </div>
			                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
			            </form>
			        </div>
			        <!--/card-block-->
			    </div>
			    <!-- /form card login -->

			</div>
		</div>
	</div>
	<!-- /container -->
    


	<script type="js/jquery-3.3.1.min.js"></script>
	<script type="js/bootstrap.min.js"></script>

</body>



</html>