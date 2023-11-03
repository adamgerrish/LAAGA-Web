CREATE TABLE IF NOT EXISTS GuarasciRounds(
   id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT
  ,Course VARCHAR(30)  NOT NULL
  ,Par INTEGER NOT NULL
  ,Rating FLOAT NOT NULL
  ,Slope FLOAT  NOT NULL
  ,Score INTEGER  NOT NULL
  ,Handicap FLOAT  NOT NULL
);

INSERT INTO GuarasciRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Otsego Tribute", 72, 71, 125, 142, 64.18);
INSERT INTO GuarasciRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Otsego Classic", 72, 69, 119, 124, 52.23);
INSERT INTO GuarasciRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Saginaw Valley", 72, 71.8, 121, 127, 51.55);
INSERT INTO GuarasciRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Roseland", 72, 71.8, 126, 128, 50.40);
INSERT INTO GuarasciRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Coachwood", 70, 70, 130, 124, 46.94);
