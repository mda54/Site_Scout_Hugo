<?php
function modif_Accueil($langue,$contenue){
	$contenue=htmlspecialchars($contenue);
	include'connexion_sql.php';
	$req = $bdd->prepare('UPDATE accueil SET contenue = :contenue WHERE langue =:langue');
	$req->execute(array(
		'contenue' => $contenue));
}
?>
