<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");

if (isset($_POST['create'])) {

    //Query for quiz creation

    $quicheck = $_POST['quizcheck'];
    $question_quiz_id = $_POST['quiz_id'];

    echo $quiz_id;
    foreach ($quicheck as $value){
        $query = " INSERT INTO QUESTIONS (";
        $query .= " question_text, question_quiz_id";
        $query .= " )VALUES (";
        $query .= " '{$value}', '{$question_quiz_id}' ";
        $query .= ")";
        $result = mysqli_query($connection, $query);
    }


    if ($result) {

        // Success
        $_SESSION["message"] = "Quiz created!!";

        $_SESSION['$quiz_id'] = $quiz_id;
//        print_r($_SESSION["message"]);
        redirect_to("createquestions.php");
    } else {
        // Failure
        $_SESSION["message"] = "Quiz creation failed!!";
        print_r($_SESSION["message"]);
        redirect_to("adminhome.php");
    }

}
else {
    // This is probably a GET request
    redirect_to("adminhome.php");
}

//if (isset($connection))
//{ mysqli_close($connection); }

?>