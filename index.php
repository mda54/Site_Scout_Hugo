<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
  <head>
    <link rel="stylesheet" href="css/index.css" type="text/css" />
  </head>
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
</html>
