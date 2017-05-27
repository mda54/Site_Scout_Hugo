<?php
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=site_scout;charset=utf8','root','');
}

catch(Exception $e)
{
	die('Erreur :'.$e->getMessage());
}

?>
