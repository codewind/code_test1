<?php

if(!isset($argv[1]))
	die('no number parameter');

$numbers = range(100000,199999);
shuffle($numbers);

$no = $argv[1];
$result = array_slice($numbers,0,$no);
for($i=0;$i<$no;$i++){
	echo $result[$i];
}