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
							<label for="question" class="col-sm-2 control-label">Question:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="5" placeholder="Question" name="question" id="question"></textarea>										
								<?php
								if (isset($err_question)) {
									echo $err_question;
								}
								?>

							</div>
						</div>
						<div class="form-group">
							<label for="option1" class="col-sm-2 control-label">Option1:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3" placeholder="Option1" name="option1" id="option1"></textarea>										
								<?php
								if (isset($err_option1)) {
									echo $err_option1;
								}
								?>

							</div>
						</div>
						<div class="form-group">
							<label for="option2" class="col-sm-2 control-label">Option2:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3" placeholder="Option2" name="option2" id="option2"></textarea>										
								<?php
								if (isset($err_option2)) {
									echo $err_option2;
								}
								?>

							</div>
						</div>

						<div class="form-group">
							<label for="option3" class="col-sm-2 control-label">Option3:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3" placeholder="Option3" name="option3" id="option3"></textarea>										
								<?php
								if (isset($err_option3)) {
									echo $err_option3;
								}
								?>

							</div>
						</div>
						<div class="form-group">
							<label for="option4" class="col-sm-2 control-label">Option4:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3" placeholder="Option4" name="option4" id="option4"></textarea>										
								<?php
								if (isset($err_option4)) {
									echo $err_option4;
								}
								?>

							</div>
						</div>
						<div class="form-group">
							<label for="answer" class="col-sm-2 control-label">Answer:</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3" placeholder="Answer" name="answer" id="answer"></textarea>										
								<?php
								if (isset($err_answer)) {
									echo $err_answer;
								}
								?>

							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-4">
								<button type="submit" class="btn btn-info" value="submit" name="add">
									Add
								</button>
							</div>
						</div>

					</form>

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
