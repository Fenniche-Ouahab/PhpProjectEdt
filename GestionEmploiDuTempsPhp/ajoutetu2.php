
<?php

try ($db=new PDO("sqlite:edt.db",SQLITE3_OPEN_READWRITE)) {


	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id_etudiant = 4;
$nom_etudiant = "Fennhe";
$prenom_etudiant = "Ouhab";
$mdp = "ouahb26";
$email="ouahab@gmail.com";
$id_promo=5;

$requete = $db->prepare("INSERT INTO etudiant(id_etudiant,nom_etudiant,prenom_etudiant,mdp,email,id_promo) VALUES (?,?,?,?,?,?)");
$requete->execute(array($id_etudiant,$nom_etudiant,$prenom_etudiant,$mdp,$email,$id_promo));
echo "Ajout fait";


}


?>

<html> <button> Retour à la page d'accueil </button></html>
