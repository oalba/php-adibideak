<?php
// http://www.lornajane.net/posts/2010/three-ways-to-make-a-post-request-from-php
$url = 'http://api.openweathermap.org/data/2.5/weather?lat=43.3276658&lon=-1.9711435';

$ch = curl_init($url);
 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
curl_close($ch);
?>