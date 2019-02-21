#------------------------------------------------------------
#        Script SQLite  
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Administrateur
#------------------------------------------------------------
CREATE TABLE Administrateur(
	id_admin      INTEGER autoincrement NOT NULL ,
	nom_admin     TEXT ,
	prenom_admin  TEXT ,
	email_admin   TEXT ,
	mdp_admin     TEXT ,
	PRIMARY KEY (id_admin)
);

--<?php
--$pdo->query("CREATE TABLE IF NOT EXISTS Administrateur (
  --  id            INTEGER         PRIMARY KEY AUTOINCREMENT,
  --  titre         VARCHAR( 250 ),
  --  created       DATETIME
--);");
--?>
--<?php
--$stmt = $pdo->prepare("INSERT INTO posts (titre, created) VALUES (:titre, :created)");
--$result = $stmt->execute(array(
--    'titre'         => "Lorem ipsum",
--    'created'       => date("Y-m-d H:i:s")
--));
--?>

--<?php
--$stmt = $pdo->prepare("SELECT * FROM posts WHERE titre = :titre");
--$stmt->execute(array('titre' => 'Lorem ipsum'));
--$result = $stmt->fetchAll();
--print_r($result);
--?>
#------------------------------------------------------------
# Table: Cours
#------------------------------------------------------------
CREATE TABLE Cours(
	id_cour   INTEGER autoincrement NOT NULL ,
	nom_cour  TEXT ,
	PRIMARY KEY (id_cour)
);


#------------------------------------------------------------
# Table: Promotion
#------------------------------------------------------------
CREATE TABLE Promotion(
	id_promotion  INTEGER autoincrement NOT NULL ,
	PRIMARY KEY (id_promotion)
);


#------------------------------------------------------------
# Table: Creneau
#------------------------------------------------------------
CREATE TABLE Creneau(
	id_creneau     INTEGER autoincrement NOT NULL ,
	dates          NUMERIC ,
	hr_debut_cren  NUMERIC ,
	hr_fin_cren    NUMERIC ,
	PRIMARY KEY (id_creneau)
);


#------------------------------------------------------------
# Table: Salles
#------------------------------------------------------------
CREATE TABLE Salles(
	id_salle   INTEGER autoincrement NOT NULL ,
	capacite   INTEGER ,
	nom_salle  TEXT ,
	PRIMARY KEY (id_salle)
);


#------------------------------------------------------------
# Table: Enseignants
#------------------------------------------------------------
CREATE TABLE Enseignants(
	id_enseignant      INTEGER autoincrement NOT NULL ,
	nom_enseignant     TEXT ,
	prenom_enseignant  TEXT ,
	mail_enseignant    TEXT ,
	mdp_enseignant     TEXT ,
	PRIMARY KEY (id_enseignant)
);


#------------------------------------------------------------
# Table: _Etudiants
#------------------------------------------------------------
CREATE TABLE _Etudiants(
	id_etudiant      INTEGER autoincrement NOT NULL ,
	nom_etudiant     TEXT ,
	prenom_etudiant  TEXT ,
	numero_etudiant  INTEGER ,
	date_naissance   NUMERIC ,
	niveau           TEXT ,
	mail_etudiant    TEXT ,
	mdp_etudiant     TEXT ,
	PRIMARY KEY (id_etudiant)
);


#------------------------------------------------------------
# Table: Departement
#------------------------------------------------------------
CREATE TABLE Departement(
	id_departement   INTEGER autoincrement NOT NULL ,
	nom_departement  TEXT ,
	PRIMARY KEY (id_departement)
);


#------------------------------------------------------------
# Table: ajouter
#------------------------------------------------------------
CREATE TABLE ajouter(
	id_enseignant  INTEGER NOT NULL ,
	id_admin       INTEGER NOT NULL ,
	id_etudiant    INTEGER NOT NULL ,
	PRIMARY KEY (id_enseignant,id_admin,id_etudiant) ,
	
	FOREIGN KEY (id_enseignant) REFERENCES Enseignants(id_enseignant),
	FOREIGN KEY (id_admin) REFERENCES Administrateur(id_admin),
	FOREIGN KEY (id_etudiant) REFERENCES _Etudiants(id_etudiant)
);


#------------------------------------------------------------
# Table: appartenir
#------------------------------------------------------------
CREATE TABLE appartenir(
	id_creneau  INTEGER NOT NULL ,
	id_cour     INTEGER NOT NULL ,
	PRIMARY KEY (id_creneau,id_cour) ,
	
	FOREIGN KEY (id_creneau) REFERENCES Creneau(id_creneau),
	FOREIGN KEY (id_cour) REFERENCES Cours(id_cour)
);


#------------------------------------------------------------
# Table: integrer
#------------------------------------------------------------
CREATE TABLE integrer(
	id_promotion  INTEGER NOT NULL ,
	id_etudiant   INTEGER NOT NULL ,
	PRIMARY KEY (id_promotion,id_etudiant) ,
	
	FOREIGN KEY (id_promotion) REFERENCES Promotion(id_promotion),
	FOREIGN KEY (id_etudiant) REFERENCES _Etudiants(id_etudiant)
);


#------------------------------------------------------------
# Table: enseigner
#------------------------------------------------------------
CREATE TABLE enseigner(
	id_enseignant  INTEGER NOT NULL ,
	id_cour        INTEGER NOT NULL ,
	PRIMARY KEY (id_enseignant,id_cour) ,
	
	FOREIGN KEY (id_enseignant) REFERENCES Enseignants(id_enseignant),
	FOREIGN KEY (id_cour) REFERENCES Cours(id_cour)
);


#------------------------------------------------------------
# Table: posseder
#------------------------------------------------------------
CREATE TABLE posseder(
	id_promotion    INTEGER NOT NULL ,
	id_departement  INTEGER NOT NULL ,
	PRIMARY KEY (id_promotion,id_departement) ,
	
	FOREIGN KEY (id_promotion) REFERENCES Promotion(id_promotion),
	FOREIGN KEY (id_departement) REFERENCES Departement(id_departement)
);


#------------------------------------------------------------
# Table: gerer
#------------------------------------------------------------
CREATE TABLE gerer(
	id_admin    INTEGER NOT NULL ,
	id_creneau  INTEGER NOT NULL ,
	PRIMARY KEY (id_admin,id_creneau) ,
	
	FOREIGN KEY (id_admin) REFERENCES Administrateur(id_admin),
	FOREIGN KEY (id_creneau) REFERENCES Creneau(id_creneau)
);


#------------------------------------------------------------
# Table: creer
#------------------------------------------------------------
CREATE TABLE creer(
	id_admin  INTEGER NOT NULL ,
	id_salle  INTEGER NOT NULL ,
	PRIMARY KEY (id_admin,id_salle) ,
	
	FOREIGN KEY (id_admin) REFERENCES Administrateur(id_admin),
	FOREIGN KEY (id_salle) REFERENCES Salles(id_salle)
);


// On prépare la requête
$req = $db_handle->prepare('INSERT INTO Administrateur ( id_admin, nom_admin ,prenom_admin , email_admin , mdp_admin ) VALUES ("admin", "admin","admin@admin.com" , "admin")');

// On l’éxécute.
$req->execute(array($variable1, $variable2));
