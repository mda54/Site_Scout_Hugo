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
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssrenseignement/renseignement.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssrenseignement/renseignement2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssrenseignement/renseignement3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssrenseignement/renseignement4.css" />
  </head>

  <body>
    <?php include("entete.php"); ?>

    <div class="description">
      <h1><?php echo Renseignements_generaux; ?></h1>
    </div>

    <div class="page">
  <!--Zone mail-->
      <form method=post action="renseignement.php">
        <fieldset class="formulaire">
          <legend><?php echo Envoi_mail; ?></legend>
          <?php
          if (isset($erreur)){
            echo $erreur;
          } ?>
          <p>
            <input type="radio" name="formulaire" value="farfadets"/><label for="farfadets">Farfadets</label>
            <input type="radio" name="formulaire" value="louveteaux"/><label for="louveteaux">Louveteaux</label>
            <input type="radio" name="formulaire" value="scouts"/><label for="scouts">Scouts</label>
            <input type="radio" name="formulaire"value="pionniers"/><label for="pionniers">Pionniers</label>
            <input type="radio" name="formulaire" value="compagnons"/><label for="compagnons">Compagnons</label>
            <input type="radio" name="formulaire" value="autre"/><label for="autre">Autre</label>
          </p>

          <label><?php echo Indiquer_mail; ?></label><br>

          <input class="text" name="adresse" type="mail" size=30><br>
            <label><?php echo Ecrire_message; ?></label><br>
            <textarea class="text" id="zonemail" name="zonetext"></textarea><br>
            <p class="phrasecharte"><?php echo Chartemessage; ?><?php echo Charte; ?>
              <a class="charte" href="chartefr.html" target="conditions" onclick="window.open(this.href,this.target);return false;">Fr</a><em>/</em><a class="charte" href="charteen.html" target="conditions" onclick="window.open(this.href,this.target);return false;">En</a><br>
            </p>

          <input class="button" type=submit value='<?php echo Envoyer ?>'>

        </fieldset>
      </form>
    </div>

  </body>

</html>
