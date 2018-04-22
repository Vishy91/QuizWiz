<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); 
	// v1: simple logout
	$_SESSION["user_id"] = null;
	$_SESSION["user_firstname"] = null;
	redirect_to("index.php"); //redirect to user login page
?>