<?php

$keyId = 'rzp_test_EZhRkQ9lcB2KRh';
$keySecret = 'fCfFhnSpKyProbjFLU437VW4';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Database connection details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

//Db connection
$con = mysqli_connect($host, $username, $password, $dbname);