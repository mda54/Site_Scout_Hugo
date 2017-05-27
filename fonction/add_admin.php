<?php
function add_admin($Mail,$Passe){
	$Mail=htmlspecialchars($Mail);
	$Passe=htmlspecialchars($Passe);
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO admin(adresse_mail,passe)
		VALUES(:adresse_mail,:passe)');
$req->execute(array(
	'adresse_mail' => $Mail,
	'passe' => $Passe
	));
}
?>
