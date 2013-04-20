<?php

$camServer = 'http://192.168.0.199:8080';
exec('sudo /home/pi/mjpg-streamer/mjpg-streamer.sh restart', $output);

require('layout.php');

?>
