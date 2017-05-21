<?php
session_start();
if (!isset($_SESSION['langue']) and isset($_GET['langue'])) {
  $_SESSION['langue']=$_GET['langue'];
}
include_once'fonction/langue.php';
?>
<html>
<head>
   <title>Accueil-Scouts Saint-Fiacre Pulnoy</title>
   <meta http-equiv="Content-Language" content="fr" />
   <link rel="stylesheet" href="css/entete.css" type="text/css" />
   <script type="text/javascript" src="js/function.js"></script>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body class="entete" background="images/Fond.jpg">
  <div class="menu">
    <ul class="liste">
      <li class="liste"><a class="liste" href="renseignement.php"> <?php echo Renseignements?></a></li>
      <li class="liste"><a class="liste" href="farfadets.php"> <?php echo Farfadets ?></a></li>
      <li class="liste"><a class="liste" href="louveteaux.php"> <?php echo Louveteaux ?></a></li>
      <li class="liste"><a class="liste" href="scouts.php"> <?php echo Scouts ?></a></li>
      <li class="liste"><a class="liste" href="pionniers.php"> <?php echo Pionniers ?></a></li>
      <li class="liste"><a class="liste" href="compagnons.php"> <?php echo Compagnons ?></a></li>
      <li class="liste"><a class="liste" href="chefs.php"> <?php echo Chefs ?></a></li>
    </ul>
  </div>
  <ul class="langue">
        <?php
      if (isset($_SESSION['langue'])) {
        ?>
        <p><?php echo strtoupper($_SESSION['langue']) ?><span id="none"></span></p>
        <?php
      }
      else {
        ?>
        <p>FR<span id="none"></span></p>
        <?php
      }
    ?>
        <ul class="choix">
            <li id="bottom1"><a href="<?php echo $url ?>?langue=fr">FR</a></li>
            <li id="bottom2"><a href="<?php echo $url ?>?langue=en">EN</a></li>
        </ul>
  </ul>
</body>

</html>
