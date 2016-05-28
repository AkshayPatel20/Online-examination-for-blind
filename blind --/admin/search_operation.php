<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("blind", $conn);
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['submit']))) {

	$usersCount = count($_POST["id"]);
	for ($i = 0; $i < $usersCount; $i++) {
		mysql_query("UPDATE quantitive set question='" . $_POST["question"][$i] . "',
		 									option1='" . $_POST["option1"][$i] . "', 
		 									option2='" . $_POST["option2"][$i] . "', 
		 									option3='" . $_POST["option3"][$i] . "',
											option4='" . $_POST["option4"][$i] . "',
											trueans='" . $_POST["answer"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
		echo "<script>alert('Data updated..');</script>";
	}
}



if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['submit_student']))) {

	$usersCount = count($_POST["id"]);
	for ($i = 0; $i < $usersCount; $i++) {
		mysql_query("UPDATE student set name='" . $_POST["name"][$i] . "',
		 									roll_no='" . $_POST["roll_no"][$i] . "', 
		 									email='" . $_POST["email"][$i] . "', 
		 									phone='" . $_POST["phone"][$i] . "',
											address='" . $_POST["address"][$i] . "',
											country='" . $_POST["country"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
		echo "<script>alert('Data updated..');</script>";
	}
}



if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['delete']))) {

	$usersCount1 = count($_POST["users"]);
	for ($i = 0; $i < $usersCount1; $i++) {
		mysql_query("DELETE FROM quantitive WHERE id='" . $_POST["users"][$i] . "' ");
		echo "<script>alert('Data deleted..');</script>";
	}
}


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['delete_student']))) {

	$usersCount1 = count($_POST["users"]);
	for ($i = 0; $i < $usersCount1; $i++) {
		mysql_query("DELETE FROM student WHERE id='" . $_POST["users"][$i] . "' ");
		echo "<script>alert('Data deleted..');</script>";
	}
}
?>