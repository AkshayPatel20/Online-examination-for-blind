<?php
require 'exam_time_process.php';
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
					<div class="tab-content">
						<br>
						<br>
						<form class="form-horizontal" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="question" class="col-sm-2 control-label">Add Time (in seconds)</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" placeholder="Time...." name="time" id="time"></input>			
									<?php
										if (isset($error_msg_time)) { echo $error_msg_time;
										}
									?>			
								</div>
							</div>
							<br>
							<div class="form-group">
								<label for="question" class="col-sm-2 control-label">Add Warning Time (in seconds)</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" placeholder="Warning Time...." name="warning_time" id="warning_time"></input>	
									<?php
										if (isset($error_msg_warning_time)) { echo $error_msg_warning_time;
										}
									?>					
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-4">
									<button type="submit" class="btn btn-info" value="submit" name="action">
										ADD TIME
									</button>
								</div>
							</div>
						</form>
					</div>

				</div><!-- /#page-wrapper -->
			</div>
		</div><!-- /#wrapper -->

		<!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
		<script src="js/morris/chart-data-morris.js"></script>
		<script src="js/tablesorter/jquery.tablesorter.js"></script>
		<script src="js/tablesorter/tables.js"></script>

	</body>
</html>
