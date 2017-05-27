<?php
function get_articleByCategorie($categorie,$langue){
	include'connexion_sql.php';
	$req = $bdd->prepare('SELECT contenue FROM article WHERE categorie = :categorie AND langue= :langue' );
	$req->execute(array(
		':categorie' => $categorie
		));
		$donnees = $req->fetch();
	return $donnees['contenue'];
}
?>
