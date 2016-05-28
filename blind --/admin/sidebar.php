<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('location: index.php');
}
?>
<!-- Sidebar -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">Admin</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li class="active">
							<a href="home.php"><i class="fa fa-dashboard"></i> ADD Question</a>
						</li>
						<li>
							<a href="add_file.php"><i class="fa fa-dashboard"></i> ADD File</a>
						</li>
						<li>
							<a href="Search_question.php"><i class="fa fa-edit"></i> SEARCH Question</a>
						</li>
						<li>
							<a href="register.php"><i class="fa fa-edit"></i> ADD Student</a>
						</li>
						<li>
							<a href="Search_student.php"><i class="fa fa-edit"></i> SEARCH Student</a>
						</li>
						<li>
							<a href="exam_time.php"><i class="fa fa-edit"></i> Set Exam Time</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right navbar-user">

						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo ' '.$_SESSION['admin']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu">

								<li>
									<a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>