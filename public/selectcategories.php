<?php
/**
 * Created by PhpStorm.
 * User: vaishnavim
 * Date: 4/19/18
 * Time: 9:24 PM
 */
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> QuizWiz</title>

    <link rel="stylesheet" type="text/html" href="css/normalize.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="body-wrapper" style="color: black !important;">
    <div class="page-wrapper mdc-toolbar-fixed-adjust" style="padding-top: 2%; padding-right: 2%">
        <main class="content-wrapper" style="padding: 15px 15px 15px 15px !important;">
            <p style="text-align: center"> <b>SELECT CATEGORIES</b></p>
    <form action="home.php" method="POST">
    <div class="container-fluid">
        <div class="row" style="padding: 2% 2% 2% 2%">
            <?php $categories = fetch_allcategories();
            while ($rows = mysqli_fetch_array($categories) ) {?>
                <div class="col-sm-3 col-md-3">
                    <!-- Card -->

                    <article class="card card-inverse animated fadeInLeft">
                        <img class="img-responsive" src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/1U2EGZ07GU.jpg" alt="Deer in nature" />
                        <div class="card-img-overlay" style="text-align: center !important;">
                            <p class="card-text">
<!--                                <input class="c-card" type="checkbox" id="1" value="1" >-->
                                    <?php echo $rows["category_name"]; ?>
                                <br>
                                <input type="checkbox" name="subscribe[<?php echo $rows['category_id']; ?>]" value="<?php echo $rows['category_id']; ?>"
                                style="color: white !important; text-decoration: none !important;">&ensp;&ensp;
                            </p>
                        </div>
                    </article><!-- .end Card -->
                </div>
            <?php } ?>
            <div class="panel-body">
                <div class="col-sm-offset-2 col-sm-8" align="center">
                    <button type="submit" name="submit" class="btn btn-primary" style="color: #fff; background-color: #7306d1; border-color: #7306d1;">Submit</button>
                </div>
            </div>

        </div><!-- .end Second row -->
    </div>
</form>
        </main>
    </div>
</div>

</body>
</html>
