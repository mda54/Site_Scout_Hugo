<?php
function delete_article($Id){
	$Id=(int)$Id;
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM article WHERE id =:Id');
		$req->execute(array(
			'Id' => $Id
	));
	}
?>
