<?php 
require 'add.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title> Admin</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Add custom CSS here -->
		<link href="css/sb-admin.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<!-- Page Specific CSS -->
		<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
	</head>

	<body>

		<div id="wrapper">
			<!-- Sidebar -->
			<?php
				require 'sidebar.php';
			?>

			<div>
				<div id="page-wrapper">
					<br>
					<br>
					<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" >

						<div class="form-group">
							<label for="question" class="col-sm-2 control-label">Name(Full name):</label>
							<div class="col-sm-5">
								<input type="text"  class="form-control" id="name" name="name" placeholder="First Name" value="">
								<?php
									if (isset($error_name)) { echo $error_name;
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="question" class="col-sm-2 control-label">Username:</label>
							<div class="col-sm-5">
								<input type="text"  class="form-control" id="username" name="username" placeholder="User Name" value="">
								<?php
									if (isset($error_username)) { echo $error_username;
									}
								?>
							</div>
						</div>
						<?php
						$result = mysql_query("select * from student");
						$row = mysql_fetch_array($result);
						$count = mysql_num_rows($result);
						//echo '<script>alert("'.count.'");</script>';
						if($count == 0){
							$roll = 1;
						}else{
							$roll = $row['roll_no'];
							$roll++;
						}
						
						?>
						<div class="form-group">
							<label for="question" class="col-sm-2 control-label">Password:</label>
							<div class="col-sm-5">
								<input type="password"  class="form-control" id="password" name="password" placeholder="Password" value="">
								<?php
									if (isset($error_password)) { echo $error_password;
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="option1" class="col-sm-2 control-label">Roll no.:</label>
							<div class="col-sm-2">
								<input type="text"  class="form-control" id="roll_no" name="roll_no" placeholder="Roll number" value="">
								<?php
									if (isset($error_roll_no)) { echo $error_roll_no;
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="option2" class="col-sm-2 control-label">Email :</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Email" name="email" id="email" value="">
								<?php
									if (isset($error_email)) { echo $error_email;
									}
								?>
							</div>
						</div>

						<div class="form-group">
							<label for="option3" class="col-sm-2 control-label">Contact no.:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Phone no..." name="phone" id="phone" value="">
								<?php
									if (isset($error_phone)) { echo $error_phone;
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="option4" class="col-sm-2 control-label">Address:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3" placeholder="Address..." name="address" id="address"></textarea>
								<?php
									if (isset($error_address)) { echo $error_address;
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="answer" class="col-sm-2 control-label">Country:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Country" name="country" id="country">
								<?php
									if (isset($error_country)) { echo $error_country;
									}
								?>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-4">
								<button type="submit" class="btn btn-info" value="submit" name="add_student">
									Add
								</button>
							</div>
						</div>

					</form>

				</div><!-- /#page-wrapper -->
			</div>

		</div><!-- /#wrapper -->

		<!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.js"></script>

		<!-- Page Specific Plugins -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
		<script src="js/morris/chart-data-morris.js"></script>
		<script src="js/tablesorter/jquery.tablesorter.js"></script>
		<script src="js/tablesorter/tables.js"></script>

	</body>
</html>
