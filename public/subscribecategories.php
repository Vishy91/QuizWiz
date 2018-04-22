<?php 
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_logged_in();
require_once("../includes/validation_functions.php");

if (isset($_POST['submit'])) {

    // validations
    $required_fields = array("subscription_user_id", "subscription_category_id");
    validate_presences($required_fields);

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("home.php");
    }

    // Process the form

    //SUBSCRIPTIONS table attribute
    $subscription_user_id = (int) $_POST["subscription_user_id"];
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
        $_SESSION["message"] = "Categries subscribed!!";
        redirect_to("home.php");
    } else {
    // Failure
        $_SESSION["message"] = "Categries subscription failed!!";
        redirect_to("home.php");
    }

} else {
    // This is probably a GET request
    redirect_to("home.php");
}

if (isset($connection)) { mysqli_close($connection); }

?>