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
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                    <section class="purchase__card_section" >
                                        <img src="images/faces/face1.jpg">
                                    </section>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                    <section class="purchase__card_section">
                                        <p>Welcome, <?php echo $_SESSION["user_firstname"]; ?></p>
                                    </section>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
                                    <section class="purchase__card_section d-flex align-item-center">
                                        Game Statistics:<br>
                                        Games Won: 7
                                        Lost: 5
                                        Draw : 15
                                    </section>
                                </div>
                            </div>
                        </div>

            <br>
            <br>
            <div class="row">
                <div class="col-sm-9 col-md-6 col-lg-8" >
                    <div class="card" >
                            <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" role="tab" id="cat-tab" data-toggle="tab" href="#categories" aria-controls="cat" aria-selected="false"
                            style="color: #7306d1 !important; font-weight: bold;" >Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #7306d1 !important; font-weight: bold;" role="tab" id="play-tab" data-toggle="tab" href="#played"  aria-controls="play" aria-selected="false">Played</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #7306d1 !important; font-weight: bold;" role="tab" id="stat-tab" data-toggle="tab" href="#details"  aria-controls="stat" aria-selected="false">detailedStatistics</a>
                        </li>
                    </ul>
                </div>
                            <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="categories"  role="tabpanel" aria-labelledby="cat-tab">
                            <div class="container-fluid">
                                <div class="row" style="padding: 2% 2% 2% 2%">
                                    <?php $user_categories = fetch_categories_for_user($_SESSION["user_id"]);
                                    while ($rows = mysqli_fetch_array($user_categories) ) {?>
                                    <div class="col-sm-3 col-md-3">
                                        <!-- Card -->
                                        <article class="card card-inverse animated fadeInLeft">
                                            <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/1U2EGZ07GU.jpg" alt="Deer in nature" />
                                            <div class="card-img-overlay">
                                                <p class="card-text"><?php echo '<a href="category.php?categoryid=' .$rows["category_id"].'">'.$rows["category_name"].'</a>'; ?>
                                                </p>
                                            </div>
                                        </article><!-- .end Card -->
                                    </div>
                                    <?php } ?>

                                </div><!-- .end Second row -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="played" role="tabpanel" aria-labelledby="play-tab">
                            Played
                        </div>
                        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="stat-tab">
                            stats
                        </div>

                    </div>

                </div>

                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-4" >
                    <div class="card" >
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" role="tab" id="reccat-tab" data-toggle="tab" href="#reccategories" aria-controls="cat" aria-selected="false"
                                       style="color: #7306d1 !important; font-weight: bold;">Rec Categories</a>
                                </li>
                            </ul>
                </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show" id="reccategories" style="padding-top: 2%" role="tabpanel" aria-labelledby="reccat-tab">
                                    <div class="container-fluid">
                                    <div class="row" style="padding: 2% 2% 2% 2%">
                                        <div class="col-sm-3 col-md-6">
                                            <!-- Card -->
                                            <article class="card card-inverse animated fadeInRight">
                                                <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/8SALDQRRZX.jpg" alt="White sand" />
                                                <div class="card-img-overlay">
                                                    <p class="card-text">Story </p>
                                                </div>
                                            </article><!-- .end Card -->
                                        </div>
                                        <div class="col-sm-3 col-md-6">
                                            <!-- Card -->
                                            <article class="card card-inverse animated fadeInRight">
                                                <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/8SALDQRRZX.jpg" alt="White sand" />
                                                <div class="card-img-overlay">
                                                    <p class="card-text">Four </p>
                                                </div>
                                            </article><!-- .end Card -->
                                        </div>
                                        <div class="col-sm-3 col-md-6">
                                                <!-- Card -->
                                                <article class="card card-inverse animated fadeInLeft">
                                                    <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/1U2EGZ07GU.jpg" alt="Deer in nature" />
                                                    <div class="card-img-overlay">
                                                        <p class="card-text"> play</p>
                                                    </div>
                                                </article><!-- .end Card -->
                                            </div>
                                            <div class="col-sm-3 col-md-6">
                                                <!-- Card -->
                                                <article class="card card-inverse animated fadeInDown">
                                                    <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/SYC0YBA37V.jpg" alt="Leaf on the street" />
                                                    <div class="card-img-overlay">
                                                        <p class="card-text"> She die...</p>
                                                    </div>
                                                </article><!-- .end Card -->
                                            </div>


                                     </div>
                                     </div>
                                </div>

                            </div>
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