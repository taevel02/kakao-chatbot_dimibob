<html>
<head>
<meta charset="utf-8">
</head>
</html>
<?php
// set HTTP header
$headers = array(
    'Content-Type: application/json',
);
// query string

$url = 'https://api.dimigo.in/dimibobs/20180326';
// Open connection
$ch = curl_init();
// Set the url, number of GET vars, GET data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Execute request
$result = curl_exec($ch);
// Close connection
curl_close($ch);
// get the result and parse to JSON
$result_arr = json_decode($result,true);
echo($result_arr['breakfast']);
/*
 *  output:
 *  Array
 *  (
 *      [statusCode] => "OK",
 *      [statusMessage] => "",
 *      [ipAddress] => "123.13.123.12",
 *      [countryCode] => "MY",
 *      [countryName] => "MALAYSIA",
 *  )
 */
?>