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
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/csscredits/credits.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/csscredits/credits2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/csscredits/credits3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/csscredits/credits4.css" />
  </head>

  <body>
    <?php include("entete.php");
    if (isset($_SESSION['langue']) and $_SESSION['langue']=="en") {
      ?>
    <h1>Crédits</h1>

   <div class="credits">

      <h2>Photo credit</h2>
        <p>The photos come only from a website: https://pixabay.com/fr/, or were taken by chiefs and theirs relatives or other members. The photos aren't rigthfree.<br>
        For any need of reporduction contact us : manond@live.fr
        </p>

      <h2>Article credit</h2>
        <p>All article are written by member of the Scout group</p>

      <h2>Copyright</h2>
        <p>The website is under french and international legislasion about copyright. All right reserved. Total or patial copy of the website is totaly prohibited without the autorisation of the website owner.
          </p>

    </div>
    <?php }else { ?>
      <h1>Crédits</h1>

     <div class="credits">

        <h2>Crédits photos</h2>
          <p>Les photographies sur ce site viennent de: https://pixabay.com/fr/, ou sont produites par les chefs, cheftaines, jeunes faisant partie du groupe ainsi que de certains parents. Les photos ne sont pas libres de droits.<br>
          Pour toute demande de reproduction (graphismes, photos et vidéos) nous contacter : manond@live.fr
          </p>

        <h2>Crédits articles</h2>
          <p>Tous les articles de ce site sont écris parles chefs, cheftaines et jeunes du groupes. </p>

        <h2>Droits d'auteur - Droits de reproduction</h2>
          <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris les représentations iconographiques et photographiques. La reproduction de tout ou partie de ce site sur un support quel qu'il soit, est formellement interdite sauf autorisation expresse du responsable du site.
          </p>

      </div>
    <?php } ?>
  </body>
</html>
