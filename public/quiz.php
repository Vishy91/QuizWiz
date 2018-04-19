<?php
/**
 * Created by PhpStorm.
 * User: vaishnavim
 * Date: 4/15/18
 * Time: 5:22 PM
 */
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
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
    <div class="panel panel-default" style="margin-top: 10%;width: 120%; ">
        <div class="panel-heading">Taking Question</div>

        <form class="form-horizontal" role="form" style="margin-top: 5%;">

            <div class="form-group">
                <div class="col-sm-6" align="right">Time Left:
                </div>
                <div class="col-sm-6" id='countdown' align="left">60
                </div>
            </div>
        </form>
        <div class="container-fluid">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="label label-warning" id="qid">2</span> THREE is CORRECT
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-3 col-xs-offset-5">
                            <div id="loadbar" style="display: none;">
                                <div class="blockG" ></div>
                                <div class="blockG" ></div>
                                <div class="blockG" ></div>
                                <div class="blockG"></div>
                                <div class="blockG" id="rotateG_05"></div>
                                <div class="blockG" id="rotateG_06"></div>
                                <div class="blockG" id="rotateG_07"></div>
                                <div class="blockG" id="rotateG_08"></div>
                            </div>
                        </div>

                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">1 One</label>
                            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">2 Two</label>
                            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">3 Three</label>
                            <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4">4 Four</label>
                        </div>
                    </div>
                    <div class="modal-footer text-muted">
                        <span id="answer"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary" style="margin-top: 30px;width: 600px; height:200px; ">
            <div class="panel-heading" style="color: #fff;
    background-color: #7306d1;
    border-color: #7306d1;">Question 1</div>
            <p align="left" style="margin-left:10px; margin-right:10px;">This is the first question of our quiz from the selected category and this question is retrieved from the database on random selection.</p>
            <div class="col-sm-6" style="padding-left:10px;">
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 1</label>
                </div>
            </div>
            <div class="col-sm-6" style="padding-left:10px;">
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 2</label>
                </div>
            </div>
            <div class="col-sm-6" style="padding-left:10px;" >
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 3</label>
                </div>
            </div>
            <div class="col-sm-6" style="padding-left:10px;">
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 4</label>
                </div>
            </div>



        </div>

        </div>
        <div class="panel-body">
            <div class="col-sm-offset-2 col-sm-8" align="center">
                <button type="submit" class="btn btn-primary" style="color: #fff;
    background-color: #7306d1;
    border-color: #7306d1;">Complete Quiz</button>
            </div>
        </div>
    </div>
</div>





<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>