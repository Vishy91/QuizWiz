<?php
/**
 * Created by PhpStorm.
 * User: vaishnavim
 * Date: 4/24/18
 * Time: 3:22 AM
 */
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
confirm_admin_logged_in();
require_once("../includes/validation_functions.php");
include("../includes/templates/headeradmin.php");

if (isset($_POST['create'])) {
    $noofquestions = $_POST['noofquestions'];
    $quiz_id =$_POST['quiz_id'];
}
else{
    $resultq=fetch_allquestions($quiz_id);
    print_r( $_SESSION["$quiz_id"]);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> QuizWiz</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/html" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>‌​


    <style>
        .b1 {
            background-color: #7306d1 !important;
            border: none;
            color: white;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 28px;
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
            <div class="container">

                <h1 style="color:black ;font-weight: 500; text-align: left">CREATE: </h1>
                <div class="row">

                    <p>Create questions and 4 options each question  for the quiz </p>
            <button type="button" class="btn btn-secondary btn-lg btn-block b1" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Create answer options</button>
                </div>
            </div>

             <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">OPTIONS </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="insertquestion.php" method="POST">
                                <div class="form-group">

                                    <?php for ($i=1;$i<=$noofquestions;$i++){
                                        ?>

                                        <label for="message-text" class="form-control-label" >Question <?php echo $i;?>:</label>
                                        <textarea class="form-control" id="category" required
                                                  name="quizcheck[<?php echo $i; ?>]" value=""></textarea>
                                        <br><br>
                                        <?php for($j=1; $j<=4; $j++){ ?>
                                        <label for="message-text" class="form-control-label">Options <?php echo $j;?>:</label>
                                        <textarea class="form-control" id="category" required name="answer[<?php echo $j; echo "-";echo $j; ?>]" value=""></textarea>
                                        <?php } ?>
                                    <?php } ?>
                                    <input type="hidden" value="<?php echo $quiz_id;?>" name="quiz_id">

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"  name="create" value="create">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>

        </main>
    </div>
</div>
</body>
</html>