<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_logged_in();
require_once("../includes/validation_functions.php");
include("../includes/templates/header.php");
?>

<html>
<head>
    <title>Result</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    @import url(//fonts.googleapis.com/css?family=Lato:400,900);
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

    .info-card {
        float: left;
        margin: 10px;
        -webkit-perspective: 600px;
    }

    .front, .back {
        background: #FFF;
        border-radius: 10px;
        transition: -webkit-transform 1s;
        -webkit-transform-style: preserve-3d;
        -webkit-backface-visibility: hidden;
        border: 1px solid black;
    }

    .front {
        overflow: hidden;
        width: 170%;
        height: 330px;
        position: absolute;
        z-index: 1;
    }

    .back {
        padding: 20px;
        padding-top: 0px;
        width: 170%;
        height: 330px;
        -webkit-transform: rotateY(-180deg);
        overflow: scroll;
    }

    .info-card:hover .back {
        -webkit-transform: rotateY(0);
    }

    .info-card:hover .front {
        -webkit-transform: rotateY(180deg);
    }

    .card-image {
        width: 100%;
        height: 100%;
    }


    /* Social buttons */
    .social {
        list-style: none;
        padding: 0px;
        margin-top: 25px;
        text-align: center;
    }

    .social a {
        position: relative;
        display: inline-block;
        min-width: 40px;
        padding: 10px 0px;
        margin: 0px 5px;
        overflow: hidden;
        text-align: center;
        background-color: rgb(215, 215, 215);
        border-radius: 40px;
    }


    a.social-icon {
        text-decoration: none !important;
        box-shadow: 0px 0px 1px rgb(51, 51, 51);
        box-shadow: 0px 0px 1px rgba(51, 51, 51, 0.7);
    }
    a.social-icon:hover {
        color: rgb(255, 255, 255) !important;
    }
    a.facebook {
        color: rgb(59, 90, 154) !important;
    }
    a.facebook:hover {
        background-color: rgb(59, 90, 154) !important;
    }
    a.twitter {
        color: rgb(45, 168, 225) !important;
    }
    a.twitter:hover {
        background-color: rgb(45, 168, 225) !important;
    }
    a.github {
        color: rgb(51, 51, 51) !important;
    }
    a.github:hover {
        background-color: rgb(51, 51, 51) !important;
    }
    .pull-right {
        float: right;
    }
    .pull-left {
        float: left;
    }
    .displayed {
        display: block;
        margin-left: auto;
        margin-right: auto }
</style>
</head>
<body>
<div class="body-wrapper" style="color: black !important;">
    <div class="page-wrapper mdc-toolbar-fixed-adjust" style="padding-top: 2%; padding-right: 2%">
        <main class="content-wrapper" style="padding: 15px 15px 15px 15px !important;">
        <?php
        $userquizanswer_won = 0;
        $sum = 0;
        if(!empty($_POST['quizcheck'])) {
            $quicheck = $_POST['quizcheck'];
            $output = [];
            foreach ($quicheck as &$value) {
                echo "\n \n\n\n\n";
                $output = explode("-", $value);
                $sum += $output[1];
            }
            $average = round(count($quicheck) / 2);
            $message = "HELLLLLPOOO";
            if ($sum > $average) {
                $message= "You Won. Click on the smiley to see details.";
                $userquizanswer_won = 1;
            } else {
                $message= "You lost. Click on the smiley to see details.";
                $userquizanswer_won = 0;
            }
        }
        $time = '00:00:00';
        $user_id = $_SESSION['user_id'];
        $quiz_id = $_GET["quizid"];
        $result = " Insert into USERQUIZANSWERS(userquizanswer_user_id, userquizanswer_quiz_id, userquizanswer_won, userquizanswer_answer_time) values ($user_id, $quiz_id, $userquizanswer_won, '$time') ";
        global $connection;
        $queryresult= mysqli_query($connection,$result);
        if ($result) {
            // Success
            //$_SESSION["message"] = "USERQUIZANSWERS inserted!";
            //redirect_to("home.php");
        } else {
            // Failure
            $_SESSION["message"] = "USERQUIZANSWERS failed!!";
            redirect_to("home.php");
        }
        ?>

            <div class="container">
                <div class="row" style="padding-top: 5%;">
                    <div class="card text-center displayed" style="width: 43%;">
                        <div class="card-header">
                            <h2>Result</h2>

                        </div>
                        <div class="card-body" style="padding-left: 5%;">
                    <!-- Info Card with social icons -->

                                <p><?php echo $message; ?></p>
                                <div class="info-card displayed" style="    padding-bottom: 5%;">
                                <?php if ($sum > $average){
                                ?>
                                <div class="front">
                                    <img class="card-image" src="images/won.png"">
                                    <p style="text-align: center"> <b> <?php echo $message; ?></b></p>
                                </div>
                                <?php } else{?>
                                    <div class="front">
                                        <img class="card-image" src="images/lost.jpg">

                                    </div>
                                <?php } ?>
                                <div class="back">
                                    <h2>Detailed Result</h2>
                                    <p>
                                        Total Questions : <?php echo count($quicheck); ?><br><br>
                                        Total Questions Right: <?php echo $sum; ?><br><br>
                                        Questions to win : <?php echo $average; ?>

                                    </p>
                                </div>
                                </div>
                        </div>


                </div>

                    <div class="card-footer displayed" style="padding-top: 4%; padding-left: 35%;">
                        <a type="button" style="background-color: #7306d1; border-color:#7306d1; width: 25%;" href="home.php" class="btn btn-primary">Home</a>
                        <?php echo '<a class="btn btn-primary" style="background-color: #7306d1 ; width: 25%; border-color:#7306d1;" href="topic.php?topicid='.$_POST["topicid"].'&topicname='.$_POST["topicname"].'" >'."Back".'</a>'; ?>
                    </div>
        </main>
    </div>
</div>
</body>
</html>
