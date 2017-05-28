<html>
<head>
  <link rel="stylesheet" href="css/photos.css" type="text/css" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<?php include("entete.php"); ?>
</br>
<h1> <?php
if ($index!="all") {
  echo "Photos ".ucfirst($index);
}else {
  echo "Photos";
}
?>
</h1>
<div class="images">
  <?php
  if ($index!="all") {
    ?>
    <div class='<?php echo $index; ?>'>
    <?php
    $x=0;
    $list=array_map("utf8_encode",scandir('images/photo/'.$index));
    array_shift($list);array_shift($list);
    foreach ($list as $element) {?>
    <img src='images/photo/<?php echo $index."/".$element ?>'/>
    <?php
    $x=$x+1;
    if ($x==3){$x=0;?></br><?php }
    }?>
    </div>
    <?php
  }else {
    $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
    foreach ($categorie as $key) {
      $x=0;
      ?>
      <div class='<?php echo $key; ?>'>
      <?php
      $list=array_map("utf8_encode",scandir('images/photo/'.$key));
      array_shift($list);array_shift($list);
      ?>
      <h2><?php echo ucfirst($key); ?></h2>
    </br>
      <?php
      foreach ($list as $element) {?>
        <img src='images/photo/<?php echo $key."/".$element ?>'/>
        <?php
        $x=$x+1;
        if ($x==3){$x=0;?></br><?php }
      }
      ?>
    </br>
  </div>
    <?php
    }
  }
  ?>
</div>
</body>

</html>
