DROP TABLE INFO,
DROP TABLE STRUCTURES,
DROP TABLE FORMATION,
DROP TABLE COMPETENCE,
DROP TABLE XP,
DROP TABLE CENTREINTERETS,
DROP TABLE COMPETENCE_FORMATION,
DROP TABLE COMPETENCE_XP,

CREATE TABLE IF NOT EXISTS INFO(
ID INTEGER NOT NULL AUTO_INCREMENT,
NOM VARCHAR(40) NOT NULL,
PRENOM VARCHAR(40) NOT NULL,
MAIL VARCHAR(50) NOT NULL,
TELEPHONE DECIMAL NOT NULL,
TYPEPERMIS VARCHAR (30) NOT NULL,
PRIMARY KEY(id)
)ENGINE = INNODB

INSERT INTO INFO(NOM,PRENOM,AGE,EMAIL,TYPEPERMIS) VALUES ('TERVILLE','Arthur','20','arthur.terville@gmail.com','Permis B');

CREATE TABLE IF NOT EXISTS STRUCTURES(
ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
NOM VARCHAR(40) NOT NULL,
VILLE VARCHAR(40) NOT NULL,
CODEPOSTAL DECIMAL NOT NULL,
PRIMARY KEY(id)
)ENGINE = INNODB;

INSERT INTO STRUCTURES(NOM,VILLE,CODEPOSTAL) VALUES ('Lycée Juliette Récamier','Lyon','69');
INSERT INTO STRUCTURES(NOM,VILLE,CODEPOSTAL) VALUES ('YNOV LYON CAMPUS','Lyon','69');
INSERT INTO STRUCTURES(NOM,VILLE,CODEPOSTAL) VALUES ('Collège Jean Monnet','Lyon','69');
INSERT INTO STRUCTURES(NOM,VILLE,CODEPOSTAL) VALUES ('Université Claude Bernard Lyon 1','Lyon','69');


CREATE TABLE IF NOT EXISTS FORMATION(
ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
DATEDEBUT DATE NOT NULL,
DATEFIN DATE NOT NULL,
DIPLOME VARCHAR(100),
NIVEAU VARCHAR(100),
IDSTRUCTURES INTEGER UNSIGNED NOT NULL,
PRIMARY KEY(id)
)ENGINE = InnoDB;

(SELECT STRUCTURES.ID
   FROM STRUCTURES
   WHERE ID = '2'

INSERT INTO FORMATION(IDSTRUCTURES,DATEDEBUT,DATEFIN,DIPLOME,NIVEAU) VALUES ('2014-09/01','2017-06/30','BAC S','LYCEE');
);

(SELECT STRUCTURES.ID
   FROM STRUCTURES
   WHERE ID = '5'

INSERT INTO FORMATION(IDSTRUCTURES,DATEDEBUT,DATEFIN,DIPLOME,NIVEAU) VALUES ('2018-09/17','2019-07/09','BACHELOR','BAC+1');
);


CREATE TABLE IF NOT EXISTS COMPETENCE(
ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
NOM VARCHAR(40) NOT NULL,
NIVEAU VARCHAR(40) NOT NULL,
DOMAINE VARCHAR(50) NOT NULL,
IDINFO INTEGER UNSIGNED NOT NULL,
PRIMARY KEY(id)
)ENGINE = INNODB;

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'

INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('HTML','60/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'

INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('CSS','60/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'

INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('JAVASCRIPT','50/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'

INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('PHP','70/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('C','75/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('PYTHON','65/100');
);

 (SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('Autonomie','75/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('Gestion du stress','85/100');
);

   (SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('Adaptabilité','80/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('Travail de groupe','70/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'
   
INSERT INTO COMPETENCE (IDINFO,NOM,NIVEAU) VALUES ('Communication','80/100');
);

(SELECT INFO.ID
   FROM INFO
   WHERE ID = '1'   
   
CREATE TABLE IF NOT EXISTS XP(
ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
NOM VARCHAR(50) NOT NULL,
DATEDEBUT DATE,
DUREEJOUR DECIMAL NOT NULL,
IDSTRUCTURES INTEGER UNSIGNED NOT NULL,
PRIMARY KEY(id)
)ENGINE = INNODB;

  (SELECT STRUCTURES.ID
   FROM STRUCTURES
   WHERE ID = '1'

INSERT INTO XP(IDSTRUCTURES,NOM,DATEDEBUT,DUREEJOUR) VALUES ('INTERIM ALPEMPLOI','2017-06/30','75');
);

(SELECT STRUCTURES.ID
   FROM STRUCTURES
   WHERE ID = '1'

CREATE TABLE IF NOT EXISTS CENTREINTERETS(
ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
NOM VARCHAR(60) NOT NULL,
IDINFO INTEGER UNSIGNED NOT NULL,
PRIMARY KEY(id)
)ENGINE = INNODB;

INSERT INTO STRUCTURES(NOM) VALUES ('VOLLEYBALL');
INSERT INTO STRUCTURES(NOM) VALUES ('CINEMA');
INSERT INTO STRUCTURES(NOM) VALUES ('INFORMATIQUE');


CREATE TABLE IF NOT EXISTS FORMULAIRE(
ID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
NOM VARCHAR(50) NOT NULL,
PRENOM VARCHAR(50) NOT NULL,
MAIL VARCHAR(50) NOT NULL,
TEXTE VARCHAR(250) NOT NULL
)ENGINE = INNODB;


CREATE TABLE IF NOT EXISTS COMPETENCE_FORMATION(
IDCOMPETENCE INTEGER UNSIGNED NOT NULL,
IDFORMATION INTEGER UNSIGNED NOT NULL
)ENGINE = INNODB;


CREATE TABLE IF NOT EXISTS COMPETENCE_XP(
IDXP INTEGER UNSIGNED NOT NULL,
IDCOMPETENCE INTEGER UNSIGNED NOT NULL
)ENGINE = INNODB;









