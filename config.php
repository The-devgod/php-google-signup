<?php

require_once 'vendor/autoload.php';

// init configuration
$clientID = '535282772676-kbsspflmqa12p88d4sgm7aln0ulh16kv.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost:8080/php-goggle-signup/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

//connect to database
$hostName = "localhost";
$userName = "root";
$passWord = "";
$dbName = "php-google-login";

$conn = mysqli_connect($hostName, $userName, $passWord, $dbName);