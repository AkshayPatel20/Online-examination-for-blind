<?php
// session start
session_start();

// take current 'id' from session
$id = $_SESSION['id'];

// take current 'i' from session
$i = $_SESSION['i'];


// require database connectivity file 
require 'config.php';

// Validate the request brought
if (isset($_POST["page"]) && !empty($_POST["page"])) {

	$username = trim(strip_tags(mysql_real_escape_string($_POST["username"])));

	/*$answer = '';
	$trueans = '';

	 
	
	$sql = "select * from quantitive where id=".$_SESSION['id'];
	$sql1 = mysql_query($sql);
	
	while ($result = mysql_fetch_array($sql1)) {

		if($username == 'a' || $username == 'hey') {
			$answer = $result["option1"];
			$trueans = $result["trueans"];
			if($answer == $trueans) {
				// answer is right increse marks
				$marks++;

				//save marks into session
				$_SESSION['marks'] = $marks;
				
				// increment id 
				$i++;

				// save that into session
				$_SESSION['i'] = $i;

				// refresh page
				echo "exam.php";
			}
		} else if($username == 'b' || $username == 'bee') {
			$answer = $result["option2"];
			$trueans = $result["trueans"];
			if($answer == $trueans) {
				// answer is right increse marks
				$marks++;

				//save marks into session
				$_SESSION['marks'] = $marks;
				
				// increment id 
				$i++;

				// save that into session
				$_SESSION['i'] = $i;

				// refresh page
				echo "exam.php";
			}
		} else if($username == 'c' || $username == 'see' || $username == 'sea' || $username = 'she') {
			$answer = $result["option3"];
			$trueans = $result["trueans"];
			if($answer == $trueans) {
				// answer is right increse marks
				$marks++;

				//save marks into session
				$_SESSION['marks'] = $marks;
				
				// increment id 
				$i++;

				// save that into session
				$_SESSION['i'] = $i;

				// refresh page
				echo "exam.php";
			}
		} else if($username == 'd') {
			$answer = $result["option4"];
			$trueans = $result["trueans"];
			if($answer == $trueans) {
				// answer is right increse marks
				$marks++;

				//save marks into session
				$_SESSION['marks'] = $marks;
				
				// increment id 
				$i++;

				// save that into session
				$_SESSION['i'] = $i;

				// refresh page
				echo "exam.php";
			}
		} else {
			// do not refresh page
			echo "fail";
		}

	}*/

	//$_SESSION['answer'] = $username;

	if($username == 'a' || $username == 'hey' ) {
		
		// user given answer
		$_SESSION['answer'. $i] = 'a';

		// question is
		$_SESSION['qid'.$i] = $id;

		// 'i' value in session 
		$_SESSION['qidi'.$i] = $i;

		// increment 'i' 
		$i++;
		
		// save that into session
		$_SESSION['i'] = $i;		
		
		// refresh page
		echo "exam.php";

	} else if($username == 'b' || $username == 'bee') {

		// user given answer
		$_SESSION['answer'. $i] = 'b';

		// question id
		$_SESSION['qid'.$i] = $id;

		// 'i' value in session 
		$_SESSION['qidi'.$i] = $i;

		// increment 'i' 
		$i++;
		
		// save that into session
		$_SESSION['i'] = $i;		
		
		// refresh page
		echo "exam.php";


	} else if($username == 'c' || $username == 'see' || $username == 'she' || $username == 'sea') {

		// user given answer
		$_SESSION['answer'. $i] = 'c';

		// question id
		$_SESSION['qid'.$i] = $id;

		// 'i' value in session 
		$_SESSION['qidi'.$i] = $i;

		// increment 'i' 
		$i++;
		
		// save that into session
		$_SESSION['i'] = $i;		
		
		// refresh page
		echo "exam.php";


	} else if($username == 'd') {

		// user given answer
		$_SESSION['answer'. $i] = 'd';

		// question id
		$_SESSION['qid'.$i] = $id;

		// 'i' value in session 
		$_SESSION['qidi'.$i] = $i;

		// increment 'i' 
		$i++;
		
		// save that into session
		$_SESSION['i'] = $i;		
		
		// refresh page
		echo "exam.php";


	} else if($username == 'next') {

		// user given answer
		$_SESSION['answer'. $i] = 'next';

		// question id
		$_SESSION['qid'.$i] = $id;

		// 'i' value in session 
		$_SESSION['qidi'.$i] = $i;

		// increment 'i' 
		$i++;
		
		// save that into session
		$_SESSION['i'] = $i;

		// refresh page
		echo "exam.php";

	} else if($username == 'skip' || $username == 'skipped' || $username == 'skype' || $username = 'qeep' || $username = 'scape' || $username = 'sleep') {

		// user given answer
		$_SESSION['answer'. $i] = 'skip';

		//echo '<script>alert("id'.$_SESSION['answer'.$i].'")</script>';

		// question id
		$_SESSION['qid'.$i] = $id;

		// 'i' value in session 
		$_SESSION['qidi'.$i] = $i;

		// increment 'i' 
		$i++;
		
		// save that into session
		$_SESSION['i'] = $i;

		// refresh page
		echo "exam.php";

	} else if($username == 'repeat') {

		// refresh page
		echo "exam.php";

	} else if($username == 'time') {
		
		// refresh page
		echo "time.php";
	} 

	else {
		echo "fail";
	}
	

}
	
?>