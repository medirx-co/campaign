<?php 
// session_id("198df961b52f883e8bb4f98520c6a70b");
ob_start();
session_start();
// error_reporting(0);

function sessionUser(int|string $user = null) {
	if (!empty($user)) $_SESSION['user'] = $user;
	return $_SESSION['user'] ?? null;
}

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
		'Cookie: PHPSESSID='.session_id(),
	);

	if($_REQUEST['pageName'] != 'login') $headers["X-Auth-User"] = (sessionUser() ?? redirect("/login"));
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
	print_r($result);
	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($result, 0, $header_size);
	$body = substr($result, $header_size);
    $body = json_decode($body);
	$body->header = $header;
    curl_close($ch);
    return $body;
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MotaAdmin - Bootstrap Admin Dashboard" />
		<meta property="og:title" content="MotaAdmin - Bootstrap Admin Dashboard" />
		<meta property="og:description" content="MotaAdmin - Bootstrap Admin Dashboard" />
		<meta property="og:image" content="social-image.png" />
		<meta name="format-detection" content="telephone=no">

		<title> Admin Dashboard</title>


		<link rel="shortcut icon" type="image/png" href="/images/favicon.png" />
		<link href="/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/vendor/chartist/css/chartist.min.css">
		<link href="/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">
		<link href="/css/custom2.css" rel="stylesheet">

		<!-- <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet"> -->
		<link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- BootStrap Icon-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

       
	</head>
	<body>