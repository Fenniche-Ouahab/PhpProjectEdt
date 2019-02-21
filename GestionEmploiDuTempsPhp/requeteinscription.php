<?php 
$message="";
if ( isset($_POST['nom']) && !empty($_POST['nom']) ){
 }
else {$message= '<p> Veuillez saisir un nom correct . cliquez <a href="pageinscription.html"> ici </a> pour revenir à la page d\'inscription</p>';
		echo $message;}
if ( isset($_POST['prenom']) && !empty($_POST['prenom']) ){
 }
else {$message= '<p> Veuillez saisir un prénom correct . cliquez <a href="pageinscription.html"> ici </a> pour revenir à la page d\'inscription</p>';
		echo $message;}
if ( isset($_POST['mdp']) && !empty($_POST['nom']) ){
 }
else {$message= '<p> Veuillez saisir un mdp correct . cliquez <a href="pageinscription.html"> ici </a> pour revenir à la page d\'inscription</p>';
		echo $message;}
if ( isset($_POST['naissance']) && !empty($_POST['naissance']) ){
 }
else {$message= '<p> Veuillez saisir une date de naissance correct . cliquez <a href="pageinscription.html"> ici </a> pour revenir à la page d\'inscription</p>';
		echo $message;}
if ( isset($_POST['netudiant']) && !empty($_POST['netudiant']) ){
 }
else {$message= '<p> Veuillez saisir un numéro étudiant correct . cliquez <a href="pageinscription.html"> ici </a> pour revenir à la page d\'inscription</p>';
		echo $message;}


?>
