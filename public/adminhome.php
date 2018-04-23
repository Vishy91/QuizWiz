<?php
require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php");
require_once("../includes/validation_functions.php");
confirm_admin_logged_in();
include("../includes/templates/headeradmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
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
                            <p>Welcome admin, <?php echo $_SESSION["username"]; ?></p>
                        </section>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <div class="container">

                <h1 style="color:black ;font-weight: 500; text-align: left">CREATE: </h1>
                <div class="row">
            <button type="button" class="btn btn-secondary btn-lg btn-block b1" data-toggle="modal" data-target="#exampleModal" >Categories</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block b1" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Topics</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block b1" data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Quiz</button>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  action="createcategories.php" method="POST">
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">Category name:</label>
                                    <textarea class="form-control" name="category_name" value="" id="category"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">Category Tag:</label>
                                    <textarea class="form-control" name="category_tag" value="" id="tag"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="create" value="create" class="btn btn-primary">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Topic</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="createtopics.php" method="POST">
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">Select category:</label>
                                    <select name="topics">
                                        <?php $categories = fetch_allcategories();
                                        while ($rows = mysqli_fetch_array($categories) ) {?>
                                        <option name="<?php echo $rows['category_id']; ?>" value="<?php echo $rows['category_id']; ?>">
                                            <?php echo $rows["category_name"]; ?>
                                        </option>
                                        <?php }?>
                                    </select>
                                    <br>
                                    <label for="message-text" class="form-control-label">Name:</label>
                                    <textarea class="form-control" id="topic" name="topic_name" value=""></textarea>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="create" value="create">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Quiz</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="createquiz.php" method="POST">
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">Select topic:</label>
                                    <select name="quiz">
                                        <?php $categories = fetch_alltopics();
                                        while ($rows = mysqli_fetch_array($categories) ) {?>
                                            <option name="<?php echo $rows['topic_id']; ?>" value="<?php echo $rows['topic_id']; ?>">
                                                <?php echo $rows["topic_name"]; ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                    <br>
                                    <label for="message-text" class="form-control-label">Name:</label>
                                    <textarea class="form-control" id="category" name="quiz_name" value=""></textarea>
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



    </div>

        </main>
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
    </div>
</div>




</body>

</html>