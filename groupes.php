<html>
<head>
  <link rel="stylesheet" href="" type="text/css" />
</head>
<?php include("entete.php"); ?>
<div class="description">
  <h1><?php echo Renseignements_generaux." ".ucfirst($index) ?></h1>
</div>
<div class="Photo">
  <h1><?php echo Quelques_photos ?></h1>
  <?php
  $list=array_map("utf8_encode",scandir('images/photo/'.$index));
  array_shift($list);array_shift($list);
  if (count($list)<3) {
    foreach ($list as $element) {
      ?>
      <img src='images/photo/<?php echo $index."/".$element ?>'/>
      <?php
    }
  }else {
  for ($i=0; $i <3 ; $i++) { ?>
    <img src='images/photo/<?php echo $index."/".$list[$i] ?>'/>
    <?php
  }
}
  ?>
  <h2><a href='photos.php?key=<?php echo  $index ?>'><?php echo More ?></a></h2>
</div>
<div class="Calendrier">
  <h1><?php Calendrier ?></h1>
</div>

</html>
