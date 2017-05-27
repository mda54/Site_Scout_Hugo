<?php
function modif_Accueil($langue,$contenue){
	include'connexion_sql.php';
	$req = $bdd->prepare('UPDATE accueil SET contenue = :contenue WHERE langue =:langue');
	$req->execute(array(
		'langue' =>$langue,
		'contenue' => $contenue));
}
?>
