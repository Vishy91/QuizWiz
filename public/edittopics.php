<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");
if (isset($_POST['edit'])) {

    $topic_id = $_POST['topic_id'];
    $topic_name = $_POST['topic_name'];
    
    //Query for topic updation
    $query  = "UPDATE TOPICS SET ";
    $query .= "topic_name = '{$topic_name}' ";
    $query .= "WHERE topic_id = {$topic_id} ";
    $query .= "LIMIT 1";
    print_r($query);
    $result = mysqli_query($connection, $query);
    if ($result) {
        // Success
        $_SESSION["message"] = "Topic updated!!";
        redirect_to("adminhome.php");
    } else {
        // Failure
        $_SESSION["message"] = "Topic updation failed!!";
        redirect_to("adminhome.php");
    }
}
else {
    // This is probably a GET request
    redirect_to("adminhome.php");
}

?>