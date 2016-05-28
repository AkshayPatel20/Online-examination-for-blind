<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
	die('Mysql connection error ' . mysql_error());
}

$db = mysql_select_db('blind', $conn);
if (!$db) {
	die('Database selection failed ' . mysql_error());
}
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['add']))) {

	$question = $_POST['question'];
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4 = $_POST['option4'];
	$answer = $_POST['answer'];

	if ($question == '') {
		$err_question = '<span class="label label_danger">Question required</span>';
	} elseif ($option1 == '') {
		$err_option1 = '<span class="label label_danger">Option1 required</span>';
	} elseif ($option2 == '') {
		$err_option2 = '<span class="label label_danger">Option2  required</span>';
	} elseif ($option3 == '') {
		$err_option3 = '<span class="label label_danger">Option3 required</span>';
	} elseif ($option4 == '') {
		$err_option4 = '<span class="label label_danger">Option4 required</span>';
	} elseif ($answer == '') {
		$err_answer = '<span class="label label_danger">True Answer required</span>';
	} else {

		$add = mysql_query("insert into quantitive (question,option1,option2,option3,option4,trueans)values('$question','$option1','$option2','$option3','$option4','$answer')");

		if (!$add) {
			die("lid query: " . mysql_error());
		}

	}

}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['add_student']))) {

	$name = $_POST['name'];
	$username = $_POST['username'];
	$roll_no = $_POST['roll_no'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$password = $_POST['password'];

	if ($name == '') {
		$err_name = '<span class="label label_danger">name required</span>';
	} else if ($username == '') {
		$err_username = '<span class="label label_danger">username required</span>';
	} elseif ($roll_no == '') {
		$err_roll_no = '<span class="label label_danger">Roll Number required</span>';
	} elseif ($email == '') {
		$err_email = '<span class="label label_danger">Email required</span>';
	} elseif ($phone == '') {
		$err_phone = '<span class="label label_danger">Phone no. required</span>';
	} elseif ($address == '') {
		$err_address = '<span class="label label_danger">Address required</span>';
	} elseif ($country == '') {
		$err_country = '<span class="label label_danger">Country required</span>';
	} else {

		$add = mysql_query("insert into student (name,username,password,roll_no,email,phone,address,country)values('$name','$username','$password','$roll_no','$email','$phone','$address','$country')");

		if (!$add) {
			die("lid query: " . mysql_error());
		}

	}

}
?>