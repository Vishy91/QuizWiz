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
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
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
                <div class="brand"><a data-toggle="tooltip" data-placement="bottom" title="home" href="home.php" style="color:white!important; text-decoration: none !important;"> QuizWiz </a></div>

                <span class="mdc-toolbar__input">
            <div class="mdc-text-field">
                <form action="search.php" method="POST">
                    <input type="text" style="background-color: white; color: #563d7c; !important;" data-toggle="tooltip" data-placement="bottom" title="search" class="mdc-text-field__input" id="css-only-text-field-box" name="searchcat" placeholder="Search">

                </form>
            </div>
          </span>
            </section>
            <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">

                <div class="mdc-menu-anchor">
                    <a href="selectcategories.php" class="mdc-toolbar__icon mdc-ripple-surface" data-mdc-auto-init="MDCRipple" data-toggle="tooltip" data-placement="bottom" title="select categories">
                        <i class="material-icons" >widgets</i>
                    </a>
                </div>
                <div class="mdc-menu-anchor mr-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" onmouseover="this.style.color= 'pink';"data-toggle="dropdown"><i class="material-icons">more_vert</i></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><i class="material-icons mdc-theme--primary mr-1">settings</i></a></li>
                            <li><a href="logout.php"><i class="material-icons mdc-theme--primary mr-1">power_settings_new</i></a></li>

                        </ul>
                    </li>
                </ul>
                </div>
            </section>
        </div>
    </header>
</div>
</body>
</html>
