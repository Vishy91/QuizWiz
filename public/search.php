<?php
/**
 * Created by PhpStorm.
 * User: vaishnavim
 * Date: 4/22/18
 * Time: 2:54 PM
 */
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
confirm_logged_in();
include("../includes/templates/header.php");
//print_r($_POST['searchcat']);
if (isset($_POST['searchcat'])){
    $search_category = search_categories($_POST['searchcat']);
//    while ($rows = mysqli_fetch_array($search_category) ) {
//        echo $rows['category_name'];
//    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

    <!-- Latest compiled JavaScript -->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> QuizWiz</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/html" href="css/normalize.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <!--    End-->
</head>

<body>
<div class="body-wrapper" style="color: black !important;">
    <div class="page-wrapper mdc-toolbar-fixed-adjust" style="padding-top: 2%; padding-right: 2%">
        <main class="content-wrapper" style="padding: 15px 15px 15px 15px !important;">
            <div class="container-fluid">
                <div class="row" style="padding: 2% 2% 2% 2%">
                    <?php
                    while ($rows = mysqli_fetch_array($search_category) ) {?>
                        <div class="col-sm-3 col-md-3">
                            <!-- Card -->
                            <article class="card card-inverse animated fadeInLeft">
                                <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/1U2EGZ07GU.jpg" alt="Deer in nature" />
                                <div class="card-img-overlay">
                                    <p class="card-text">
                                        <?php echo '<a style="    color: white !important; text-decoration: none !important;" href="category.php?categoryid=' .$rows["category_id"].'&catrgoryname='.$rows["category_name"].'">'.$rows['category_name'].'</a>'; ?>
                                    </p>
                                </div>
                            </article><!-- .end Card -->
                        </div>
                    <?php } ?>

                </div><!-- .end Second row -->
            </div>
        </main>
    </div>
</div>

