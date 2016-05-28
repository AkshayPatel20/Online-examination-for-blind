<?php
// session start
session_start();

// require database connectivity file 
require 'config.php';

// Validate the request brought
if (isset($_POST["page"]) && !empty($_POST["page"])) {


	$username = trim(strip_tags(mysql_real_escape_string($_POST["username"])));

	if($username == 'a' || $username == 'hey' ) {

		// first copy the skipped array
		$skipped = $_SESSION['skipped'];

		// take current 'k' from session
		$k = $_SESSION['k'];

		// take id from skipped array based on 'k'
		$id = $skipped[$k];

		// save answer into session using id
		//$_SESSION['answer'.$id] = 'a';
		
		$skipped_i = $_SESSION['skipped_i'];

		$i_value = $skipped_i[$k];

		$_SESSION['answer'.$i_value] = 'a';
		

		// increment 'k'
		$k++;

		// save that into session
		$_SESSION['k'] = $k;		
		
		// refresh page
		echo "exam1.php";


	} else if($username == 'b' || $username == 'bee') {

		
		// first copy the skipped array
		$skipped = $_SESSION['skipped'];

		// take current 'k' from session
		$k = $_SESSION['k'];

		// take id from skipped array based on 'k'
		$id = $skipped[$k];

		// save answer into session using id
		//$_SESSION['answer'.$id] = 'b';

		$skipped_i = $_SESSION['skipped_i'];

		$i_value = $skipped_i[$k];

		$_SESSION['answer'.$i_value] = 'b';
		
		// increment 'k'
		$k++;

		// save that into session
		$_SESSION['k'] = $k;		
		
		// refresh page
		echo "exam1.php";


	} else if($username == 'c' || $username == 'see' || $username == 'she' || $username == 'sea') {

		
		// first copy the skipped array
		$skipped = $_SESSION['skipped'];

		// take current 'k' from session
		$k = $_SESSION['k'];

		// take id from skipped array based on 'k'
		$id = $skipped[$k];

		// save answer into session using id
		//$_SESSION['answer'.$id] = 'c';

		$skipped_i = $_SESSION['skipped_i'];

		$i_value = $skipped_i[$k];

		$_SESSION['answer'.$i_value] = 'c';
		
		//echo '<script>alert("value '.$_SESSION['answer0'].' id '. $id.'")</script>';

		// increment 'k'
		$k++;

		// save that into session
		$_SESSION['k'] = $k;		
		
		// refresh page
		echo "exam1.php";


	} else if($username == 'd') {

		
		// first copy the skipped array
		$skipped = $_SESSION['skipped'];

		// take current 'k' from session
		$k = $_SESSION['k'];

		// take id from skipped array based on 'k'
		$id = $skipped[$k];

		// save answer into session using id
		//$_SESSION['answer'.$id] = 'd';

		$skipped_i = $_SESSION['skipped_i'];

		$i_value = $skipped_i[$k];

		$_SESSION['answer'.$i_value] = 'd';
		
		// increment 'k'
		$k++;

		// save that into session
		$_SESSION['k'] = $k;		
		
		// refresh page
		echo "exam1.php";


	} else if($username == 'next') {

		
		// first copy the skipped array
		$skipped = $_SESSION['skipped'];

		// take current 'k' from session
		$k = $_SESSION['k'];

		// take id from skipped array based on 'k'
		$id = $skipped[$k];

		// save answer into session using id
		//$_SESSION['answer'.$id] = 'next';
		
		$skipped_i = $_SESSION['skipped_i'];

		$i_value = $skipped_i[$k];

		$_SESSION['answer'.$i_value] = 'next';

		// increment 'k'
		$k++;

		// save that into session
		$_SESSION['k'] = $k;		
		
		// refresh page
		echo "exam1.php";

	} else if($username == 'repeat') {

		// refresh page
		echo "exam1.php";

	} else if($username == 'time') {
		
		// refresh page
		echo "time.php";
		
	} else {
		echo "fail";
	}
	

}
	
?>