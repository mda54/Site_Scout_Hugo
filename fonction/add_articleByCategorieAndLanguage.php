<?php
function add_articleByCategorieAndLanguage($contenue,$categorie,$langue){
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO article(contenue,categorie,langue) VALUES(:contenue,:categorie,:langue)');
			$req->execute(array(
		':contenue' => $contenue,
		':categorie' => $categorie,
		':langue' => $langue
		)
	);
}
?>
