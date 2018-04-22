<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/dbconfig.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
if (isset($_POST['edituser'])) {
  // Process the form
  
  // validations
  $required_fields = array("firstname", "password");
  validate_presences($required_fields);
  
  if (empty($errors)) {
    
    // Perform Update

    $id = $_GET["userid"];
    //$firstname = mysql_prep($_POST["firstname"]);
    $hashed_password = password_encrypt($_POST["password"]);
  
    $query  = "UPDATE USERS SET ";
    $query .= "hashed_password = '{$hashed_password}' ";
    $query .= "WHERE user_id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) == 1) {
      // Success
      $_SESSION["message"] = "Password updated";
      redirect_to("home.php");
    } else {
      // Failure
      $_SESSION["message"] = "Password updation failed!";
    }
  
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['editadmin']))

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
</head>
<body>
	<?php echo message(); ?>
	<?php echo form_errors($errors); ?>
	<h2>Edit Password: <?php echo htmlentities($_SESSION["user_firstname"]); ?></h2>
	<form action="profile.php?userid=<?php echo urlencode($_SESSION["user_id"]); ?>" method="post">
		<p>Firstname: <input type="text" name="firstname" value="<?php echo htmlentities($_SESSION["user_firstname"]); ?>" /></p>
		<p>Password: <input type="password" name="password" value="" /></p>
		<button type="submit" name="edituser"></button>
	</form>
	<br />
	<a href="home.php">Cancel</a>
</body>
</html>
