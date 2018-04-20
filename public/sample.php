<?php 
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php"); 
require_once("../includes/validation_functions.php");

global $connection;
$user_categories = fetch_categories_for_user($_SESSION["user_id"]);
while ($rows = mysqli_fetch_array($user_categories) ) {
	echo $rows['category_name']; ?> <br>
	<?php
}
?>