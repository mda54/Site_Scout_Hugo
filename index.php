<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index-Scouts Saint-Fiacre Pulnoy</title>
    <link rel="stylesheet" href="css/index.css" type="text/css" />
  </head>
  <body>
    <?php include("entete.php"); ?>
    <br>

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