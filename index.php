<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index-Scouts Saint-Fiacre Pulnoy</title>
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssindex/index.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssindex/index2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssindex/index3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssindex/index4.css" />
  </head>
  <body>
    <?php include("entete.php"); ?>
    <br>

    <h1><?php echo Bienvenue ?></h1>

    <div class="corpst">
      <?php include('fonction/get_accueil.php');
      if (isset($_SESSION['langue'])) {
        if ($_SESSION['langue']=="fr") {
          echo get_accueil("francais");
        }else{
          echo get_accueil('anglais');
        }
      }else {
          echo get_accueil("francais");
      }?>
    </div>

  </body>
</html>
