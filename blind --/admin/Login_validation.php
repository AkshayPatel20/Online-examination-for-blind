<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['action'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == '') {
		$error_msg_username = '<span class="label label-success">Username Required</span>';
	}
	else if ($password == '') {
		$error_msg_password = '<span class="label label-success">Password Required</span>';

	} else  {

		$con = mysql_connect("localhost", "root", "");
		if (!$con) {
			die('could not connect ' . mysql_error());
		}

		$db_select = mysql_select_db("blind", $con);

		$sql1 = "SELECT * FROM admin WHERE username='$username' and password='$password'";
		$result1 = mysql_query($sql1);
		if (mysql_num_rows($result1) > 0) {// if one or more rows are returned do following

			while ($results1 = mysql_fetch_array($result1)) {
				$_SESSION['admin'] = $results1['username'];
				header('location:home.php');
			}

		} else {

			$error_msg_login = '<span class="label label-success">Username or Password is wrong !!!!</span>';

		}

	}

}
?>
