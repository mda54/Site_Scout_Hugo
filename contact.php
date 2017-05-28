<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <link rel="stylesheet" href="css/contact.css" type="text/css" />
</head>
<?php include("entete.php"); ?>
<div class="description">
  <h1>Contacts</h1>
</div>
<div class="photo">
<?php
if (isset($_GET['key']) and $_GET['key']!="" and $_GET['key']!="all") {?>
  <h3><?php echo ucfirst($_GET['key']); ?></h3>
  <img src='images/<?php echo $_GET['key']."/chef.jpg" ?>'/>
  <?php
}else {
  $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
  foreach ($categorie as $element) {?>
    <h3><?php echo ucfirst($element); ?></h3>
    <img src='images/<?php echo $element."/chef.jpg" ?>'/>
<?php
  }
}
  ?>
  </div>
</html>
