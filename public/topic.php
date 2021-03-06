<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
confirm_logged_in();
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
            <!--            <div class="mdc-layout-grid">-->
            <!--                <div class="mdc-layout-grid__inner">-->
            <!--                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cellspan-12" style="height: 150%;"-->
            <div class="mdc-card" style="height: 150%; color: #7306d1 !important; font-weight: bold; padding: 2% 2% 2% 2% !important; ">
                <div class="mdc-layout-grid__inner" >
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                        <section class="purchase__card_section" >
                            <img src="images/Topic.png" style="width: 100px; height: 100px;">
                        </section>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-10">
                        <section class="purchase__card_section">
                            <p><p style="font-size: 30px !important;"><b> Topic: <?php echo $_GET["topicname"]; ?></b></p>
                            <p style="color:black !important;font-size: 20px !important;">You can now select any quizes from below. The quiz name reflects the level of difficulty. </p>
                        </section>
                    </div>

                </div>
            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <div class="card" >
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" role="tab" id="cat-tab" data-toggle="tab" href="#categories" aria-controls="cat" aria-selected="true"
                                       aria-expanded="true" style="color: #7306d1 !important; font-weight: bold;">Quizzes</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane active show" id="categories"  role="tabpanel" aria-labelledby="cat-tab">
                                    <div class="container-fluid">
                                        <div class="row" style="padding: 2% 2% 2% 2%">
                                            <?php $quizzes = fetch_quizzes_for_topic($_GET["topicid"]);
                                            while ($rows = mysqli_fetch_array($quizzes) )
                                            {?>
                                            <div class="col-sm-3 col-md-3">
                                                <!-- Card -->
                                                <article class="card card-inverse animated fadeInLeft">
                                                    <img class="img-responsive" src="images/quiz.png" alt="Deer in nature" />
                                                    <div class="card-img-overlay">
                                                        <?php echo '<a style="    color: white !important; text-decoration: none !important;" href="quiz1.php?quizid=' .$rows["quiz_id"].'&topicid='.$_GET["topicid"].'&topicname='.$_GET["topicname"].'">'.$rows["quiz_title"].'</a>'; ?>
                                                    </div>
                                                </article><!-- .end Card -->
                                            </div>
                                            <?php } ?>
                                        </div><!-- .end Second row -->
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </main>
    </div>
</div>




</body>

</html>

