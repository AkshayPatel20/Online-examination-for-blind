<?php
session_start();
if (isset($_POST["page"]) && !empty($_POST["page"])) {

	$username = trim(strip_tags(mysql_real_escape_string($_POST["username"])));
	$_SESSION['time'] = $username;

	echo $username;
	

}
?>