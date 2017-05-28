<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <link rel="stylesheet" href="css/connexion.css" type="text/css" />
</head>
<?php
  include("entete.php");
  include_once("fonction/password_maker.php");
?>

</br>
<div class="Connexion">
<h1>ACCES BACK OFFICE</h1>
<form method="post" action="admin.php">
    <input id="connexion" type="email" name="mail" placeholder="Mail" /></br>
    <input id="connexion" type="password" name="passe" placeholder="Mot de Passe" /></br>
    <input class="button" type="submit" value="Connexion" />
    <?php if(isset($erreur)and $erreur!=''){?>
      <h4><?php echo "Vous n'êtes pas Admin" ?></h4>
      <?php
    }
    ?>
</form>
</div>
</body>
</body>
</html>
