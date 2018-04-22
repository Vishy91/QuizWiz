<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); 
	// v1: simple logout
	$_SESSION["admin_id"] = null;
	$_SESSION["username"] = null;
	redirect_to("adminlogin.php"); //redirect to admin login page
?>