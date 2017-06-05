<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>Connexion-Scouts Saint-Fiacre Pulnoy</title>
        <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssconnexion/connexion.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssconnexion/connexion2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssconnexion/connexion3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssconnexion/connexion4.css" />

  </head>
  <body>
    <?php
      include("entete.php");
      include_once("fonction/password_maker.php");
    ?>
    <br>

    <div class="Connexion">
      <h1>ACCES BACK OFFICE</h1>

      <form method="post" action="admin.php">
          <input id="connexion" type="email" name="mail" placeholder="Mail" /><br>
          <input id="connexion" type="password" name="passe" placeholder="Mot de Passe" /><br>
          <input class="button" type="submit" value="Connexion" />
          <?php if(isset($erreur)and $erreur!=''){?>
            <h4><?php echo "Vous n'êtes pas Admin" ?></h4>
            <?php
          }
          ?>
      </form>
    </div>
  </body>

</html>
