<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");
if (isset($_POST['edit'])) {

    $quiz_id = $_POST['quiz_id'];
    $quiz_title = $_POST['quiz_title'];
    
    //Query for quiz updation
    $query  = "UPDATE QUIZZES SET ";
    $query .= "quiz_title = '{$quiz_title}' ";
    $query .= "WHERE quiz_id = {$quiz_id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);
    if ($result) {
        // Success
        $_SESSION["message"] = "Quiz updated!!";
        redirect_to("adminhome.php");
    } else {
        // Failure
        $_SESSION["message"] = "Quiz updation failed!!";
        redirect_to("adminhome.php");
    }
}
else {
    // This is probably a GET request
    redirect_to("adminhome.php");
}

?>