<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact-Scouts Saint-Fiacre Pulnoy</title>
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/csscontact/contact.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/csscontact/contact2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/csscontact/contact3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/csscontact/contact4.css" />
  </head>
  <?php include("entete.php"); ?>
  <body>
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
        $categorie= array("farfadets","louveteaux","pionniers","scouts","compagnons");
        foreach ($categorie as $element) {?>
          <h3><?php echo ucfirst($element)?></h3>
          <img src='images/<?php echo $element."/chef.jpg" ?>' alt="Il n'existe pas de groupe cette année"/>
          <?php
        }
      }
      ?>
    </div>
  </body>
</html>
