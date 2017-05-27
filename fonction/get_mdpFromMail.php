<?php
function get_password($AdresseMail){
	include'connexion_sql.php';
	$req = $bdd->prepare('SELECT passe FROM admin WHERE adresse_mail = :adresse_mail');
	$req->execute(array(
		':adresse_mail' => $AdresseMail
		));
		$donnees = $req->fetch();
	return $donnees['passe'];
}
?>
