<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");
if (isset($_POST['edit'])) {

    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $category_tag = $_POST['category_tag'];

    //Query for category updation
    $query  = "UPDATE CATEGORIES SET ";
    $query .= "category_name = '{$category_name}', ";
    $query .= "category_tag = '{$category_tag}' ";
    $query .= "WHERE category_id = {$category_id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);
    if ($result) {
        // Success
        $_SESSION["message"] = "Category updated!!";
        redirect_to("adminhome.php");
    } else {
        // Failure
        $_SESSION["message"] = "Category updation failed!!";
        redirect_to("adminhome.php");
    }
}
else {
    // This is probably a GET request
    redirect_to("adminhome.php");
}

?>