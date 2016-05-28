<?php
// session start
session_start();

// for database connectivity 
require 'config.php';

// take value of 'i'
$i = $_SESSION['i'];

// user given answer
$answer = '';

// answer string
$answer_string = '';

// true answer
$trueans = '';

// initialiased marks to 0
$marks = 0;


/*$skipped = $_SESSION['skipped'];

for($t = 0 ; $t < count($skipped) ; $t++) {
    echo '<script>alert("array: '.$skipped[$t].' i '.$t.'");</script>';
  }*/

for($j = 0 ; $j < $i ; $j++) {

  $answer = $_SESSION['answer'.$j];
  //echo '<script>alert("j'.$j.'")</script>';
  //echo '<script>alert("id'.$_SESSION['qid'.$j].'")</script>';
  //echo '<script>alert("answer'.$answer.'")</script>';
  //echo '<script>alert("answer'.$_SESSION['answer'.$j].'")</script>';
  //echo '<script>alert("answer'.$_SESSION['qid'.$j].'")</script>';
  $sql = "select * from quantitive where id=".$_SESSION['qid'.$j];
  $sql1 = mysql_query($sql);
  
  while ($result = mysql_fetch_array($sql1)) {
    
    if($answer == 'a') {

      $answer_string = $result["option1"];

    } else if($answer == 'b') {

      $answer_string = $result["option2"];

    } else if($answer == 'c') {

      $answer_string = $result["option3"];
      
    } else if($answer == 'd') {

      $answer_string = $result["option4"];
      
    }
    $trueans = $result["trueans"];
  }

  if($answer_string == $trueans) {

    // if answer is correct then increment marks
    $marks++;

  }

}

$que = $_SESSION['que'];

$total_marks = $que;

$temp = $marks * 100;
$per = $temp / $total_marks;

unset($_SESSION['numbers']);
unset($_SESSION['i']);
unset($_SESSION['id']);

unset($_SESSION['skipped']);
unset($_SESSION['k']);
unset($_SESSION['l']);

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Result-Section</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
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
          <center><h1></h1></center>
         <center> <p><h3>Your Exam Score</h3></p></center>
        </div>  
        <div class="row">
          <div class="span10 offset1">
          <div class="container">
  <div class="row">
    <div class="span12">
      <form class="form-horizontal span6">
        <fieldset>
          <legend>Exams Results</legend>
       
          <div class="control-group">
            <label class="control-label">Your marks:-</label>
            <div class="controls">
               <label class="control-label"><?php echo $marks;?></label>
            </div>
          </div>
       
          <div class="control-group">
             <label class="control-label">Out Of Marks:-</label>
            <div class="controls">
               <label class="control-label"><?php echo $total_marks;?></label>
            </div>
          </div>
       
         
          <div class="control-group">
            <label class="control-label">Percentage:-</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <label class="control-label"><?php echo $per.'%';?></label>
                </div>
                <div class="span8">
                  <!-- screenshot may be here -->
                </div>
              </div>
            </div>
          </div>
       
          <div class="form-actions">
            <!--<button type="Print" class="btn btn-primary">Print</button>
            <button type="button" class="btn">Cancel</button> -->
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

          <center><h1>Thank You</h1></center>
      
          
          

            </div>
          </div>
        </div>
      </div>
    </div>

          <?php

          $question = substr('Thank you for giving exam', 0, 100);
            
           //we are passing as a query string so encode it, space will become +
           $text = urlencode($question);
         
           //give a file name and path to store the file
           $file  = 'filename';
           $file = "audio/" . $file . ".mp3";
         
           //now get the content from the Google API using file_get_contents
           $mp3 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text");
         
           //save the mp3 file to the path
           file_put_contents($file, $mp3); 
           
           
           
           
           
           
           $option = substr('Your exam score is', 0, 100);
                    
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
            $option2 = substr('Your marks. '.$marks, 0, 100);
                    
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
            $option3 = substr('Out of marks. '.$que, 0, 100);
                    
           //we are passing as a query string so encode it, space will become +
           $text3 = urlencode($option3);
         
           //give a file name and path to store the file
           $file3  = 'filename3';
           $file3 = "audio/" . $file3 . ".mp3";
         
           //now get the content from the Google API using file_get_contents
           $mp33 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text3");
         
           //save the mp4 file to the path
           file_put_contents($file3, $mp33);
           
           
           $per = number_format($per, 2, '.', '');
           
           //option 4 hearing
            $option4 = substr('Percentage. '.$per .'%', 0, 100);
                    
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
            <source type="audio/mp3" src="<?php echo $file; ?>">
            Sorry, your browser does not support HTML5 audio.
            </audio>
            <ul id="playlist">
            <a href="<?php echo $file?>"></a>
            <a href="<?php echo $file1?>"></a>
            <a href="<?php echo $file2?>"></a>
            <a href="<?php echo $file3?>"></a>
            <a href="<?php echo $file4?>"></a>

            </ul>


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
  </body>
</html>