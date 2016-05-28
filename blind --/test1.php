<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Countdown that doesn't sucks</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/countdown.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $(function(){
        $('#counter').countdown({
          image: 'img/digits.png',
          startTime: '01:12:12:00'
        });

        $('#counter_2').countdown({
          image: 'img/digits.png',
          startTime: '00:10',
          timerEnd: function(){ alert('end!'); },
          format: 'mm:ss'
        });
      });
    </script>
    <style type="text/css">
      br { clear: both; }
      .cntSeparator {
        font-size: 54px;
        margin: 10px 7px;
        color: #000;
      }
      .desc { margin: 7px 3px; }
      .desc div {
        float: left;
        font-family: Arial;
        width: 70px;
        margin-right: 65px;
        font-size: 13px;
        font-weight: bold;
        color: #000;
      }
    </style>
  </head>
<body>
  <div id="counter"></div>
  <div class="desc">
    <div>Días</div>
    <div>Horas</div>
    <div>Minutos</div>
    <div>Segundos</div>
  </div>
  <br />
  <br />
  <br />
  <div id="counter_2"></div>
  <div class="desc">
    <div>Minutos</div>
    <div>Segundos</div>
  </div>
</body>
</html>