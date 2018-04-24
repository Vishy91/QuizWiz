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

	function find_admin_by_username($username) {
		global $connection;
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM ADMINS ";
		$query .= "WHERE username = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			return null;
		}
	}


	function fetch_categories_for_user($user_id)	{
		global $connection;
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);
		
		$query = "Select c.* from CATEGORIES c JOIN SUBSCRIPTIONS s on c.category_id = s.subscription_category_id where subscription_user_id = {$safe_user_id} ";
		$result = mysqli_query($connection, $query);
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}
	function fetch_allcategories()	{
		global $connection;
//		$safe_user_id = mysqli_real_escape_string($connection);

		$query = "Select * from CATEGORIES";
		$result = mysqli_query($connection, $query);
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}
    function fetch_alltopics()	{
    global $connection;
//		$safe_user_id = mysqli_real_escape_string($connection);

    $query = "Select * from TOPICS";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) >= 0) {
        return $result;
    } else {
        return false;
    }
}
    function fetch_allquizes()	{
    global $connection;
//		$safe_user_id = mysqli_real_escape_string($connection);

    $query = "Select * from QUIZZES WHERE quiz_id not in (SELECT DISTINCT question_quiz_id FROM QUESTIONS)";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) >= 0) {
        return $result;
    } else {
        return false;
    }
}
function fetch_allquestions($quiz_id)	{
    global $connection;
//		$safe_user_id = mysqli_real_escape_string($connection);

    $query = "Select * from QUESTIONS WHERE question_quiz_id in ($quiz_id)";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) >= 0) {
        return $result;
    } else {
        return false;
    }
}
	function fetch_topics_for_category($category_id)	{
		global $connection;
		$safe_category_id = mysqli_real_escape_string($connection, $category_id);
		
		$query = "Select t.* from TOPICS t where topic_category_id = {$safe_category_id} ";
		$result = mysqli_query($connection, $query);
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function fetch_quizzes_for_topic($topic_id)	{
		global $connection;
		$safe_topic_id = mysqli_real_escape_string($connection, $topic_id);
		
		$query = "Select q.* from QUIZZES q where quiz_topic_id = {$safe_topic_id} ";
		$result = mysqli_query($connection, $query);
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function fetch_question_for_quiz($quiz_id)	{
		global $connection;
		$safe_quiz_id = mysqli_real_escape_string($connection, $quiz_id);
		
		$query = "Select * from QUESTIONS where question_quiz_id = {$safe_quiz_id} ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function fetch_questionoptions_for_question($question_id)	{
		global $connection;
		$safe_question_id = mysqli_real_escape_string($connection, $question_id);
		
		$query = "Select * from QUESTIONOPTIONS where questionoption_question_id = {$safe_question_id} ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function fetch_correct_questionoptionid_for_question($question_id)	{
		global $connection;
		$safe_question_id = mysqli_real_escape_string($connection, $question_id);
		
		$query = "Select questionoption_id from QUESTIONOPTIONS where questionoption_question_id = {$safe_question_id} AND questionoption_is_right = 1 ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function get_category_name($category_id)	{
		global $connection;
		$safe_category_id = mysqli_real_escape_string($connection, $category_id);
		
		$query = "Select category_name from CATEGORIES where category_id = {$safe_category_id} ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function get_quiz_played_by_user($user_id)	{
		global $connection;
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);
		
		$query = "Select q.quiz_title FROM QUIZZES q JOIN USERQUIZANSWERS u ON q.quiz_id = u.userquizanswer_quiz_id WHERE userquizanswer_user_id = {$safe_user_id} ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function count_quiz_played_by_user($user_id)	{
		global $connection;
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);

		$query = "Select COUNT(q.quiz_title) as countq FROM QUIZZES q JOIN USERQUIZANSWERS u ON q.quiz_id = u.userquizanswer_quiz_id WHERE userquizanswer_user_id = {$safe_user_id} ";
		$result = mysqli_query($connection, $query);

		if ($result && mysqli_num_rows($result) >= 0) {
		    return $result;
		} else {
		    return false;
		}
	}

	function get_quiz_won_by_user($user_id)	{
		global $connection;
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);
		
		$query = "Select COUNT(userquizanswer_quiz_id) as quiz_won from USERQUIZANSWERS where userquizanswer_user_id = {$safe_user_id} AND userquizanswer_won = 1 ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function get_quiz_lost_by_user($user_id)	{
		global $connection;
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);

		$query = "Select COUNT(userquizanswer_quiz_id) as quiz_lost from USERQUIZANSWERS where userquizanswer_user_id = {$safe_user_id} AND userquizanswer_won = 0 ";
		$result = mysqli_query($connection, $query);

		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function search_categories($category_name) {
		global $connection;
		$category_name = explode(' ', $category_name);

		$query = 'SELECT * FROM CATEGORIES WHERE ';

		$parts = array();
		foreach( $category_name as $category_name_word ){
		$parts[] = '`category_name` LIKE "%'.$category_name_word.'%"';
		}

		$query .= implode(' OR ', $parts);
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function get_recommended_for_user($user_id)	{
		global $connection;
		$safe_user_id = mysqli_real_escape_string($connection, $user_id);
		
		$query = "SELECT * FROM CATEGORIES where
        category_tag IN (SELECT c.category_tag FROM CATEGORIES c WHERE c.category_id IN 
        (SELECT s.subscription_category_id FROM SUBSCRIPTIONS s WHERE subscription_user_id = {$safe_user_id} ) ) 
        and category_id not IN (SELECT subscription_category_id from SUBSCRIPTIONS WHERE subscription_user_id = {$safe_user_id}) ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	function password_encrypt($password) {
		$hash_format = "$2y$10$";	// Tells PHP to use Blowfish with a "cost" of 10
		$salt_length = 22;			// Blowfish salts should be 22-characters or more
		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format . $salt;
		$hash = crypt($password, $format_and_salt);
		return $hash;
	}
	
	function generate_salt($length) {
		// Not 100% unique, not 100% random, but good enough for a salt
		// MD5 returns 32 characters
		$unique_random_string = md5(uniqid(mt_rand(), true));

		// Valid characters for a salt are [a-zA-Z0-9./]
		$base64_string = base64_encode($unique_random_string);

		// But not '+' which is valid in base64 encoding
		$modified_base64_string = str_replace('+', '.', $base64_string);

		// Truncate string to the correct length
		$salt = substr($modified_base64_string, 0, $length);

		return $salt;
	}
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
		$hash = crypt($password, $existing_hash);
		if ($hash === $existing_hash) {
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

	function logged_in() {
		return isset($_SESSION['user_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("index.php");
		}
	}

	function attempt_admin_login($username, $password) {
		$admin = find_admin_by_username($username);
		if ($admin) {
			// found user, now check password
			if (password_check($password, $admin["hashed_password"])) {
			// password matches
			return $admin;
			} else {
			// password does not match
			return false;
			}
		} else {
			// user not found
			return false;
		}
	}

	function logged_admin_in() {
		return isset($_SESSION['admin_id']);
	}
	
	function confirm_admin_logged_in() {
		if (!logged_admin_in()) {
			redirect_to("adminlogin.php");
		}
	}

?>