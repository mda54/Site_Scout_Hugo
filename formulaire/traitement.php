<?php
function envoi_mail1($to,$objet,$message,$headers){
/*
$zonetext = $_POST['zonetext'];
$adresse = $_POST['adresse'];

$message = "$zonetext";

$to = 'manond@live.fr';
$objet = "Renseignements"; //Met l'objet que tu veux

/* En-têtes de l'e-mail */
/*
$headers = "From: $adresse \r\n\r\n";
  
/* Envoi de l'e-mail */
//mail($to, $objet, $message, $headers);
}

if ($_POST['formulaire']=="farfadets") {
	$to="ronde.saintfiacre@gmail.com";
	echo $to;
}elseif($_POST['formulaire']=="louveteaux"){
	$to="peuplade.saintfiacrepulnoy@gmail.com";
	echo $to;
}elseif($_POST['formulaire']=="scouts"){
	$to="tribu.saintfiacre@gmail.com";
	echo $to;
}elseif($_POST['formulaire']=="pionniers"){
	$to="caravane.saintfiacrepulnoy@gmail.com";
	echo $to;
}elseif($_POST['formulaire']=="compagnons"){
	$to="relais.saintfiacrepulnoy@gmail.com";
	echo $to;
}elseif($_POST['formulaire']=="autre"){
	$to="saintfiacre.pulnoy@gmail.com";
	echo $to;
}//envoi_mail1($_POST['adresse'],"Renseignements pour ".$_POST['adresse'],$_POST['zonetext'],"From: ".$_POST['adresse']." \r\n\r\n");

echo "valeur".$_POST['formulaire'];
?>
Success
