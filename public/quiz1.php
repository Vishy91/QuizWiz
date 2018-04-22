<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
confirm_logged_in();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>QUIZWIZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!-- Le styles -->

    <link type="text/html" href="login.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

    <link href="css/mainTakequiz.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 30px;
        }

        pbfooter {
            position: relative;
        }
        .panel-primary {
            border-color: #7306d1;
        }
        .panel-primary>.panel-heading{
            color: #fff;
            background-color: #7306d1;
            border-color: #7306d1;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300"
          rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans"
          rel="stylesheet" type="text/css">

    <!-- Jquery Validate Script -->
    <script type="text/javascript" src="js/jquery.validate.js"></script>

    <!-- Jquery Validate Script - Validation Fields -->
    <script type="text/javascript">
        $(function(){

            $("label.btn").on('click',function () {
                var choice = $(this).find('input:radio').val();
                // $('#loadbar').show();
                // $('#quiz').fadeOut();
                setTimeout(function(){
                    $( "#answer" ).html(  $(this).checking(choice) );
                    //     // $('#quiz').show();
                    //     // $('#loadbar').fadeOut();
                    //     /* something else */
                }, 100);
            });

            $ans = 3;

            $.fn.checking = function(ck) {
                if (ck != $ans)
                    return 'INCORRECT';
                else
                    return 'CORRECT';
            };
        });



        $(function() {
            var cd = $('#countdown');
            var c = parseInt(cd.text(),10);
            var interv = setInterval(function() {
                c--;
                cd.html(c);
                if (c == 0) {
                    window.location.reload(false);
                    clearInterval(interv);
                }
            }, 1000);
        });
    </script>

</head>

<style>
    .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary
    {
        color:black;
        border-color: #ddd;
    }
    #qid {
        padding: 10px 15px;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 20px;
    }
    label.btn {
        border-color: #ddd;
        padding: 18px 60px;
        white-space: normal;
        -webkit-transform: scale(1.0);
        -moz-transform: scale(1.0);
        -o-transform: scale(1.0);
        -webkit-transition-duration: .3s;
        -moz-transition-duration: .3s;
        -o-transition-duration: .3s;
        background-color: #ddd !important;
        color: black;
    }

    label.btn:hover {
        background-color: #ddd !important;
        color:black;
        text-shadow: 0 3px 2px rgba(0,0,0,0.4);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1)
    }
    label.btn-block {
        text-align: left;
        position: relative
    }

    label .btn-label {
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        padding: 0 10px;
        background: rgba(0,0,0,.15);
        height: 100%
    }

    label .glyphicon {
        top: 34%
    }
    .modal-header {
        background-color: #7306d1;
        max-height: fit-content;

    }

    .modal-body {
        min-height: 205px
    }
    #loadbar {
        position: absolute;
        width: 62px;
        height: 77px;
        top: 2em
    }
    .blockG {
        position: absolute;
        background-color: #FFF;
        width: 10px;
        height: 24px;
        -moz-border-radius: 8px 8px 0 0;
        -moz-transform: scale(0.4);
        -webkit-border-radius: 8px 8px 0 0;
        -webkit-transform: scale(0.4);
        -ms-border-radius: 8px 8px 0 0;
        -ms-transform: scale(0.4);
        -o-border-radius: 8px 8px 0 0;
        -o-transform: scale(0.4);

        border-radius: 8px 8px 0 0;
        transform: scale(0.4);

    }

    @-moz-keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    @-webkit-keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    @-ms-keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    @-o-keyframes fadeG {
        0% {
            background-color: #000
        }
        100% {
            background-color: #FFF
        }
    }

    @keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    .pbfooter {
        position: relative;
    }

    .navbar-header {
        height: 60px;
    }

    .container1{
        margin-top: 10%;
        margin-right: 5%;
    }
</style>

<body bgcolor="#e3e3e3">

<div class="container"  align="center" >
    <form class="form-horizontal" role="form" style="margin-top: 5%;" method="POST" action="result.php">
        <div class="panel panel-default" style="margin-top: 10%;width: 120%; ">
            <div class="panel-heading">Taking Question</div>

            <!-- <form class="form-horizontal" role="form" style="margin-top: 5%;"> -->

            <div class="form-group">
                <div class="col-sm-6" align="right">Time Left:
                </div>
                <div class="col-sm-6" id='countdown' align="left">60
                </div>
            </div>
            <!-- </form> -->
            <?php if(isset($_GET["quizid"])) {
                $quiz_question = fetch_question_for_quiz($_GET["quizid"]);
                for ($i = 1; $i <= mysqli_num_rows($quiz_question); $i++) {
                    while ($rows = mysqli_fetch_array($quiz_question)) {
                        echo $rows['question_text'];?>
                        <br><br>
                        <?php $quiz_options = fetch_questionoptions_for_question($rows['question_id']);
                        while ($rows = mysqli_fetch_array($quiz_options)) { ?>
                            <input type="radio" checked="checked" name="quizcheck[<?php echo $rows['questionoption_question_id']; ?>]"
                                               value="<?php echo $rows['questionoption_id']; ?>">

                                        <?php echo $rows['questionoption_text'];
                                        ?>
            <br>
            <br><?php
                        }
                    }
                }
            }
            ?>
<div class="panel-body">
    <div class="col-sm-offset-2 col-sm-8" align="center">
        <button type="submit" name="submit" class="btn btn-primary" style="color: #fff; background-color: #7306d1; border-color: #7306d1;">Complete Quiz</button>
    </div>
</div>
</form>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>