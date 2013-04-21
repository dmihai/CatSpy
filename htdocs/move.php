<?php

if(empty($_GET['dir']))
	die();

switch($_GET['dir']) {
case 'up':
$motor = '1';
$dir = '0';
break;
case 'down':
$motor = '2';
$dir = '0';
break;
case 'up-left':
$motor = '1';
$dir = '1';
break;
case 'up-right':
$motor = '1';
$dir = '2';
break;
case 'down-left':
$motor = '2';
$dir = '1';
break;
case 'down-right':
$motor = '2';
$dir = '2';
break;
default:
die();
break;
}

$command = 'sudo python ../python/move.py '.$motor.' '.$dir;

echo $command;

exec($command);
