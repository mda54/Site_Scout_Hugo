<html>
<head>
  <link rel="stylesheet" href="photos.css" type="text/css" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<?php include("entete.php"); ?>
</br>
<h1> <?php
if ($index!="all") {
  echo "Photo ".ucfirst($index);
}else {
  echo "Photo";
}
?>
</h1>
<div class="images">
  <?php
  if ($index!="all") {
    $list=array_map("utf8_encode",scandir('images/photo/'.$index));
    array_shift($list);array_shift($list);
    foreach ($list as $element) {?>
    <img src='images/photo/<?php echo $index."/".$element ?>'/>
      <?php
    }
  }else {
    $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
    foreach ($categorie as $key) {
      $list=array_map("utf8_encode",scandir('images/photo/'.$key));
      array_shift($list);array_shift($list);
      ?>
      <?php echo ucfirst($key); ?>
    </br>
      <?php
      foreach ($list as $element) {?>
        <img src='images/photo/<?php echo $key."/".$element ?>'/>
        <?php
      }
      ?>
    </br>
    <?php
    }
  }
  ?>
</div>
</body>

</html>
