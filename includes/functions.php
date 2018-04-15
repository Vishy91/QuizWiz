<?php 
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
			$output .= "<div class=\"error\">";
			$output .= "Please fix the following errors:";
			$output .= "<ul>";
			foreach ($errors as $key => $error) {
				$output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
			}
			$output .= "</ul>";
			$output .= "</div>";
		}
		return $output;
	}

	function find_user_by_email($email) {
		global $connection;
		
		$safe_email = mysqli_real_escape_string($connection, $email);
		
		$query  = "SELECT * ";
		$query .= "FROM USERS ";
		$query .= "WHERE user_email = '{$safe_email}' ";
		$query .= "LIMIT 1";
		$user_set = mysqli_query($connection, $query);
		confirm_query($user_set);
		if($user = mysqli_fetch_assoc($user_set)) {
			return $user;
		} else {
			return null;
		}
	}

	function password_check($password, $existing_password) {
		if ($password === $existing_password) {
			return true;
		} else {
			return false;
		}
	}

	function attempt_login($email, $password) {
		$user = find_user_by_email($email);
		if ($user) {
			// found user, now check password
			if (password_check($password, $user["user_password"])) {
			// password matches
			return $user;
			} else {
			// password does not match
			return false;
			}
		} else {
			// user not found
			return false;
		}
	}

?>