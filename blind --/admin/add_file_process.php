<?php

if(isset($_POST["Import"])) {

	$host="localhost"; // Host Name.
	$db_user="root"; //User Name
	$db_password="";
	$db="blind"; // Database Name.

	$conn=mysql_connect($host,$db_user,$db_password) or die (mysql_error());
	mysql_select_db($db) or die (mysql_error());

	echo $filename=$_FILES["file"]["tmp_name"];
	if($_FILES["file"]["size"] > 0) {
		$file = fopen($filename, "r");
		while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
			//print_r($emapData);
			$sql = "INSERT INTO quantitive(question,option1,option2,option3,option4,trueans) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]')";
			mysql_query($sql);
		}
		fclose($file);
		echo "<script>alert('CSV File has been successfully Imported');</script>";
	}
	else {
		echo "<script>alert('Invalid File: Please Upload CSV File');</script>";
	}
}
?>