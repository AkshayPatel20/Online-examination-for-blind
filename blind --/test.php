<?php
$numbers = range(1,9);
shuffle($numbers);


foreach($numbers as $i) {
    echo $i;
}

for($i = 0 ; $i < count($numbers) ; $i++) {
    echo $numbers[$i];
}
$total = 9;
$num = range(1,$total); 
shuffle($num);
print_r($num);

foreach ($num as $i) {
	echo $i;
}

/*// session start
session_start();

// take 10 random but not repeated numbers for questions
$numbers = range(1,10);
shuffle($numbers);


// put numbers array into session
if(!isset($_SESSION['numbers'])) {
	$_SESSION['numbers'] = $numbers;
}

// question counter for numbers array 'i' into initialised and into session
if(!isset($_SESSION['i'])) {
	$_SESSION['i'] = 0;
}

// question id into session of 'numbers' array and 'i'
$num = $_SESSION['numbers'];
$c = $_SESSION['i'];
$_SESSION['id'] = $num[$c];


// marks initialised to 0 and into session
if(!isset($_SESSION['marks'])) {
	$_SESSION['marks'] = 0;
}*/


?>