CREATE TABLE USERS(
	user_id INT PRIMARY KEY NOT NULL,
	user_firstname TEXT NOT NULL,
	user_lastname INT NOT NULL,
);

CREATE TABLE CATEGORIES(
	category_id INT PRIMARY KEY NOT NULL,
	category_name TEXT NOT NULL
);

--users and categories table mapping
CREATE TABLE SUBSCRIPTIONS(
	subscription_id INT PRIMARY KEY NOT NULL,
	subscription_user_id INT,
	subscription_category_id INT,
	FOREIGN KEY (subscription_user_id) REFERENCES USERS (user_id),
	FOREIGN KEY (subscription_category_id) REFERENCES CATEGORIES (category_id)
);

CREATE TABLE TOPICS(
	topic_id INT PRIMARY KEY NOT NULL,
	topic_name TEXT NOT NULL,
	topic_category_id INT,
	FOREIGN KEY (topic_category_id) REFERENCES CATEGORIES (category_id)
);

CREATE TABLE QUIZZES(
	quiz_id INT PRIMARY KEY NOT NULL,
	quiz_name TEXT NOT NULL,
	quiz_topic_id INT,
	FOREIGN KEY (quiz_topic_id) REFERENCES TOPICS (topic_id)
);

CREATE TABLE QUESTIONS(
	question_id INT PRIMARY KEY NOT NULL,
	question_text TEXT NOT NULL,
	question_quiz_id INT,
	FOREIGN KEY (question_quiz_id) REFERENCES QUIZZES (quiz_id)
);

--Quiz played by a user
CREATE TABLE USERQUIZ(
	userquiz_id INT PRIMARY KEY NOT NULL,
	userquiz_user_id INT,
	userquiz_quiz_id INT,
	FOREIGN KEY (userquiz_user_id) REFERENCES USERS (user_id)
	FOREIGN KEY (userquiz_quiz_id) REFERENCES QUIZZES (quiz_id)
);

--Quiz sent by another user
--user1 : challenger user id
--user2 : challenged to user id
CREATE TABLE CHALLENGES(
	challenge_id INT PRIMARY KEY NOT NULL,
	challenge_quiz_id INT,
	challenge_user1_id INT,
	challenge_user2_id INT,
	challenge_played bool,
	challenge_winner INT,
	FOREIGN KEY (challenge_quiz_id) REFERENCES QUIZZES (quiz_id),
	FOREIGN KEY (challenge_user1_id, challenge_user2_id, challenge_winner) REFERENCES USERS (user_id, user_id, user_id),
);