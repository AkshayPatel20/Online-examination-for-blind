<?php
require "Login_validation.php";
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin Log In</title>

		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
		<link href="css/Border.css" rel="stylesheet" type="text/css">

		<!-- HTML5 shim for IE backwards compatibility -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style type="text/css">
			/* BOOTSTRAP 3.x GLOBAL STYLES
			 -------------------------------------------------- */

		</style>

	</head>

	<body>
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>

		</nav>

		<div class="container">
			<!----main container-------->

			<div id="login" class="well col-lg-offset-3 col-lg-6">
				<!-----main well class-------->

				<div id="login1" class="well  col-lg-12">

					<div class="alert alert-info">

						<h4>Admin Log In</h4>
						<hr>

						<form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" accept-charset="UTF-8">
							<div class="form-group">
								<label for="Username" class="col-lg-4 control-label">*Username</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" id="username" name="username" value="<?php
									if (isset($username)) { echo $username;
									}
								?>" placeholder="Username...">
									<?php
										if (isset($error_msg_username)) { echo $error_msg_username;
										}
									?>
								</div>
							</div>

							<div class="form-group">
								<label for="Password1" class="col-lg-4 control-label">*Password1</label>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password...">
									<?php
										if (isset($error_msg_password)) { echo $error_msg_password;
										}
									?>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<label class="col-lg-4 control-label"></label>
								<div class="col-lg-8">
									<button type="submit" class="btn btn-info" value="submit" name="action">
										Login
									</button>
									<?php
										if (isset($error_msg_login)) { echo $error_msg_login;
										}
									?>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div><!--------end main well class-------->
		</div><!------end main container------->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
