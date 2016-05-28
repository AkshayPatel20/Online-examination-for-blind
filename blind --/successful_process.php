<?php

// Validate the request brought
if (isset($_POST["page"]) && !empty($_POST["page"])) {

$username = trim(strip_tags(mysql_real_escape_string($_POST["username"])));

	if($username == 'start exam' || $username == 'start' || $username == 'exam' || $username == '* exam' || $username == 'sat exam' ) {
		echo "exam.php";
	}	

}
	
?>