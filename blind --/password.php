<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Bootbusiness | Short description about company">
		<meta name="author" content="Your name">
		<title>Signin</title>
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

				var username = function(tag) {
					$('#username p').text('' + tag).fadeIn('fast');
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
					'*search' : username,
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
	<body>
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
						<!--<div class="nav-collapse collapse">
							<ul class="nav pull-right">

								<li>
									<a href="Exam.php" class="active-link">Exam</a>
								</li>
								<li>
									<a href="contact_us.php">Contact us</a>
								</li>
								<li>
									<a href="username.php">Sign in</a>
								</li>
							</ul>-->
						</div>
					</div>
				</div>
			</div>
			<!-- End: Navigation wrapper -->
		</header>
		<!-- End: HEADER -->
		<!-- Start: MAIN CONTENT -->
		<div class="content" style="padding-bottom: 180px;">
			<div class="container">
				<div class="row">
					<div class="span6 offset3">

						<?php 

						echo '<h4>Username is correct</h4><br>';
						echo '<h4>Please enter your password</h4><br>';
						
						$question = substr('Username is correct', 0, 100);
	 						
					    //we are passing as a query string so encode it, space will become +
					   	$text = urlencode($question);
					 
					   	//give a file name and path to store the file
					   	$file  = 'filename';
					   	$file = "audio/" . $file . ".mp3";
					 
					   	//now get the content from the Google API using file_get_contents
					   	$mp3 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text");
					 
					   	//save the mp3 file to the path
					   	file_put_contents($file, $mp3);




					   $option = substr('Please Enter Your Password', 0, 100);
					 						
					   //we are passing as a query string so encode it, space will become +
					   $text1 = urlencode($option);
					 
					   //give a file name and path to store the file
					   $file1  = 'filename1';
					   $file1 = "audio/" . $file1 . ".mp3";
					 
					   //now get the content from the Google API using file_get_contents
					   $mp31 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text1");
					 
					   //save the mp3 file to the path
					   file_put_contents($file1, $mp31);
				   


					   	?>

					   	<audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mp3">
						<source type="audio/mp3" src="<?php echo $file; ?>">
						Sorry, your browser does not support HTML5 audio.
						</audio>
						<ul id="playlist">
							<a href="<?php echo $file?>"></a>
							<a href="<?php echo $file1?>"></a>
						</ul>

						<h4 class="widget-header"><i class="icon-lock"></i> Signin to Students</h4>
						<div class="widget-body"  style="padding: 80px">
							<div class="center-align">
								<form class="form-horizontal form-signin-signup">
									<label for="option1"><h4>@Password@</h4></label>
									</br>
									</br>
									<section id="load">
										<h3><div id="username">
											<p class="vikram"></p>
										</div></h3>
									</section>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End: MAIN CONTENT -->
		<!-- Start: FOOTER -->
		<footer class="navbar-fixed-bottom"

			
				<p>
					&copy; 2012-3000.All Rights Reserved.
				</p>
			
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

				if (test == 4) {
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

		<script>
			$(document).ready(function() {
				setInterval(function() {
					var uname = $("#username").children(".vikram").text();
					//alert(uname);
					if(uname != '') {
						var dataString = 'username=' + uname + '&page=signup';
						$.ajax({
							type : "POST",
							url : "password_validate.php",
							data : dataString,
							cache : false,
							success : function(response) {
								var response_brought = response.indexOf('successful.php');
								if (response_brought != -1) {
									window.location.replace(response);
								}
							}
						});
					}
				}, 3000);
			});
		</script>
	</body>
</html>