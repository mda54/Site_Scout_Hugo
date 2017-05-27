<?php
function delete_article($Id,$categorie){
	$Id=(int)$Id;
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM article WHERE id =:Id AND categorie=:categorie');
		$req->execute(array(
			'Id' => $Id,
			'categorie' => $categorie
	));
	return true;
	}
?>
