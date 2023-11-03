CREATE TABLE IF NOT EXISTS CharetteRounds(
   id INTEGER NOT NULL PRIMARY KEY 
  ,Course VARCHAR(30)  NOT NULL
  ,Par INTEGER NOT NULL
  ,Rating FLOAT NOT NULL
  ,Slope FLOAT  NOT NULL
  ,Score INTEGER  NOT NULL
  ,Handicap FLOAT  NOT NULL
);

/*
ORCHARD
9 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Orchard View",36,34.8,62.5,48,23.87);
18 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Orchard View",72,70.1,125,102,28.84);

AMBASSADOR
18 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Ambassador",71,69.2,120,96,25.24);

SEVEN LAKES
9 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Seven Lakes",36,34.8,61.5,46,20.58);
18 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Seven Lakes",71,69.6,123,97,25.17);

COACHWOOD
9 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Coachwood",35,34.5,64,54,34.43);
18 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Coachwood",70,70,130,97,23.47);

SUTTON
18 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Sutton Creek",72,71.9,127,104,28.56);

ROSELAND
18 INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Roseland",72,69.8,124,85,13.85);
*/

INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Ostego Tribute",72,71,125,103,28.93);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Ostego Classic",72,69,119,134,61.72);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Saginaw Valley",72,71.8,121,115,40.34);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Dominion",70,68.3,113,95,26.70);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Seven Lakes",36,34.8,61.5,54,35.28);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Ambassador",71,72,125,103,28.02);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Coachwood",35,34.5,64,44,16.77);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Seven Lakes",36,34.8,61.5,47,22.42);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Coachwood",70,70,130,93,19.99);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Sutton Creek",72,71.9,127,88,14.33);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Dominion",70,68.3,113,96,27.70);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Coachwood",70,70,130,95,21.73);
INSERT INTO CharetteRounds(Course,Par,Rating,Slope,Score,Handicap) VALUES ("Coachwood",70,70,130,87,14.78);