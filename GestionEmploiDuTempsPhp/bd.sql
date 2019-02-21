Create Table if NOT EXISTS departement (
	id_dep INTEGER PRIMARY KEY ,
	nom_dep TEXT NOT NULL
	);

Create Table if NOT EXISTS promotion ( 
	id_promo INTEGER PRIMARY KEY ,
	libelle_promo TEXT NOT NULL,
	id_dep INTEGER NOT NULL,
	FOREIGN KEY ( 'id_dep' ) REFERENCES 'departement' ( 'id_dep' ) );

Create table if NOT EXISTS etudiant ( 
	id_etudiant INTEGER PRIMARY KEY ,
	nom_etudiant varchar(30),
	prenom_etudiant varchar(30),
	mdp TEXT NOT NULL,
	Email TEXT NOT NULL,
	id_promo INTEGER NOT NULL,
	FOREIGN KEY ( 'id_promo') REFERENCES 'promotion' ( 'id_promo') ON UPDATE CASCADE
	);
	
	
Create table if NOT EXISTS prof ( 
	id_prof INTEGER PRIMARY KEY NOT NULL,
	nom_prof varchar(30),
	prenom_prof varchar(30),
	mdp TEXT NOT NULL,
	Email TEXT NOT NULL
	);


Create table if NOT EXISTS admins ( 
	id_admin INTEGER PRIMARY KEY NOT NULL,
	nom_admin varchar(30),
	prenom_admin varchar(30),
	mdp TEXT NOT NULL,
	Email TEXT NOT NULL
	);
	

	
Create Table if NOT EXISTS  matiere ( 
	id_matiere INTEGER PRIMARY KEY NOT NULL,
	nom_matiere TEXT NOT NULL
	);
	
Create table if not EXISTS salles (
	id_salle INTEGER PRIMARY KEY NOT NULL,
	nom_salle TEXT NOT NULL
	);
	
Create table if not EXISTS creneaux (
	id_creneaux INTEGER PRIMARY KEY NOT NULL,
	id_matiere INTEGER NOT NULL,
	id_salle INTEGER NOT NULL,
	id_promo INTEGER NOT NULL,
	id_dep INTEGER NOT NULL,
	date_creneau TEXT NOT NULL Check('date_creneau'='Lundi' or 'date_creneau'='Mardi' or 'date_creneau'='Mercredi' or 'date_creneau'='Jeudi' or 'date_creneau'='Vendredi'),
	heure_debut TIME NOT NULL,
	heure_fin TIME NOT NULL,
	
	FOREIGN KEY (id_dep) REFERENCES departement (id_dep) ON UPDATE CASCADE
	FOREIGN KEY (id_promo) REFERENCES promotion (id_promo) ON UPDATE CASCADE
	FOREIGN KEY (id_salle) REFERENCES salles (id_salle) ON UPDATE CASCADE
	FOREIGN KEY (id_matiere) REFERENCES matiere (id_matiere) ON UPDATE CASCADE
	);


--insert into 'admins' VALUES (12,'Reiprich','Benjamin','benji','benji@gmail.com');
insert into 'etudiant' VALUES (20120999,'Hill','Benny','bennyhil123','bennyhill@gmail.com',5);
	
	
	
	
