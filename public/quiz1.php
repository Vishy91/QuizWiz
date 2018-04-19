<?php 
//$link = <a href=\"quiz.php?quizid=" urlencode($movie["Bib_IU_Barcode"]) "\">";
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");

global $connection;
$quizid = 1;
if($quizid) {
	$quiz_question = fetch_question_for_quiz($quizid);
	for($i=1 ; $i <= mysqli_num_rows($quiz_question) ; $i++){
		//$q = " select * from questions where qid = $i";
		//$query = mysqli_query($con, $q);

		while ($rows = mysqli_fetch_array($quiz_question) ) {
			echo $rows['question_text']; ?>
			<br>
			<?php
			$quiz_options = fetch_questionoptions_for_question($rows['question_id']);
			//$query = mysqli_query($con, $q);

			while ($rows = mysqli_fetch_array($quiz_options) ) { 
				echo $rows['questionoption_text'];?>
				<br>
				<?php
			}
		}
	}
}
?>