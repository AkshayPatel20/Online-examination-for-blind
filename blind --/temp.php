<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>jquery countDownTimer Demo reverse countdown clock</title>
        <meta name="description" content="reverse clock plugin for jQuery.">
            <meta name="keywords" content="jQuery, plugin, count down">
                <meta name="viewport" content="width=device-width,initial-scale=1">
                    <script type="text/javascript" src="js/jquery-2.0.3.js"></script>
                    <script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
                    <link rel="stylesheet" type="text/css" href="css/jquery.countdownTimer.css" />
                    </head>
                    <body>
                        <div id="main">
                            <header>
                                <h1><a href="http://plugins.jquery.com/countdownTimer/">jquery countdownTimer Plugin</a>&nbsp;Demo</h1>
                                <p><a href="http://plugins.jquery.com/countdownTimer/">Download</a></p>
                                <p>Reverse count down jquery plugin as per your need.</p>
                            </header>
                            <h2 style="color :#0625BC; font-weight: bold;">Initial Setup</h2>
                            <p>Add this in html page</p><pre style="width:590px;">
&lt;script type=&quot;text/javascript&quot; src=&quot;jquery-2.0.3.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;jquery.countdownTimer.js&quot;&gt;&lt;/script&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;jquery.countdownTimer.css&quot; /&gt;</pre>
                            <p>add div and span element</p>
                            <pre style="width:535px;">&lt;div id=&quot;countdowntimer&quot;&gt;&lt;span id=&quot;future_date&quot;&gt;&lt;span&gt;&lt;/div&gt;</pre>
                            <h3><u>Reverse countdown till a specific future date from today.</u><br/>(for eg:- 2015/01/01 00:00:00)</h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:60px;text-align:center;">Days</td>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="future_date"></span></td>
                                </tr>
                            </table>


                            <script>
                                $(function(){
                                    $('#future_date').countdowntimer({
                                        dateAndTime : "2015/01/01 00:00:00",
                                        size : "lg"
                                    });
                                });
                            </script>

                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#future_date&quot;).countdowntimer({
                dateAndTime : &quot;2015/01/01 00:00:00&quot;&sbquo;
		size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>dateAndTime takes value in format "YYYY/MM/DD HH:MM:SS" where HH is a 24 - hours format.</p>
                            <p>You may be wondering how to set the "size" option. Well, It's discussed at the end in <a href="#display">Display Settings</a>.</p>

                            <h3><u>Reverse countdown to zero from time set to hours, minutes & seconds.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="hms_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#hms_timer').countdowntimer({
                                        hours : 3,
                                        minutes :10,
                                        seconds : 10,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#hms_timer&quot;).countdowntimer({
                hours : 3&sbquo;
		minutes : 10&sbquo;
                seconds : 10&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Hours can take positive values starting from 0. Minutes, Seconds takes values from 0 to 59. </p>

                            <h3><u>Reverse countdown to zero from time set to hours and minutes.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="hm_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#hm_timer').countdowntimer({
                                        hours : 3,
                                        minutes :10,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#hm_timer&quot;).countdowntimer({
                hours : 3&sbquo;
		minutes : 10&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Hours can take positive values starting from 0. Minutes takes values from 0 to 59. </p>

                            <h3><u>Reverse countdown to zero from time set to minutes and seconds.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="ms_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#ms_timer').countdowntimer({
                                        minutes :20,
                                        seconds : 10,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#ms_timer&quot;).countdowntimer({
		minutes : 20&sbquo;
                seconds : 10&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Minutes takes positive values starting from 0. Seconds takes values from 0 to 59. </p>

                            <h3><u>Reverse countdown to zero from time set to hours and seconds.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="hs_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#hs_timer').countdowntimer({
                                        hours :2,
                                        seconds : 10,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#hs_timer&quot;).countdowntimer({
		hours : 2&sbquo;
                seconds : 10&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Hours takes positive values starting from 0. Seconds takes values from 0 to 59. </p>

                            <h3><u>Reverse countdown to zero from time set to only hours.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="h_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#h_timer').countdowntimer({
                                        hours :2,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#h_timer&quot;).countdowntimer({
		hours : 2&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Hours takes positive values starting from 0. </p>

                            <h3><u>Reverse countdown to zero from time set to only minutes.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="m_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#m_timer').countdowntimer({
                                        minutes :2,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#m_timer&quot;).countdowntimer({
		minutes : 2&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Minutes takes positive values starting from 0. </p>

                            <h3><u>Reverse countdown to zero from time set to only seconds.</u></h3>
                            <span id="s_timer"></span><br/>
                            <script>
                                $(function(){
                                    $('#s_timer').countdowntimer({
                                        seconds :25,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre >$(function(){
	$(&quot;#s_timer&quot;).countdowntimer({
		seconds : 25&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>Seconds takes positive values starting from 0. </p>

                            <h3><u>Display current time.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="current_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#current_timer').countdowntimer({
                                        currentTime : true,
                                        size : "lg"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre>$(function(){
	$(&quot;#current_timer&quot;).countdowntimer({
		currentTime : true&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <p>currentTime takes either true or false. </p>

                            <h3><u>If no options provided.</u></h3>
                            <p>If no options are provided, by default timer of 60 seconds is displayed in small size.</p>
                            <span id="seconds_timer"></span>
                            <script>
                                $(function(){
                                    $('#seconds_timer').countdowntimer({
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre>$(function(){
	$(&quot;#seconds_timer&quot;).countdowntimer({
	})&#59;
})&#59;</pre>
                            <h2 style="color :#0625BC; font-weight: bold;"><a id="display">Display Settings</a></h2>
                            <h3><u>Sizes (use bootstrap sizes notation).</u></h3>
                            <pre>$(function(){
	$(&quot;#xlarge&quot;).countdowntimer({
                dateAndTime : &quot;2015/01/01 00:00:00&quot;&sbquo;
                size : &quot;lg&quot;
	})&#59;
})&#59;</pre>
                            <div id="sizes_demo">
                                <div><strong>xl</strong>-Extra large</div><br/>
                                <span id="xlarge"></span><br/><br/>
                                <div><strong>lg</strong>-Large</div><br/>
                                <span id="large"></span><br/><br/>
                                <div><strong>md</strong>-Medium</div><br/>
                                <span id="medium"></span><br/><br/>
                                <div><strong>sm</strong>-Small</div><br/>
                                <span id="small"></span><br/><br/>
                                <div><strong>xs</strong>-Extra small</div><br/>
                                <span id="xsmall"></span><br/><br/>
                            </div>

                            <script>
                                $(function(){
                                    $('#xlarge').countdowntimer({
                                        dateAndTime : "2015/01/01 00:00:00",
                                        size : "xl"
                                    });

                                    $('#large').countdowntimer({
                                        dateAndTime : "2015/01/01 00:00:00",
                                        size : "lg"
                                    });

                                    $('#medium').countdowntimer({
                                        dateAndTime : "2015/01/01 00:00:00",
                                        size : "md"
                                    });

                                    $('#small').countdowntimer({
                                        dateAndTime : "2015/01/01 00:00:00",
                                        size : "sm"
                                    });

                                    $('#xsmall').countdowntimer({
                                        dateAndTime : "2015/01/01 00:00:00",
                                        size : "xs"
                                    });
                                });
                            </script>
                            <p>What else, you can also set the border color, background and font color. See below.</p>

                            <h3><u>Setting border color, background and font color.</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:70px;text-align:center;">Hours</td>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="color_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#color_timer').countdowntimer({
                                        currentTime : true,
                                        size : "lg",
                                        borderColor : "#5D09FA",
                                        backgroundColor : "#FAF209",
                                        fontColor : "#FA0909"
                                    });
                                });
                            </script>
                            <h4>Settings:-</h4>
                            <pre>$(function(){
	$(&quot;#current_timer&quot;).countdowntimer({
		currentTime : true&sbquo;
                size : &quot;lg&quot;&sbquo;
                borderColor : &quot;#5D09FA&quot;&sbquo;
                backgroundColor : &quot;#FAF209&quot;&sbquo;
                fontColor : &quot;#FA0909&quot;
	})&#59;
})&#59;</pre>
                            <p>By default borderColor is "#F0068E", fontColor is "#FFFFFF", backgroundColor is "#000000".</p>
                            <br/><br/>
                            <h3><u>Note:-</u></h3>
                            <p>Please take care not to use timer options(hours, minutes, seconds), dateAndTime and currentTime simultaneously as all these options display different time. Also, calling countdowntimer method with the same timer options(hours, minutes, seconds), dateAndTime or currentTime set differently on a single page will not work (for example:- If you call countdowntimer method twice on a single page and set dateAndTime option in it both times with different values, timer for only the first set value will be displayed in both timers).</p>
                            <br/><br/>
                            <footer>
                                <p>Licensed under the <a href="http://opensource.org/licenses/MIT">MIT</a> and <a href="http://www.gnu.org/licenses/gpl.html">GPL v3</a> Project page <a href="https://github.com/harshen/jquery-countdownTimer">Link</a>
                                    Author: <a href="https://github.com/harshen">Harshen Pandey</a> (harshenpandey@gmail.com)</p>
                            </footer>
                            <style>
                                body{margin:0px; padding:0px;}
                                #main{margin:0px auto; padding:0px; width:900px;position:relative;}
                                pre{
                                    background:#F8F8D2;padding:10px;
                                    border: 2px solid #673E3E;
                                    border-radius: 3px;
                                    color: #222222;
                                }
                            </style>
                        </div>
                    </body>
                    </html>
