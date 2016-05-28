<?php
require 'search_operation.php';
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect:'.mysql_error());
}
$db_select=mysql_select_db("blind",$con);
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
								<label for="question" class="col-sm-2 control-label">Roll no.:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" placeholder="Roll no..." name="roll_no" id="roll_no"></textarea>																			
										<?php
										if (isset($err_question)) {
											echo $err_question;
										}
										?>
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-4">
									<button type="submit" class="btn btn-info" value="submit" name="search">
										SEARCH
									</button>
								</div>
							</div>
							
							<table class="table table-bordered">
									<tbody>
										<?php

										if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['search'])))
										{
										$roll_no = $_POST['roll_no'];

										$mysql="select * from student where roll_no= '$roll_no'";

										$result = mysql_query($mysql);
										if (!$result) {

										echo"Enter Roll number to search...";
										die("lid query: " . mysql_error());
										}
										?>

										<tc class="techSpecRow">
											<th></th>
										</tc>
										<tc class="techSpecRow">
											<th>ID</th>
										</tc>
										<tc class="techSpecRow">
											<th>Name</th>
										</tc>
										<tc class="techSpecRow">
											<th>Roll No.</th>
										</tc>
										<tc class="techSpecRow">
											<th>Email</th>
										</tc>
										<tc class="techSpecRow">
											<th>Phone no.</th>
										</tc>
										<tc class="techSpecRow">
											<th>Address</th>
										</tc>
										<tc class="techSpecRow">
											<th>Country</th>
										</tc>
										
										<?php
										$i=0;
										while($row = mysql_fetch_array($result))
										{
										if($i%2==0)
										$classname="evenRow";
										else
										$classname="oddRow";
										?>
										<tr class="<?php
										if (isset($classname))
											echo $classname;
										?>">
											<td>
											<input type="checkbox" name="users[]" value="<?php echo $row["id"]; ?>" >
											</td>
											<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["name"]; ?></td>
											<td><?php echo $row["roll_no"]; ?></td>
											<td><?php echo $row["email"]; ?></td>
											<td><?php echo $row["phone"]; ?></td>
											<td><?php echo $row["address"]; ?></td>
											<td><?php echo $row["country"]; ?></td>
										</tr>
										<?php
										$i++;
										}
										?>
										<tr class="listheader">
											<td>
												<div class="col-lg-4">
													<button class="btn btn-large btn-warning" type="submit" value="submit" name="update">
														Update
													</button>
												</div>
											</td>
											<td>
												<div class="col-lg-4">
													<button class="btn btn-large btn-warning" type="submit" value="submit" name="delete_student">
														Delete
													</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<?php } ?>
						</form>
						<?php

							if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['update'])))
							{
							?>
									<form name="frmUser" method="POST" action="">
										<div style="width:500px;">
											<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
											<tr class="tableheader">
											<td>Edit Student Dtails</td>
											</tr>

											<?php 	$rowCount = count($_POST["users"]);
												for($i=0;$i<$rowCount;$i++)
												{
												$result = mysql_query("select * from student WHERE id='" . $_POST["users"][$i] . "'");
												$row[$i]= mysql_fetch_array($result);
												?>
												<tr>
													<td>
														<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
												<tr>
													<td><label>Name</label></td>
													<td>
														<input type="hidden" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>">
														<input type="text" class="form-control" rows="3" name="name[]" value="<?php echo $row[$i]['name']; ?>">
													</td>
												</tr>
												<tr>
													<td><label>Roll no.</label></td>
													<td>
														<input type="text" class="form-control" rows="3" name="roll_no[]" value="<?php echo $row[$i]['roll_no']; ?>">
													</td>
												</tr>
												<tr>
													<td><label>Email</label></td>
													<td>
														<input type="text" class="form-control" rows="3" name="email[]" value="<?php echo $row[$i]['email']; ?>">
													</td>
												</tr>
													<td><label>Phone no.</label></td>
													<td>
														<input type="text" class="form-control" rows="3" name="phone[]" value="<?php echo $row[$i]['phone']; ?>">
													</td>
												</tr>
													<td><label>Address</label></td>
													<td>
														<textarea class="form-control" rows="3" name="address[]" ><?php echo $row[$i]['address']; ?></textarea>
													</td>
												</tr>
													<td><label>Country</label></td>
													<td>
														<input type="text" class="form-control" rows="3" name="country[]" value="<?php echo $row[$i]['country']; ?>">
													</td>
												</tr>
												
												
												</table>
												</td>
												</tr>
												<?php } ?>
											<tr>
												<td colspan="2">
												<button class="btn btn-large btn-warning" type="submit" value="submit" name="submit_student">
													Submit
												</button></td>
											</tr>
											</table>
										</div>
									</form>

									<?php
									}
									?>

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
