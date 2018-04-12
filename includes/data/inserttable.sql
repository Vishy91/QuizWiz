INSERT INTO USERS
  (user_firstname, user_lastname) 
VALUES
  ('Shweta', 'BHARTIA'),
  ('Vaishnavi', 'Mukundhan');

INSERT INTO CATEGORIES 
    (category_name)
VALUES
  (''),
  ('');

INSERT INTO SUBSCRIPTIONS 
    (subscription_user_id, subscription_category_id)
VALUES
  (,),
  (,);

INSERT INTO TOPICS 
    (topic_name, topic_category_id)
VALUES
  ('', ),
  ('', );

INSERT INTO QUIZZES
  (quiz_name, quiz_topic_id)
VALUES
  ('', ),
  ('', );

INSERT INTO QUESTIONS
  (question_text, question_quiz_id)
VALUES
  ('', ),
  ('', );

INSERT INTO USERQUIZ
  (userquiz_user_id, userquiz_quiz_id)
VALUES
  (, ),
  (, );

INSERT INTO CHALLENGES
  (challenge_quiz_id, challenge_user1_id, challenge_user2_id, challenge_played, challenge_winner)
VALUES
  (, , ,'', ),
  (, , ,'', ),;