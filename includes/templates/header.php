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
    <title> QuizWiz</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="body-wrapper"  style="font-family: Roboto, sans-serif;font-size: 20px;
    color: white;
    font-weight: 500;">

    <!--    <!-- partial -->-->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed" style="background-color: #7306d1;" >
        <div class="mdc-toolbar__row">
            <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                <div class="logo">
                    <img style="width:50px; height:50px;" src="../public/images/a.png">
                </div>
                <div class="brand"> QuizWiz </div>

                <span class="mdc-toolbar__input">
            <div class="mdc-text-field">
              <input type="text" style="background-color: white; color: #563d7c; !important;" class="mdc-text-field__input" id="css-only-text-field-box" placeholder="Search">
            </div>
          </span>
            </section>
            <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">
                <div class="mdc-menu-anchor">
                    <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown" toggle-dropdown="notification-menu" data-mdc-auto-init="MDCRipple">
                        <i class="material-icons">notifications</i>
                        <span class="dropdown-count">3</span>
                    </a>
                    <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="notification-menu">
                        <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                            <li class="mdc-list-item" role="menuitem" tabindex="0">
                                <i class="material-icons mdc-theme--primary mr-1">email</i>
                                One unread message
                            </li>
                            <li class="mdc-list-item" role="menuitem" tabindex="0">
                                <i class="material-icons mdc-theme--primary mr-1">group</i>
                                One event coming up
                            </li>
                            <li class="mdc-list-item" role="menuitem" tabindex="0">
                                <i class="material-icons mdc-theme--primary mr-1">cake</i>
                                It's Aleena's birthday!
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mdc-menu-anchor">
                    <a href="#" class="mdc-toolbar__icon mdc-ripple-surface" data-mdc-auto-init="MDCRipple">
                        <i class="material-icons">widgets</i>
                    </a>
                </div>
                <div class="mdc-menu-anchor mr-1">
                    <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown" toggle-dropdown="logout-menu" data-mdc-auto-init="MDCRipple">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="logout-menu">
                        <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                            <li class="mdc-list-item" role="menuitem" tabindex="0">
                                <i class="material-icons mdc-theme--primary mr-1">settings</i>
                                Settings
                            </li>
                            <li class="mdc-list-item" role="menuitem" tabindex="0">
                                <i class="material-icons mdc-theme--primary mr-1">power_settings_new</i>
                                Logout
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </header>
</div>
</body>
</html>
