<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <link rel="stylesheet" href="css/articles.css" type="text/css" />
</head>
<?php include("entete.php"); ?>
</br>
<h1>Article</h1>
</div class="post">
<?php
  include('fonction/get_articleByCategorie.php');
  $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
  foreach ($categorie as $key) {
    ?>
    <div class="<?php echo $key?>">
    <h2><?php echo ucfirst($key); ?></h2></br>
    <?php
    $list=get_articleByCategorie($key);
    foreach ($list as $element) {?>
      <div class="id"><h3>Post n° <?php echo $element['id']; ?></h3></div></br>
      <div class="contenue"><h4><?php echo $element['contenue']; ?></h4></div>
      <?php
    }
    ?>
  </div>
  <?php
  }
 ?>
 </div>
</body>

</html>
