<html>
<form action="ajoutetudiant.php" method="post"><br />
			<p> Veuillez entrer le nom du professeur ?:<br/>
				<label> </label> <input type="text" name="nom"/> <br/> 
				<br/> <br/>
			
			<p> Veuillez entrer le prénom du professeur ?:<br/>
				<label> </label> <input type="text" name="prenom"/> <br/>  <br/> <br/>
			
			<p> Quelle est l'id du professeur (numéro) ?:<br/>
				<label> </label> <input type="text" name="idprof"/> <br/>  <br/> <br/>
				
			<p> Quelle est le mot de passe du professeur?:<br/>
				<label> </label> <input type="password" name="mdp"/> <br/>  <br/> <br/>
			
			<p> Quelle est l'email du professeur ( futur login) ?:<br/>
				<label> </label> <input type="text" name="email"/> <br/>  <br/> <br/>
			
			
				
				
				<input type="submit" value="inscrire"/> <br/>
			<br/><br/>

<?php
 // var
$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$mdp = $_POST['mdp'];

$email = $_POST['email'];

$id_prof= $_POST['idprof'];



//On prépare la requête
$requete = $bdd->prepare('INSERT INTO prof(id_prof, nom, prenom, mdp, email) VALUES(:id_prof,:nom,:prenom,:mdp,:email)');
// On lie les variables définie au-dessus au paramètres de la requête préparée
$requete->bindValue(':id_prof', $id_prof, PDO::PARAM_STR);  
$requete->bindValue(':nom', $nom, PDO::PARAM_STR);  
$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
$requete->bindValue(':email', $email, PDO::PARAM_STR);

//On exécute la requête
$requete->execute();

?>


</html>
