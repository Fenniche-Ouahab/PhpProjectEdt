<?php

if ($db=new PDO("sqlite:edt.db",SQLITE3_OPEN_READWRITE)) {


	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id_prof = $_POST['idprof'];
$nom_prof = $_POST['nom'];
$prenom_prof = $_POST['prenom'];
$mdp = $_POST['mdp'];
$email=$_POST['email'];


$requete = $db->prepare("INSERT INTO prof(id_prof,nom_prof,prenom_prof,mdp,email) VALUES (?,?,?,?,?)");
$requete->execute(array($id_prof,$nom_prof,$prenom_prof,$mdp,$email));
echo "Ajout fait";


}


?>

<html> <button> Retour à la page d'accueil </button></html>

