<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://staging.tecmetis.com/api/user/login/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_HEADER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'username=101&password=101',
  CURLOPT_HTTPHEADER => $header,
));

$response = curl_exec($curl);
// $response;
echo "<pre>";
// print_r(curl_getinfo($curl));
curl_close($curl);
echo $response;
print_r($_SESSION);
echo "</pre>";
