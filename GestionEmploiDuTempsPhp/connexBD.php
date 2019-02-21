<?php
 
  try {
    /**************************************
    * Creer la base de données  et                 *
    * ouvrir les connexions                   *
    **************************************/
 
    // Creation (et connexion à)  SQLite database in file
    $file_db = new PDO('sqlite:.ht.EDT.sqlite3');
   
    /**************************************
    * Creation des  tables                       *
    **************************************/
 
    // Creation de la  table cours
    $file_db->exec("CREATE TABLE IF NOT EXISTS cours (
                    code_cour   INTEGER PRIMARY KEY NOT NULL AUTOINCREMENT, 
                    nom_cour VARCHAR(30)"
                    );
                    
	// Creation de la  table enseignants
	$file_db->exec("CREATE TABLE IF NOT EXISTS enseignants (
                    id_enseignant  INTEGER PRIMARY KEY NOT NULL , 
                    nom_enseignant VARCHAR(30),
                    prenom_enseignant VARCHAR(30)");
                    
	// Creation de la  table etudiants
	$file_db->exec("CREATE TABLE IF NOT EXISTS etudiants (
                    num_etudiant  INTEGER PRIMARY KEY NOT NULL , 
                    nom_etudiant VARCHAR(30),
                    prenom_etudiant VARCHAR(30),
                    niv_etud set('L1','L2','L3','M1','M2')");
     
     // Creation de la  table creneaux
	$file_db->exec("CREATE TABLE IF NOT EXISTS creaneaux (
                    date  DATE PRIMARY KEY NOT NULL AUTOINCREMENT,
                    type set('Cours','TD','TP'), 
                    hr_debut_crn DATE,
                    hr_fin_crn DATE");
                    
  	// Creation de la  table classes
	$file_db->exec("CREATE TABLE IF NOT EXISTS classes (
                    num_salle  INTEGER PRIMARY KEY NOT NULL  ");
    
    // Creation de la  table edt (emplois_du_temps)
	$file_db->exec("CREATE TABLE IF NOT EXISTS edt (
                    num_edt  INTEGER PRIMARY KEY NOT NULL,
                    hr_debut_edt DATE,
                    hr_fin_edt DATE");
                    
                                    
   //creation de la relation "appartenir" entre l'EDT et le cour                
	$file_db->exec("CREATE TABLE IF NOT EXISTS appartenir (
                    code_cour  INTEGER FOREIGN KEY, 
					num_edt INTEGER FOREIGN KEY");

     
                                   
    //creation de la relation "enseigne" entre l'enseignant et le cour                
	$file_db->exec("CREATE TABLE IF NOT EXISTS enseigne (
                    code_cour  INTEGER FOREIGN KEY, 
					id_esenignant INTEGER FOREIGN KEY");

 
    $file_db = null;
   
  }
  catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }
?>
