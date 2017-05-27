<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <link rel="stylesheet" href="css/index.css" type="text/css" />
</head>
<?php include("entete.php"); ?>
<div class="description">
  <h1>Contacts</h1>
</div>
<?php
  $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
  foreach ($categorie as $element) {?>
    <h3><?php echo ucfirst($element); ?></h3>
    <img src='images/photo/<?php echo $element."/contact.jpg" ?>'/>
<?php
  }
  ?>

</html>
