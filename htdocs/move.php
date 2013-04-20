<?php

if(empty($_GET['dir']))
	die();

switch($_GET['dir']) {
case 'up':
$motor1 = '1';
$motor2 = '1';
break;
case 'down':
$motor1 = '2';
$motor2 = '2';
break;
case 'left':
$motor1 = '1';
$motor2 = '2';
break;
case 'right':
$motor1 = '2';
$motor2 = '1';
break;
default:
die();
break;
}

$command = 'sudo python ../python/move.py '.$motor1.' '.$motor2;

echo $command;

exec($command);
