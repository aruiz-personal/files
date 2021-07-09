<?php

$logfile = 'log.txt';

$date = date('Y/m/d H:i:s');

$ipaddr = $_SERVER['REMOTE_ADDR'];

$uagent = htmlentities($_SERVER['HTTP_USER_AGENT']);

$logstring = "$date - $ipaddr - $uagent\n";

file_put_contents($logfile, $logstring, FILE_APPEND);

header('Content-Type: image/jpeg');

readfile('image.jpg');

?>
