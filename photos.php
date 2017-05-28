<html>
<?php include("entete.php"); ?>
<head>
  <link rel="stylesheet" href="css/photos.css" type="text/css" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="stylesheet" href="js/fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/fancyBox/source/jquery.fancybox.pack.js"></script>
</head>
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
    <a class="fancybox" rel='<?php echo $index ?>' href='images/photo/<?php echo $index."/".$element ?>'><img src='images/photo/<?php echo $index."/".$element ?>'/></a>
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
        <a class="fancybox" rel='<?php echo $key ?>' href='images/photo/<?php echo $key."/".$element ?>'><img src='images/photo/<?php echo $key."/".$element ?>'/></a>
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
<script type="text/javascript">
$(document).ready(function() {
$(".fancybox").fancybox();
});
</script>
</body>
</html>
