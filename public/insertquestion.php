<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");

print_r($_POST['create']);
if (isset($_POST['create'])) {

//    print_r("hellooo");
//    print_r($_POST['answer']);
    //Query for quiz creation

    $quicheck = $_POST['quizcheck'];
    $question_quiz_id = $_POST['quiz_id'];
    $answer =$_POST['answer'];

    echo $quiz_id;
//    foreach ($quicheck as $value){
//        $query = " INSERT INTO QUESTIONS (";
//        $query .= " question_text, question_quiz_id";
//        $query .= " )VALUES (";
//        $query .= " '{$value}', '{$question_quiz_id}' ";
//        $query .= ")";
//        $result = mysqli_query($connection, $query);
//    }
//    INSERT INTO
//    (questionoption_text, questionoption_question_id, questionoption_is_right)
//    $questions=fetch_allquestions($question_quiz_id);
//    foreach ($questions as $value1){
//        for ($i=0;$i<4;$i++){
//            $query = " INSERT INTO QUESTIONOPTIONS (";
//            $query .= " questionoption_text, questionoption_question_id, questionoption_is_right";
//            $query .= " )VALUES (";
//            $query .= " '{$value}', '{$question_quiz_id}' ";
//            $query .= ")";
//            $result = mysqli_query($connection, $query);
//        }
//
//    }
//    foreach ($answer as $key=> $value) {
//        $key=explode("-",$key);
//        echo $key[0];
//
//    }
//    $questions=fetch_allquestions($question_quiz_id);
//    echo $questions;
//    foreach ($questions as $value) {
//        echo $questions;
//    }
    if ($result) {

        // Success
        $_SESSION["message"] = "Quiz created!!";

        $_SESSION['$quiz_id'] = $quiz_id;
//        print_r($_SESSION["message"]);
//        redirect_to("createquestions.php");
    } else {
        // Failure
        $_SESSION["message"] = "Quiz creation failed!!";
        print_r($_SESSION["message"]);
//        redirect_to("adminhome.php");
    }

}
else {
    // This is probably a GET request
//    redirect_to("adminhome.php");
}

//if (isset($connection))
//{ mysqli_close($connection); }

?>