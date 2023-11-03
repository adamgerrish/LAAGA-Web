CREATE TABLE IF NOT EXISTS GerrishRounds(
   id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT
  ,Course VARCHAR(30)  NOT NULL
  ,Par INTEGER NOT NULL
  ,Rating FLOAT NOT NULL
  ,Slope FLOAT  NOT NULL
  ,Score INTEGER  NOT NULL
  ,Handicap FLOAT  NOT NULL
);

INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Ambassador", 71, 69.2, 120, 98, 27.12);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Ambassador", 71, 72, 125, 92, 18.08);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Seven Lakes", 71, 69.6, 123, 89, 17.82);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Roseland", 72, 71.8, 126, 92, 18.12);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Rockway", 70, 66.1, 114, 87, 20.72);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Rockway", 70, 66.1, 114, 82, 15.76);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Rockway", 70, 66.1, 114, 85, 18.73);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Rockway", 53, 51.41, 88.67, 75, 30.06);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Rockway", 70, 66.1, 114, 88, 21.71);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Sutton Creek", 72, 71.9, 127, 96, 21.44);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Dominion", 70, 68.3, 113, 91, 22.70);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Coachwood", 70, 70, 130, 80, 8.69);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Doon Valley", 72, 68.2, 109, 95, 27.78);
INSERT INTO GerrishRounds(Course, Par, Rating, Slope, Score, Handicap) VALUES ("Coachwood", 70, 70, 130, 102, 27.82);
