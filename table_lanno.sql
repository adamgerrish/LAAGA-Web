CREATE TABLE IF NOT EXISTS LannoRounds(
   id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT
  ,Course VARCHAR(30)  NOT NULL
  ,Par INTEGER NOT NULL
  ,Rating FLOAT NOT NULL
  ,Slope FLOAT  NOT NULL
  ,Score INTEGER  NOT NULL
  ,Handicap FLOAT  NOT NULL
);

INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Roseland", 72, 71.8, 126, 114, 37.85);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Seven Lakes", 35, 34.8, 61.5, 52, 31.60);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Ambassador", 71, 72, 125, 112, 36.16);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Ambassador", 71, 69.2, 120, 106, 34.65);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Otsego Tribute", 72, 71, 125, 115, 39.78);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Otsego Classic", 72, 69, 119, 114, 42.73);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Saginaw Valley", 72, 71.8, 121, 104, 30.07);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Sutton Creek", 72, 71.9, 127, 101, 25.89);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Ambassador", 71, 72, 125, 99, 24.41);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Belleview", 72, 70.1, 119, 99, 27.44);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Ambassador", 71, 72, 125, 104, 28.93);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Pointe West", 72, 69.7, 130, 89, 16.78);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Sutton Creek", 72, 71.9, 127, 101, 25.89);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Dominion", 70, 68.3, 113, 102, 33.70);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Coachwood", 70, 70, 130, 94, 20.86);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Coachwood", 70, 70, 130, 97, 23.47);
INSERT INTO LannoRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Seven Lakes", 71, 69.6, 123, 113, 39.87);
