<?php
include_once'fonction/langue.php';
session_start();
if (!isset($_SESSION['langue']) and isset($_GET['langue'])) {
  $_SESSION['langue']=$_GET['langue'];
}
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
      <li class="liste"><?php echo Renseignements?></li>
      <li class="liste"><?php echo Farfadets ?></li>
      <li class="liste"><?php echo 'Louveteaux  Jeanettes' ?></li>
      <li class="liste"><?php echo Scouts ?></li>
      <li class="liste"><?php echo 'Pionniers  Caravelles' ?></li>
      <li class="liste"><?php echo Compagnons ?></li>
      <li class="liste"><?php echo Chefs ?></li>
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
