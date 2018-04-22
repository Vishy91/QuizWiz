<?php 
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");

$quiz_played = get_quiz_played_by_user(1);
while ($rows = mysqli_fetch_array($quiz_played) ) {
	//echo $rows['quiz_title'];
}


$quiz_won = get_quiz_won_by_user(1);
while ($rows = mysqli_fetch_array($quiz_won) ) {
	//echo $rows['quiz_won'];
}

$search_category = search_categories("business games");
while ($rows = mysqli_fetch_array($search_category) ) {
	//echo $rows['category_name'];
}

$recommended_categories = get_recommended_for_user(1);
while ($rows = mysqli_fetch_array($recommended_categories) ) {
	echo $rows['category_name'];
}

?>