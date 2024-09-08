<?php

require_once 'vendor/autoload.php';

// init configuration
$clientID = '';
$clientSecret = '';
$redirectUri = '';

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