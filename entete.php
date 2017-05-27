<?php /*cookies session  de la langue*/
if (isset($_SESSION['langue'])or isset($_SESSION['passe']) or isset($_SESSION['mail'])){
}else{
  session_start();
}
if (!isset($_SESSION['langue']) and isset($_GET['langue'])) {
  $_SESSION['langue']=$_GET['langue'];
}
include_once'fonction/langue.php';/*recherche traduction*/
/*en-tête logo*/
if (isset($_GET['key'])){
  if ($_GET['key']=="farfadets") {$index="farfadets";}
  elseif ($_GET['key']=="louveteaux") {$index="louveteaux";}
  elseif ($_GET['key']=="scouts") {$index="scouts";}
  elseif ($_GET['key']=="pionniers") {$index="pionniers";}
  elseif ($_GET['key']=="compagnons") {$index="compagnons";}
  else {$index="all";}
}else {  $index="all";}

?>
<html>
<head>
   <title>Accueil-Scouts Saint-Fiacre Pulnoy</title>
   <meta http-equiv="Content-Language" content="fr" />
   <link rel="stylesheet" href="css/entete.css" type="text/css" />
   <script type="text/javascript" src="js/function.js"></script>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>
<body class="entete" background="images/Fond.jpg">
  <div class="menu">
    <ul class="liste">
      <li class="menuac" class="liste" ><a class="menuac" class="liste"  href="index.php"> <?php echo Accueil?></a></li>
      <li class="menuren" class="liste" ><a class="menuren" class="liste"  href="renseignement.php"> <?php echo Renseignements?></a></li>
      <li class="menufar" class="liste" ><a class="menufar" class="liste"  href="groupes.php?key=farfadets"> <?php echo Farfadets ?></a></li>
      <li class="menulou" class="liste" ><a class="menulou" class="liste"  href="groupes.php?key=louveteaux"> <?php echo Louveteaux ?></a></li>
      <li class="menusco" class="liste" ><a class="menusco" class="liste"  href="groupes.php?key=scouts"> <?php echo Scouts ?></a></li>
      <li class="menupio" class="liste" ><a class="menupio" class="liste"  href="groupes.php?key=pionniers"> <?php echo Pionniers ?></a></li>
      <li class="menucom" class="liste"  ><a class="menucom" class="liste"  href="groupes.php?key=compagnons"> <?php echo Compagnons ?></a></li>
    </ul>
  </div>
  <!--balise choix langue-->
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

  <div class="logo">
    <?php if ($index=="all") {?> <!--logos renseignement accueil-->
      <a href="articles.php?key=all"><img src="images/logo_accueil/article.svg"/></a>
      <a href="calendrier.php?key=all"><img src="images/logo_accueil/calendrier.svg"/></a>
      <a href="contact.php?key=all"><img src="images/logo_accueil/contact.svg"/></a>
      <a href="photos.php?key=all"><img src="images/logo_accueil/photo.svg"/></a>
      <?php
    }else { ?> <!--logos autres pages rappel fct du haut-->
      <a href="articles.php?key=all"><img src='images/<?php echo $index; ?>/article.svg'/></a>
      <a href="calendrier.php?key=all"><img src='images/<?php echo $index; ?>/calendrier.svg'/></a>
      <a href="contact.php?key=all"><img src='images/<?php echo $index; ?>/contact.svg'/></a>
      <a href="photos.php?key=all"><img src='images/<?php echo $index; ?>/photo.svg'/></a>
      <?php } ?>
    </br>
  </div>
</body>

</html>
