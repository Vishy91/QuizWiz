<?php 
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_logged_in();
require_once("../includes/validation_functions.php");

if (isset($_POST['submit'])) {

    //SUBSCRIPTIONS table attribute
    $subscription_user_id = $_SESSION["user_id"];
    if(isset($_POST['subscribe']))
    {
        foreach($_POST['subscribe'] as $subscribecbcategoryid){

        //Query for SUBSCRIPTIONS
            $query = "INSERT INTO SUBSCRIPTIONS (subscription_user_id, subscription_category_id ) ";
            $query .= "VALUES (";
            $query .= " {$subscription_user_id}, {$subscribecbcategoryid} ";
            $query .= ")";
            $result = mysqli_query($connection, $query);
        }
    }

    if ($result) {
    // Success
        $_SESSION["message"] = "Categories subscribed!!";
        redirect_to("home.php");
    } else {
    // Failure
        $_SESSION["message"] = "Categories subscription failed!!";
        redirect_to("home.php");
    }

} else {
    // This is probably a GET request
    redirect_to("home.php");
}

if (isset($connection)) { mysqli_close($connection); }

?>