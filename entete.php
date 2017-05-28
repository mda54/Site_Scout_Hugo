<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil-Scouts Saint-Fiacre Pulnoy</title>
    <link rel="stylesheet" href="css/entete.css" type="text/css"/>
    <script type="text/javascript" src="js/function.js"></script>
  </head>
<?php
if (isset($_GET['deco']) and $_GET['deco']==true) {
  session_start();
  session_destroy();
}
/*cookies session  de la langue*/
if (isset($_SESSION['langue'])or isset($_SESSION['passe']) or isset($_SESSION['mail'])or isset($_SESSION['connexion'])){
}else{
  session_start();
  $_SESSION['connexion']=true;
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

   <body class="entete" background="images/Fond.jpg">
      <div class="menu">
        <img src="images/entete.svg" alt="logo"/>
          <ul class="liste">
            <li class="menuac liste" ><a class="menuac liste"  href="index.php">
              <?php echo Accueil?>
            </a></li>

            <li class="menuren liste" ><a class="menuren liste"  href="renseignement.php">
               <?php echo Renseignements?>
             </a></li>

            <li class="menufar liste" ><a class="menufar liste"  href="groupes.php?key=farfadets"> 
               <?php echo Farfadets ?>
             </a></li>

            <li class="menulou liste" ><a class="menulou liste"  href="groupes.php?key=louveteaux">
              <?php echo Louveteaux ?>
            </a></li>

            <li class="menusco liste" ><a class="menusco liste"  href="groupes.php?key=scouts">
               <?php echo Scouts ?>
             </a></li>

            <li class="menupio liste" ><a class="menupio liste"  href="groupes.php?key=pionniers">
             <?php echo Pionniers ?>
           </a></li>

            <li class="menucom liste"  ><a class="menucom liste"  href="groupes.php?key=compagnons">
             <?php echo Compagnons ?>
           </a></li>
          </ul>
      </div>
      <div class="page">
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
           <?php if ($index=="all") {?>
           <!--logos renseignement accueil-->

            <a href="articles.php?key=all"><img src="images/logo_accueil/article.svg" alt="article"/></a>
            <a href="calendrier.php?key=all"><img src="images/logo_accueil/calendrier.svg" alt="calendrier"/></a>
            <a href="contact.php?key=all"><img src="images/logo_accueil/contact.svg" alt="contact"/></a>
            <a href="photos.php?key=all"><img src="images/logo_accueil/photo.svg" alt="photo"/></a>
            <?php
          }else { ?> <!--logos autres pages rappel fct du haut-->

            <a href='articles.php?key=<?php echo $index ?>'><img src='images/<?php echo $index; ?>/article.svg' alt="article"/></a>
            <a href='calendrier.php?key=<?php echo $index ?>'><img src='images/<?php echo $index; ?>/calendrier.svg' alt="calendrier"/></a>
            <a href='contact.php?key=<?php echo $index ?>'><img src='images/<?php echo $index; ?>/contact.svg' alt="contact"/></a>
            <a href='photos.php?key=<?php echo $index ?>'><img src='images/<?php echo $index; ?>/photo.svg' alt="photo"/></a>
            <?php } ?>
          <br>
        </div>
    </div>
    </body>
</html>
