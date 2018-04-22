<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
confirm_admin_logged_in();
include("../includes/templates/header.php");
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!--    End-->
    <style>
        .button {
            background-color: #7306d1 !important;
            border: none;
            color: white;
            font-weight: 600;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;

            margin: 4px 2px;
            border-radius: 12px;
            width:110%;
        }
    </style>

</head>

<body>
<div class="body-wrapper" style="color: black !important;">
    <div class="page-wrapper mdc-toolbar-fixed-adjust" style="padding-top: 2%; padding-right: 2%">
        <main class="content-wrapper" style="padding: 15px 15px 15px 15px !important;">
            <div class="mdc-card" style="height: 150%; color: #7306d1 !important; font-weight: bold; padding: 2% 2% 2% 2% !important; ">
                <div class="mdc-layout-grid__inner" >
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                        <section class="purchase__card_section" >
                            <img src="images/faces/face1.jpg">
                        </section>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                        <section class="purchase__card_section">
                            <p>Welcome, <?php echo $_SESSION["username"]; ?></p>
                        </section>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <div class="container">

                <h1 style="color:black ;font-weight: 500; align-content: center">CREATE: </h1>
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-3" >

                        <?php echo '<a  class="button"  href="createcategories.php?adminid=' .$_SESSION["username"].'">Categories</a>'; ?>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3" >
                        <?php echo '<a  class="button"  href=" .php?adminid=' .$_SESSION["username"].'">Topics</a>'; ?>

                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3" >

                        <?php echo '<a  class="button"  href="createquiz.php?adminid=' .$_SESSION["username"].'">Quiz</a>'; ?>

                    </div>
                </div>
                </div>

            </div>

        </main>
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
    </div>
</div>




</body>

</html>