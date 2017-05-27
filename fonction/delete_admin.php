<?php
function delete_admin($Mail){
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM admin WHERE adresse_mail=:adresse_mail');
		$req->execute(array(
			'adresse_mail' => $Mail
	));
	return true;
	}
?>
