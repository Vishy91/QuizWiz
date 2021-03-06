<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QuizWiz</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .nav>li>a:focus, .nav>li>a:hover {
            text-decoration: none;
            background-color: inherit !important;
        }
        /*.nav .open>a, .nav .open>a:focus, .nav .open>a:hover{*/
            /*background-color: #7306d1;*/
            /*border-color: #7306d1 ;*/
        /*}*/
        .dropdown-toggle::after {
            display: none !important;
            width: 0px;
            height: 0px;
            margin-left: 0.25rem;
            vertical-align: middle;
            content: none !important;
            border: none !important;
            /*border-right: 0.3em solid transparent;*/
            /*border-left: 0.3em solid transparent;*/
        }


    </style>
</head>

<body>
<div class="body-wrapper"  style="font-family: Roboto, sans-serif;font-size: 20px;
    color: white;
    font-weight: 500;">

    <!--    partial -->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed" style="background-color: #7306d1;" >
        <div class="mdc-toolbar__row">
            <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                <div class="logo">
                    <img style="width:50px; height:50px;" src="../public/images/a.png">
                </div>
                <div class="brand"><a href="adminhome.php" style="color:white!important; text-decoration: none !important;"> QuizWiz </a></div>

                <span class="mdc-toolbar__input">
            <div class="mdc-text-field">
              <input type="text" style="background-color: white; color: #563d7c; !important;" class="mdc-text-field__input" id="css-only-text-field-box" placeholder="Search">
            </div>
          </span>
            </section>
            <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">

                <div class="mdc-menu-anchor">
                    <a href="logoutadmin.php"><i class="material-icons mdc-theme--primary mr-1" style="color:white !important;">power_settings_new</i></a>

                </div>
            </section>
        </div>
    </header>
</div>
</body>
</html>
