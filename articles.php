<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <link rel="stylesheet" href="css/articles.css" type="text/css" />
</head>
<?php include("entete.php"); ?>
</br>
<?php
  $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
  foreach ($categorie as $key) {
    ?>
    <h2><?php echo $categorie; ?></h2></br

    <?php
  }
 ?>
</body>

</html>
