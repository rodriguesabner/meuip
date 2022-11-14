<?php
$realIP = file_get_contents("http://ipecho.net/plain");
$jsonIp = json_encode(['ip' => $realIP]);
echo $jsonIp;
?>
