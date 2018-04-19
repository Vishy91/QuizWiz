<?php 
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");

global $connection;
$email = 'shweta.bhartia93@gmail.com';
$safe_email = mysqli_real_escape_string($connection, $email);

$query  = "SELECT * ";
$query .= "FROM USERS ";
$query .= "WHERE user_email = '{$safe_email}' ";
$query .= "LIMIT 1";
$user_set = mysqli_query($connection, $query);
confirm_query($user_set);
if($user = mysqli_fetch_assoc($user_set)) {
	print_r($user);
} else {
	return null;
}
?>