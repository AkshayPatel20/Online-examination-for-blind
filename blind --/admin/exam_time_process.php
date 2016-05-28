<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['action'])) {

	$time = $_POST['time'];
	$warning_time = $_POST['warning_time'];

	if ($time == '') {
		$error_msg_time = '<span class="label label-success">Time Required</span>';
	}
	else if ($warning_time == '') {
		$error_msg_warning_time = '<span class="label label-success">Warning Time Required</span>';

	} else  {

		$con = mysql_connect("localhost", "root", "");
		if (!$con) {
			die('could not connect ' . mysql_error());
		}

		$db_select = mysql_select_db("blind", $con);

		$sql="UPDATE exam_time SET time='".$time."', warning_time='".$warning_time."' WHERE id='1'";

		$result=mysql_query($sql);

	}

}

?>