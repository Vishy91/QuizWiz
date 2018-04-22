--shweta, vaishnavi paswords
INSERT INTO ADMINS
    (username, hashed_password)
VALUES
    ('sbhartia','$2y$10$OTk2OTllMmFjYmI0MzIyMOK7Sf0OLXslCYHFlVoC5Bg1V4Y5u45sO'),
    ('vaishnavim','$2y$10$M2VmNDg0MTkwNzY2NTFlZO0CNYvNBZPcoEsb37uFzdzvXDgjY7Oa6');

INSERT INTO USERS
  (user_firstname, user_lastname, user_email, user_password) 
VALUES
  ('Shweta', 'Bhartia', 'shweta.bhartia93@gmail.com','shwetabh'),
  ('Vaishnavi', 'Mukundhan', 'vaishnavim@gmail.com','vaishnavimu');

INSERT INTO CATEGORIES 
    (category_name)
VALUES
  ('Business'),
  ('Games'),
  ('Geography'),
  ('Lifestyle'),
  ('Movies'),
  ('TV'),
  ('Music'),
  ('Science');

INSERT INTO SUBSCRIPTIONS 
    (subscription_user_id, subscription_category_id)
VALUES
  (1,1),
  (1,4),
  (1,5),
  (1,7);

INSERT INTO TOPICS 
    (topic_name, topic_category_id)
VALUES
  ('Brands', 1),
  ('Tech', 1),
  ('Fashion', 4),
  ('Food', 4),
  ('Shopping', 4),
  ('Drama', 5),
  ('Romantic', 5),
  ('Classic Rock', 7),
  ('Country', 7);

INSERT INTO QUIZZES
  (quiz_title, quiz_topic_id)
VALUES
  ('Brands Quiz 1', 1),
  ('Brands Quiz 2', 1),
  ('Tech Quiz 1', 2),
  ('Tech Quiz 2', 2),
  ('Tech Quiz 3', 2),
  ('Fashion Quiz 1', 3),
  ('Food Quiz 1', 4),
  ('Shopping Quiz 1', 5),
  ('Drama Quiz 1', 6),
  ('Drama Quiz 2', 6),
  ('Romantic Quiz 1', 7),
  ('Classic Rock Quiz 1', 8),
  ('Country Quiz 1', 9);

INSERT INTO QUESTIONS
  (question_text, question_quiz_id)
VALUES
  ('What country manufactures the car brand Lexus?', 1),
  ('What is a slogan for Quiznos?', 1),
  ('Which car company is represent by a trident?', 1),
  ('What mythological animal makes up the logo for Mobil?',1),
  ('What country is responsible for the production of the Tata brand?',1),
  ('What major brand used to go by the name "The Haloid Company"?', 2),
  ('A red and white "T" within a circled star represents what oil retailer?', 2),
  ('What country is responsible for manufacturing Volvos?', 2),
  ('Crocodile can be found on what clothing line?',2),
  ('The Aston martin brand originated in what country?',2),
  ('What was the first name of the game developing company Atari?', 3),
  ('What country promotes its high tech sector as Silicon Polder?', 3),
  ('What year did Facebook debut?', 3),
  ('By what name was Netscape known officially before it became Netscape?',3),
  ('Which American Vice President referred to the Internet as an "Information Super Highway"?',3),
  ('Which of these terms hides the network part of an IP address?', 4),
  ('"Relationship Matter" is the slogan of which social networking site?', 4),
  ('What year was the Nintendo Game Boy released in the US?', 4),
  ('In what year was the compact disk invented?',4),
  ('What was the "beta version" of the Internet called?',4),
  ('How is binary digit more commonly known?', 5),
  ('What search engine started out as "David and Jerry\s Guide to the World Wide Web"?', 5),
  ('Which company published the famous first person shooter game "Quake"?', 5),
  ('Rick Skrenta created Elk Cloner, said to be the first example of what pernicious high-tech phenomenon?',5),
  ('What is the prgram called that searches the database of domain names?',5),
  ('What does the word "vogue" mean?', 6),
  ('Where does the second Fashion Week occur?', 6),
  ('What collection did Cindy Crawford release in 2005?', 6),
  ('Which fashion designer is the founder of an eponymous high-end shoe brand?',6),
  ('Which former model was married to Mick Jagger',6),
  ('Who directed 2002 "Adaptation"?', 9),
  ('Who starred in the original "Cape Fear"?', 9),
  ('Which star of "Amour" is the oldest person to win a BAFTA award?', 9),
  ('In 2013, who became the first man to win three Academy Awards for Best Actor?', 9),
  ('In "The Butler", which media mogul plays Gloria, a maid?', 9),
  ('About which famous naturalist is the 2009 movie entitled "Creation"?', 10),
  ('Who plays Thomas Leroy in "Black Swan"?', 10),
  ('Who plays Nelson Mandela in the 2009 movie about his life entitled "Invictur"?', 10),
  ('What special talent did Molly Ringwald have in "The Breakfast Club"?', 10),
  ('"The Black Swan" deals with which branch of the Arts?', 10);

INSERT INTO QUESTIONOPTIONS
  (questionoption_text, questionoption_question_id, questionoption_is_right)
VALUES
  ('Japan', 1, 1),
  ('India', 1, 0),
  ('China', 1, 0),
  ('United States', 1, 0),
  ('Yumm..', 2, 0),
  ('Ummm...tasty', 2, 0),
  ('Mmmm..toasty', 2, 1),
  ('Yummmyyyy....', 2, 0),
  ('Maserati', 3, 1),
  ('BMW', 3, 0),
  ('Nissan', 3, 0),
  ('Tesla', 3, 0),
  ('Aetos Dios', 4, 0),
  ('Clazomenae Boar', 4, 0),
  ('Nyctimene', 4, 0),
  ('Pegasus', 4, 1),
  ('Japan', 5, 0),
  ('India', 5, 1),
  ('China', 5, 0),
  ('United States', 5, 0),
  ('Xerox', 6, 1),
  ('Rentokil Initial', 6, 0),
  ('Grupo BC', 6, 0),
  ('Mouchel Group', 6, 0),
  ('Tata', 7, 0),
  ('Texaco', 7, 1),
  ('T company', 7, 0),
  ('Shutterstock', 7, 0),
  ('Japan', 8, 0),
  ('United States', 8, 0),
  ('Sweden', 8, 1),
  ('India', 8, 0),
  ('Ralph Lauren', 9, 0),
  ('Louis Philippe', 9, 0),
  ('Tommy Hilfiger', 9, 0),
  ('Lacoste', 9, 1),
  ('United States', 10, 0),
  ('United Kingdom', 10, 1),
  ('China', 10, 0),
  ('Syzygy', 11, 1),
  ('Nintendo', 11, 0),
  ('Netherlands', 12, 1),
  ('China', 12, 0),
  ('2004', 13, 1),
  ('2006', 13, 0),
  ('Mosaic', 14, 1),
  ('AltaVista', 14, 0),
  ('Mike Pence', 15, 0),
  ('Al Gore', 15, 1),
  ('Network prefix', 16, 0),
  ('Subnet mask', 16, 1),
  ('Linkedin', 17, 1),
  ('Facebook', 17, 0),
  ('1990', 18, 1),
  ('1991', 18, 0),
  ('1965', 19, 1),
  ('1967', 19, 0),
  ('ARPAnet', 20, 1),
  ('Internet', 20, 0),
  ('Byte', 21, 0),
  ('Bit', 21, 1),
  ('Yahoo', 22, 1),
  ('Bing', 22, 0),
  ('id software', 23, 1),
  ('Quake', 23, 0),
  ('Virus', 24, 1),
  ('Malware', 24, 0),
  ('WHOIS', 25, 1),
  ('WHO', 25, 0),
  ('In Fashion', 26, 0),
  ('In Style', 26, 1),
  ('London', 27, 1),
  ('Paris', 27, 0),
  ('Furnite and Home', 28, 1),
  ('Clothes', 28, 0),
  ('Stella McCartney', 29, 0),
  ('Manolo Blahnik', 29, 1),
  ('Adriana Lima', 30, 0),
  ('Jerry Hall', 30, 1),
  ('Spike Jonze', 31, 1),
  ('Spike Lee', 31, 0),
  ('James Mitchum', 32, 0),
  ('Robert Mitchum', 32, 1),
  ('Fiona Gordon', 33, 0),
  ('Emmanuella Riva', 33, 1),
  ('Daniel Day-Lewis', 34, 1),
  ('Dustin Hoffman', 34, 0),
  ('Oprah Winfrey', 35, 1),
  ('Anne Cox Chambers', 35, 0),
  ('Spike Jonze', 31, 1),
  ('Spike Lee', 31, 0),
  ('James Mitchum', 32, 0),
  ('Robert Mitchum', 32, 1),
  ('Fiona Gordon', 33, 0),
  ('Emmanuella Riva', 33, 1),
  ('Daniel Day-Lewis', 34, 1),
  ('Dustin Hoffman', 34, 0),
  ('Oprah Winfrey', 35, 1),
  ('Anne Cox Chambers', 35, 0);

INSERT INTO USERQUIZANSWER
  (userquizanswer_user_id, userquizanswer_quiz_id, userquizanswer_won, userquizanswer_answer_time)
VALUES
  (1, 1, 1, ''),
  (2, 2, 1, '');

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