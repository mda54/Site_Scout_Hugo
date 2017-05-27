<?php
function get_accueil($langue){
	include'connexion_sql.php';
	$req = $bdd->prepare('SELECT * FROM accueil WHERE langue=:langue');
	$req->execute(array(
		'langue' => $langue
		));
	$donnees = $req->fetch();
	return $donnees['contenue'];
}
?>
