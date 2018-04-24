<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");

if (isset($_POST['create'])) {

    //Query for quiz creation

    $quiz_topic_id= $_POST['quiz'];
    $quiz_name = $_POST['quiz_name'];

    $query = " INSERT INTO QUIZZES (";
    $query .= "  quiz_title, quiz_topic_id ";
    $query .= " )VALUES (";
    $query .= " '{$quiz_name}', '{$quiz_topic_id}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        $_SESSION["message"] = "Quiz created!!";
//        print_r($_SESSION["message"]);
        redirect_to("adminhome.php");
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