<?php
// session start
session_start();

// take questions from session
$que = $_SESSION['que'];

// make array of questions which answer is skip

// array of questions which skipped 
$skipped = array();
$l = 0;

// 'i' array
$skipped_i = array();

for($counter = 0 ; $counter < $que ; $counter++ ){

	if($_SESSION['answer'.$counter] == 'skip') {
		$skipped[$l] = $_SESSION['qid'.$counter];
		$skipped_i[$l] = $_SESSION['qidi'.$counter];
		//echo '<script>alert("skipped:'.$skipped[$l].'");</script>';
		//echo '<script>alert("qid:'.$_SESSION['qid'.$counter].'");</script>';
		//echo '<script>alert("answer:'.$_SESSION['answer'.$counter].'");</script>';
		$l++;
	}

}

// check for no questions skipped
if($l == 0) {
	header("location: result.php");
}

// 'l' in session
if(!isset($_SESSION['l'])) {
	$_SESSION['l'] = $l;
}

// skipped array
if(!isset($_SESSION['skipped'])) {
	$_SESSION['skipped'] = $skipped;
} 

// skipped array
if(!isset($_SESSION['skipped_i'])) {
	$_SESSION['skipped_i'] = $skipped_i;
} 


//echo '<script>alert("l:'.$_SESSION['l'].'");</script>';
//echo '<script>alert("k:'.$_SESSION['k'].'");</script>';

// question counter for numbers array 'k' into initialised and into session
if(!isset($_SESSION['k'])) {
	$_SESSION['k'] = 0;
} else if($_SESSION['k'] == $_SESSION['l']) {
	header("location: result.php");
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Bootbusiness | Short description about company">
		<meta name="author" content="Your name">
		<title>Exam</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap responsive -->
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<!-- Font awesome - iconic font with IE7 support -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/font-awesome-ie7.css" rel="stylesheet">
		<!-- Bootbusiness theme -->
		<link href="css/boot-business.css" rel="stylesheet">
		<script src="js/annyang.min.js"></script>
		<script src="js/voiceToText.js"></script>
		<script>
			"use strict";

			// first we make sure annyang started succesfully
			if (annyang) {

				// define the functions our commands will run.

				var answer = function(tag) {
					$('#answer p').text('' + tag).fadeIn('fast');
					$.ajax({
						type : 'GET',
						async : false,
						contentType : "application/json",
						dataType : 'jsonp'
					});
					scrollTo("#load");
				};
				
				

				// define our commands.
				// * The key is what you want your users to say say.
				// * The value is the action to do.
				//   You can pass a function, a function name (as a string), or write your function as part of the commands object.
				var commands = {
					'*search' : answer,
				};

				// OPTIONAL: activate debug mode for detailed logging in the console
				annyang.debug();

				// Add voice commands to respond to
				annyang.addCommands(commands);

				// OPTIONAL: Set a language for speech recognition (defaults to English)
				annyang.setLanguage('en');

				// Start listening. You can call this here, or attach this call to an event, button, etc.
				annyang.start();
				
			} else {
				$(document).ready(function() {
					$('#unsupported').fadeIn('fast');
				});
			}


		</script>
	</head>
	<body onload="Func1Delay()">
		<!-- Start: HEADER -->
		<header>
			<!-- Start: Navigation wrapper -->
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a href="index.php" class="brand brand-bootbus">Online Examination For Blinds</a>
						<!-- Below button used for responsive navigation -->
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Start: Primary navigation -->
						<div class="nav-collapse collapse">
						</div>
					</div>
				</div>
			</div>
			<!-- End: Navigation wrapper -->
		</header>
		<!-- End: HEADER -->
		<!-- Start: MAIN CONTENT -->
		<div class="content">
			<div class="container">
				<div class="page-header">
					<h1>Exam Questions</h1>
					<span id="timer"><?php echo $_SESSION['time']; ?></span>
					<input type="hidden" id="warning_time" value="<?php echo $_SESSION['warning_time']; ?>" >
				</div>
				<div class="row">
					<div class="span10 offset1">

					<?php
          		
					$con = mysql_connect("localhost", "root", "");
					if (!$con) {
						die('could not connect ' . mysql_error());
					}

					$db_select = mysql_select_db("blind", $con);

					$fetch_skipped = $_SESSION['skipped'];
					$fetch_k = $_SESSION['k'];
					$fetch_id = $fetch_skipped[$fetch_k];

					$sql = "select * from quantitive where id=".$fetch_id;
					$sql1 = mysql_query($sql);
					
					while ($result = mysql_fetch_array($sql1)) {

					echo '<p><font size="5" face="maiandra gd">TEST 1</font></p><br>';
           
    			
					//echo '<p><font size="5" face="maiandra gd">QUESTIONS</font></p>';

					echo '<p><font size="5" face="maiandra gd">Skipped Questions</font></p>';
                     
                    echo '<p><font size="4" face="maiandra gd"><table width="740" border="0"><tr>';
					echo '<td width="760" height="24" bgcolor="#EEEEEE" class="style1"><div align="left" class="style25"><font size="4" face="maiandra gd">'.$result["question"].'</font></div></td>';
					echo '</tr></table>';
					echo '<center><div class="element four two">';
                    //echo '<img src='.$result["image"].' alt="" class="img-responsive"/>';
                                                     
                    echo '</div></center>';
					echo '<div align="left" class="style25">';
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="option1" name="group01" value="A">&nbsp; a) '.$result["option1"].'<br>';
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="option2" name="group01" value="B" >&nbsp; b) '.$result["option2"].'<br>';
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="option3" name="group01" value="C" >&nbsp; c) '.$result["option3"].'<br>';
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="option4" name="group01" value="D">&nbsp; d) '.$result["option4"].'<br>';
					echo '<br>';
					
					
					
					$question_new = substr('Skipped Questions', 0, 100);
 						
				   //we are passing as a query string so encode it, space will become +
				   $text_new = urlencode($question_new);
				 
				   //give a file name and path to store the file
				   $file_new  = 'filename_new';
				   $file_new = "audio/" . $file_new . ".mp3";
				 
				   //now get the content from the Google API using file_get_contents
				   $mp3_new = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text_new");
				 
				   //save the mp3 file to the path
				   file_put_contents($file_new, $mp3_new); 

					
					//	$option=$result["option1"].''.$result["option2"].''.$result["option3"].''.$result["option4"];
					$question = substr($result['question'], 0, 100);
 						
				   //we are passing as a query string so encode it, space will become +
				   $text = urlencode($question);
				 
				   //give a file name and path to store the file
				   $file  = 'filename';
				   $file = "audio/" . $file . ".mp3";
				 
				   //now get the content from the Google API using file_get_contents
				   $mp3 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text");
				 
				   //save the mp3 file to the path
				   file_put_contents($file, $mp3); 
				   
				   
				   
				   
				   
				   
				   $option = substr('a. '.$result['option1'], 0, 100);
				 						
				   //we are passing as a query string so encode it, space will become +
				   $text1 = urlencode($option);
				 
				   //give a file name and path to store the file
				   $file1  = 'filename1';
				   $file1 = "audio/" . $file1 . ".mp3";
				 
				   //now get the content from the Google API using file_get_contents
				   $mp31 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text1");
				 
				   //save the mp3 file to the path
				   file_put_contents($file1, $mp31);
				   
				   
				   
				   
				   
				   //option 2 hearing
				    $option2 = substr('b. '.$result['option2'], 0, 100);
				 						
				   //we are passing as a query string so encode it, space will become +
				   $text2 = urlencode($option2);
				 
				   //give a file name and path to store the file
				   $file2  = 'filename2';
				   $file2 = "audio/" . $file2 . ".mp3";
				 
				   //now get the content from the Google API using file_get_contents
				   $mp32 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text2");
				 
				   //save the mp3 file to the path
				   file_put_contents($file2, $mp32);
				   
				   
				   
				    //option 3 hearing
				    $option3 = substr('c. '.$result['option3'], 0, 100);
				 						
				   //we are passing as a query string so encode it, space will become +
				   $text3 = urlencode($option3);
				 
				   //give a file name and path to store the file
				   $file3  = 'filename3';
				   $file3 = "audio/" . $file3 . ".mp3";
				 
				   //now get the content from the Google API using file_get_contents
				   $mp33 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text3");
				 
				   //save the mp4 file to the path
				   file_put_contents($file3, $mp33);
				   
				   
				   
				   
				   //option 4 hearing
				    $option4 = substr('d. '.$result['option4'], 0, 100);
				 						
				   //we are passing as a query string so encode it, space will become +
				   $text4 = urlencode($option4);
				 
				   //give a file name and path to store the file
				   $file4  = 'filename4';
				   $file4 = "audio/" . $file4 . ".mp3";
				 
				   //now get the content from the Google API using file_get_contents
				   $mp34 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text4");
				 
				   //save the mp4 file to the path
				   file_put_contents($file4, $mp34);
   
   


						?>
						<audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mp3">
						<source type="audio/mp3" src="<?php echo $file_new; ?>">
						Sorry, your browser does not support HTML5 audio.
						</audio>
						<ul id="playlist">
							<a href="<?php echo $file_new?>"></a>
						<a href="<?php echo $file?>"></a>
						<a href="<?php echo $file1?>"></a>
						<a href="<?php echo $file2?>"></a>
						<a href="<?php echo $file3?>"></a>
						<a href="<?php echo $file4?>"></a>

						</ul>

						<!-- <audio controls="controls" autoplay="autoplay">
						<source src="<?php echo $file1; ?>" type="audio/mp3" />
						</audio>
						<!--<audio loop="loop" autoplay="autoplay" controls="controls">
						<source src="<?php echo $file; ?>" />
						<source src="<?php echo $file1; ?>" />
						</audio> -->

						
						<?php 		

							}
						
						?>
						
						<section id="load">
							<h3><div id="answer">
								<p class="vikram"></p>
							</div></h3>
						</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End: MAIN CONTENT -->
		<!-- Start: FOOTER -->
		<footer>

			<div class="container">
				<p>
					&copy; 2012-3000. All Rights Reserved.
				</p>
			</div>
		</footer>
		<!-- End: FOOTER -->

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/boot-business.js"></script>
		<script type="text/javascript">
			var audio;
			var playlist;
			var tracks;
			var current;

			init();
			function init() {
				current = 0;
				test = 0;
				audio = $('#audio');
				playlist = $('#playlist');
				tracks = playlist.find('li a');
				len = tracks.length;
				audio[0].volume = 1.00;
				audio[0].play();
				playlist.find('a').click(function(e) {
					e.preventDefault();
					link = $(this);
					current = link.parent().index();
					run(link, audio[0]);

				});
				audio[0].addEventListener('ended', function(e) {
					current++;
					if (current == len) {
						current = 0;
						link = playlist.find('a')[0];
					} else {
						link = playlist.find('a')[current];
					}
					run($(link), audio[0]);

				});

			}

			function run(link, player) {

				if (test == 5) {
					audio[0].stop();
				} else {
					player.src = link.attr('href');
					par = link.parent();
					par.addClass('active').siblings().removeClass('active');
					audio[0].load();
					audio[0].play();
					test++;
				}
			}
		</script>
		<!--<script>
			$(document).ready(function() {
				setInterval(function() {
					var test = $("#answer").children(".vikram").text();
					//alert(test);
					if (test == 'a' || test == 'hey' || test == 'b' || test == 'bee' || test == 'c' || test == 'see' || test == 'd') {
						window.location.replace('exam.php');
					}
				}, 3000);
			});
		</script>-->
		<script>
			$(document).ready(function() {
				setInterval(function() {
					var uname = $("#answer").children(".vikram").text();
					//alert(uname);
					if(uname != '') {
						var dataString = 'username=' + uname + '&page=signup';
						$.ajax({
							type : "POST",
							url : "exam1_process.php",
							data : dataString,
							cache : false,
							success : function(response) {
								var response_brought_exam = response.indexOf('exam1.php');
								var response_brought_time = response.indexOf('time.php');
								if (response_brought_exam != -1) {
									window.location.replace(response);
								} else if(response_brought_time != -1) {
									window.location.replace(response);
								}
							}
						});
					}
				}, 3000);
			});
		</script>
		<!-- <script>
			var count= $("#timer").text();
			var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
			function timer()
			{
			  count=count-1;
			  if (count <= 0)
			  {
			     clearInterval(counter);
			     return;
			  }
			 document.getElementById("timer").innerHTML="<h4>Time Remaining: "+count + " secs</h4>"; // watch for spelling
			 var dataString = 'username=' + count + '&page=signup';
				$.ajax({
					type : "POST",
					url : "timer.php",
					data : dataString,
					cache : false,
					success : function(response) {
						var response_brought = response;
						if (response_brought == '1') {
							window.location.replace('time_over.php');
						} else if(response_brought == 5) {
							window.location.replace('time.php');
						}
					}	
				});
			}
		</script> -->
		<script>
			var count= $("#timer").text();
			var warning_time= $("#warning_time").val();
			var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
			function timer()
			{
			  count=count-1;
			  if (count <= 0)
			  {
			     clearInterval(counter);
			     return;
			  }
			 document.getElementById("timer").innerHTML="<h4>Time Remaining: "+count + " secs</h4>"; // watch for spelling
			 var dataString = 'username=' + count + '&page=signup';
				$.ajax({
					type : "POST",
					url : "timer.php",
					data : dataString,
					cache : false,
					success : function(response) {
						var response_brought = response;
						//alert(response_brought);
						if (response_brought == 1) {
							window.location.replace('time_over.php');
						} else if(response_brought == warning_time) {
							window.location.replace('time.php');
						}
					}
				});
			}
		</script>
	</body>
</html>