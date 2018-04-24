<?php require_once("../includes/session.php");
require_once("../includes/data/dbconfig.php");
require_once("../includes/functions.php"); 
require_once("../includes/validation_functions.php");

if (isset($_POST['signup'])) {
  // Process the form
  
  // validations
  $required_fields = array("firstname", "lastname", "email", "password");
  validate_presences($required_fields);
  
  //password validation
  
  if (empty($errors)) {
    // Perform Create

    $firstname = mysql_prep($_POST["firstname"]);
    $lastname = mysql_prep($_POST["lastname"]);
    $email = mysql_prep($_POST["email"]);
    $password = password_encrypt($_POST["password"]);
    
    $query  = "INSERT INTO USERS (";
    $query .= "  user_firstname, user_lastname, user_email, user_password";
    $query .= ") VALUES (";
    $query .= "  '{$firstname}', '{$lastname}', '{$email}', '{$password}'";
    $query .= ")";

    $result = mysqli_query($connection, $query);
    $user_id = get_user_id_for_new_user();
    $rows = mysqli_fetch_array($user_id);
    $u_id = $rows['count_user'];
    
    if ($result) {
      // Success
		$_SESSION["user_id"] = $u_id;
		$_SESSION["user_firstname"] = $firstname;
		redirect_to("selectcategories.php");
    } else {
      // Failure
      $_SESSION["message"] = "User Creation Failed";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['createadmin']))

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>QuizWiz</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	<link href="css/public.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?php echo message(); ?>
				<?php echo form_errors($errors); ?>
				<form class="login100-form validate-form" action="signup.php" method="POST">
					<span class="login100-form-title p-b-49">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Firstname is required">
						<span class="label-input100">Firstname</span>
						<input class="input100"  type="text" name="firstname" placeholder="Type your firstname">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Lastname is required">
						<span class="label-input100">Lastname</span>
						<input class="input100" type="text" name="lastname" placeholder="Type your lastname">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br><br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

							<button class="login100-form-btn" name="signup">
								Sign Up
							</button>
						</div>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">

                            <div class="login100-form-bgbtn"></div>
                            <a href="index.php" class="login100-form-btn"> Back</a>
                        </div>
					</div>
                    </div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>