<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_logged_in();
require_once("../includes/validation_functions.php");

if (isset($_POST['create'])) {

    //Query for category creation

    $category_name = $_POST['category_name'];
    $category_tag = $_POST['category_tag'];
//    print_r($category_name);
//    print_r($category_tag);
//            //Query for category creation
            $query = " INSERT INTO CATEGORIES (";
            $query .= " category_name, category_tag ";
            $query .= " )VALUES (";
            $query .= " '{$category_name}', '{$category_tag}' ";
            $query .= ")";
            $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        $_SESSION["message"] = "Categries created!!";
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