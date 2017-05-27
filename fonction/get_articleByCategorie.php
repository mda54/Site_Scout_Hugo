<?php
function get_articleByCategorie($categorie){
	include'connexion_sql.php';
	$req = $bdd->prepare('SELECT contenue,id FROM article WHERE categorie = :categorie' );
	$req->execute(array(
		':categorie' => $categorie
		));
		$donnees = $req->fetchAll();
	return $donnees;
}
function get_allArticle(){
	include'connexion_sql.php';
	$req = $bdd->prepare('SELECT contenue,id FROM article' );
	$req->execute();
		$donnees = $req->fetchAll();
	return $donnees;
}
?>
