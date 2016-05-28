<?php
session_start();
require 'config.php';

//Validate the request brought
if (isset($_POST["page"]) && !empty($_POST["page"])) {

	$username1 = $_SESSION['username'];
	$username = trim(strip_tags(mysql_real_escape_string($_POST["username"])));

	$sql = "SELECT * FROM student WHERE username='$username1'AND password='$username' ";
		$result = mysql_query($sql);

		// Mysql_num_row is counting table row
		$count = mysql_num_rows($result);

		if($count == 1){
			echo "successful.php";
		}


}
	
?>