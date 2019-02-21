<html>
<form action="ajoutetudiant.php" method="post"><br />
			<p> Veuillez entrer le nom de l'étudiant ?:<br/>
				<label> </label> <input type="text" name="nom"/> <br/> 
				<br/> <br/>
			
			<p> Veuillez entrer le prénom de l'étudiant ?:<br/>
				<label> </label> <input type="text" name="prenom"/> <br/>  <br/> <br/>
			
			<p> Quelle est l'id de l'étudiant (numéro) ?:<br/>
				<label> </label> <input type="text" name="idetu"/> <br/>  <br/> <br/>
				
			<p> Quelle est le mot de passe de l'étudiant ?:<br/>
				<label> </label> <input type="password" name="mdp"/> <br/>  <br/> <br/>
			
			<p> Quelle est l'email de l'étudiant ( futur login) ?:<br/>
				<label> </label> <input type="text" name="email"/> <br/>  <br/> <br/>
			
			<p> Quelle est la filière  de l'étudiant?:<br/>
				<label> </label> <select type="text" name="filiere"/> <option> Maths </option> <option>Info</option> <option>SVT</option> <option>Chimie
				</option> <option>Physique</option> 
				<br/>  <br/> <br/> </select>
				
				
			<p> Quelle est l'année d'étude de l'étudiant ?:<br/>
				<label> </label> <select type="text" name="promo"/> <option> L1 </option> <option>L2</option> <option>L3</option> <option>M1</option> <option>M2</option> </select>
				<br/>  <br/> <br/>	
				
				
				<input type="submit" value="S'inscrire"/> <br/>
			<br/><br/>

<? php
 // var
$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$mdp = $_POST['mdp'];

$email = $_POST['email'];

$id= $_POST['idetu'];

$filiere = $_POST['filiere'];

$promo = $_POST['promo'];


//On prépare la requête
$requete = $bdd->prepare('INSERT INTO etudiant(id, nom, prenom, mdp, email,id_promo) VALUES(:id,:nom,:prenom,:mdp,:email,:id_promo)');
// On lie les variables définie au-dessus au paramètres de la requête préparée
$requete->bindValue(':id', $id, PDO::PARAM_STR);  
$requete->bindValue(':nom', $nom, PDO::PARAM_STR);  
$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
$requete->bindValue(':email', $email, PDO::PARAM_STR);
$requete->bindValue(':id_promo', $promo, PDO::PARAM_STR);
//On exécute la requête
$requete->execute();
?>


</html>


