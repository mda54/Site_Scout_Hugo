<!DOCTYPE html>
<?php
if (isset($_POST['formulaire'])) {
  if ($_POST['formulaire']=="farfadets") {
    $to="ronde.saintfiacre@gmail.com";
  }elseif($_POST['formulaire']=="louveteaux"){
    $to="peuplade.saintfiacrepulnoy@gmail.com";
  }elseif($_POST['formulaire']=="scouts"){
    $to="tribu.saintfiacre@gmail.com";
  }elseif($_POST['formulaire']=="pionniers"){
    $to="caravane.saintfiacrepulnoy@gmail.com";
  }elseif($_POST['formulaire']=="compagnons"){
    $to="relais.saintfiacrepulnoy@gmail.com";
  }elseif($_POST['formulaire']=="autre"){
    $to="saintfiacre.pulnoy@gmail.com";
  }
  if (isset($_POST['adresse']) and isset($_POST['zonetext'])) {
      mail($to,"Renseignements pour :".$_POST['adresse'],$_POST['zonetext'],"From: ".$_POST['adresse']." \r\n\r\n");
      $erreur="Mail envoyé";
  }
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Renseignements-Scouts Saint-Fiacre Pulnoy</title>
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssliens/liens.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssliens/liens2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssliens/liens3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssliens/liens4.css" />
  </head>

  <body>
    <?php include("entete.php"); ?>
    <h1>Liens</h1>

    <div class="siteautre">
    <a href="www.sgdf.fr"><img src="images/lien/sgdf.jpg" alt="Scouts et Guides de France"></a>

    <a href="https://www.laboutiqueduscoutisme.com/"><img src="images/lien/laboutiqueduscoutisme.jpg" alt="La boutique du scoutisme"></a>

    <a href="https://www.latoilescoute.net/"><img src="images/lien/latoilescoute.png" alt="LaToileScoute"></a>

     <a href="https://www.scoutconnection.org/"><img src="images/lien/scoutconnection.png" alt="Scouts et Guides de France"></a>
   </div>

  </body>
</html>