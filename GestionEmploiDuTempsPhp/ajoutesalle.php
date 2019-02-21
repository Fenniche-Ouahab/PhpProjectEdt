<html>
<form action="ajoutetudiant.php" method="post"><br />
			<p> Veuillez entrer le nom de la salle ?:<br/>
				<label> </label> <input type="text" name="nomsalle"/> <br/> 
				<br/> <br/>
			
			<p> Veuillez entrer l'id de la salle (le numéro) ?:<br/>
				<label> </label> <input type="text" name="idsalle"/> <br/>  <br/> <br/>
			
			
			
			
				
				
				<input type="submit" value="Ajouter la salle"/> <br/>
			<br/><br/>

<?php
 // var
$nom_salle = $_POST['nomsalle'];

$id_salle = $_POST['idsalle'];





//On prépare la requête
$requete = $bdd->prepare('INSERT INTO salles(id_salle,nom_salle) VALUES(:id_salle,:nom_salle)');
// On lie les variables définie au-dessus au paramètres de la requête préparée
$requete->bindValue(':id_salle', $id_salle, PDO::PARAM_STR);  
$requete->bindValue(':nom_salle', $nom_salle, PDO::PARAM_STR);  


//On exécute la requête
$requete->execute();
?>


</html>
