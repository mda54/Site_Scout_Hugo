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
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssresponsables/responsables.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssresponsables/responsables2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssresponsables/responsables3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssresponsables/responsables4.css" />
  </head>

  <body>
    <?php include("entete.php"); ?>
    <h1>Responsables éditoriaux</h1>

   <div class="responsable">
      <h2>Editeur</h2>
        <p>DALLE Manon<br>
        manond@live.fr<br>
        36 rue de Normandie<br>
        54420 Saulxures-Lès-Nancy<br>
        Tel:0662812451<br>
        </p>

      <h2>Traductions</h2>
        <p>Alexandre CORRE 
        </p>

      <h2>Crédits photos</h2>
        <p>Les photographies sur ce site viennent de: https://pixabay.com/fr/, ou sont produites par les chefs, cheftaines, jeunes faisant partie du groupe ainsi que de certains parents. Les photos ne sont pas libres de droits.<br>
        Pour toute demande de reproduction (graphismes, photos et vidéos) nous contacter : manond@live.fr
        </p>

      <h2>Hébergement</h2>
        <p>Worldline</p>

      <h2>Droits d'auteur - Droits de reproduction</h2>
        <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris les représentations iconographiques et photographiques. La reproduction de tout ou partie de ce site sur un support quel qu'il soit, est formellement interdite sauf autorisation expresse du responsable du site.
        </p>

      <h2>Création de liens vers le site</h2>
        <p>Autorisation de mise en place d’un lien hypertexte pointant vers un contenu, sous réserve de mentionner la source qui pointera grâce à un lien hypertexte directement sur le contenu visé. Les informations utilisées ne doivent l’être qu’à des fins personnelles, associatives ou professionnelles ; toute utilisation à des fins commerciales ou publicitaires est exclue.<br>
        Attention ! Cette autorisation ne s’applique pas aux sites internet diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une plus large mesure porter atteinte à la sensibilité du plus grand nombre.
        </p>
    </div>
  </body>
</html>