<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_logged_in();
require_once("../includes/validation_functions.php");

if (isset($_POST['create'])) {

    //Query for category creation

    $category_id = $_POST['topics'];
    $topic_name = $_POST['topic_name'];
//    print_r($topic_name);
//    print_r($category_id);
//            //Query for category creation
    $query = " INSERT INTO TOPICS (";
    $query .= " topic_name, topic_category_id ";
    $query .= " )VALUES (";
    $query .= " '{$topic_name}', '{$category_id}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        $_SESSION["message"] = "Topic created!!";
//        print_r($_SESSION["message"]);
        redirect_to("adminhome.php");
    } else {
        // Failure
        $_SESSION["message"] = "Categries creation failed!!";
        print_r($_SESSION["message"]);
        redirect_to("home.php");
    }

}
else {
    // This is probably a GET request
    redirect_to("adminhome.php");
}

//if (isset($connection))
//{ mysqli_close($connection); }

?>