<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
confirm_logged_in();
?>

<!DOCTYPE html>
<html>
   <head>
      <title>QUIZWIZ</title>
      <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse"> Quiz Name </h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Result </h1></th>
      	</tr>
      	<tr>
			<td>
				Questions Attempted
			</td>
	         <?php
	         	$correct_ans = 0;
				if(isset($_POST['submit'])){
					if(!empty($_POST['quizcheck'])) {
            		// Counting number of checked checkboxes.
            			$checked_count = count($_POST['quizcheck']);
            ?>

        	<td>
        	<?php
            	echo "Out of 5, You have attempt ".$checked_count." option."; ?>
            </td>
            <?php
            	foreach ($_POST['quizcheck'] as $key => $value) {
            		$questionoption_id = fetch_correct_questionoptionid_for_question($key);
					$rows = mysqli_fetch_array($questionoption_id);
					if ($rows['questionoption_id'] == $value){
						$correct_ans++;
					}
            	}
            ?>
            	
    		
		<tr>
			<td>
				Your Total score
			</td>
			<td colspan="2">
		<?php 
		    echo " Your score is ". $correct_ans.".";
		    }
		    else{
		    echo "<b>Please Select Atleast One Option.</b>";
		    }
		    } 
		  ?>
		  </td>
		</tr>

            <?php
            $won = 0;
            $time = '00:00:00';
            if ($correct_ans >= 3) $won = 1;
            $user_id = $_SESSION['user_id'];
            $quiz_id = $_SESSION['quiz_id']; //how to get quiz_id
            $finalresult = " Insert into USERQUIZANSWER(userquizanswer_user_id, userquizanswer_quiz_id, userquizanswer_won, userquizanswer_answer_time) values ($user_id, quiz_id, $won, $time) ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "successssss";
            // }
            ?>
      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>