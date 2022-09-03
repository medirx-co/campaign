<?php


// session_id("198df961b52f883e8bb4f98520c6a70b");
ob_start();
session_start();
// error_reporting(0);

function sessionUser(int|string $user = null) {
	if (!empty($user)) $_SESSION['user'] = $user;
	return $_SESSION['user'] ?? null;
}

if($_REQUEST['pageName'] != 'login') sessionUser() ?? redirect('/login');

// echo "sesion";
// print_r($_COOKIE);
// print_r($_SESSION);
// echo session_id();
define('BASE_API_URL', 'https://staging.tecmetis.com/api');

function redirect(string $url) {
	return header("Location: ".$url);
}


function curlRequest($url, bool $isPOST = false, $postFields = null) {
	$headers = array(
		// 'Cookie: PHPSESSID='.session_id(),
	);

	if($_REQUEST['pageName'] != 'login') $headers[] = ("X-Auth-User: ".sessionUser() ?? redirect("/login"));
	
    $ch = curl_init();
	$curlConfig = [
		CURLOPT_URL            		=> BASE_API_URL.$url,
		CURLOPT_RETURNTRANSFER 		=> true,
		CURLOPT_ENCODING 			=> '',
		CURLOPT_MAXREDIRS 			=> 10,
		CURLOPT_TIMEOUT 			=> 0,
		CURLOPT_HEADER				=> 1,
		CURLOPT_HTTPHEADER			=> $headers,
		CURLOPT_FOLLOWLOCATION 		=> true,
		CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST 		=> 'GET',
	];
	
	if ($isPOST) {
		$curlConfig[CURLOPT_CUSTOMREQUEST] = 'POST';
		$curlConfig[CURLOPT_POSTFIELDS] = $postFields;
	}
    curl_setopt_array($ch, $curlConfig);
	// print_r($curlConfig);
    $result = curl_exec($ch);
	// echo "curl response";
	// print_r($result);
	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($result, 0, $header_size);
	$body = substr($result, $header_size);
    $body = json_decode($body);
	$body->header = $header;
    curl_close($ch);
    return $body;
}

?>