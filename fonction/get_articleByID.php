<?php
function get_articleByID(){
	include'connexion_sql.php';
	$req = $bdd->prepare('SELECT * FROM article');
	$req->execute();
	$donnees = $req->fetchAll();
	return $donnees;
}
?>
