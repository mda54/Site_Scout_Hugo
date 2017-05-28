<?php
if (isset($_GET['key'])){
  if ($_GET['key']=="farfadets") {$index="farfadets";}
  elseif ($_GET['key']=="louveteaux") {$index="louveteaux";}
  elseif ($_GET['key']=="scouts") {$index="scouts";}
  elseif ($_GET['key']=="pionniers") {$index="pionniers";}
  elseif ($_GET['key']=="compagnons") {$index="compagnons";}
  else {$index="all";}
}else {  $index="all";}
if ($index=="all") {
  include("index.php");
}else {
 ?>
<html>
<head>
  <link rel="stylesheet" href="css/groupes.css" type="text/css" />
</head>
<?php
include("entete.php");
?>
<div class="description">
  <h1><?php echo Renseignements_generaux." ".ucfirst($index) ?></h1>
</div>
<div class="photo">
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
<div class="article"/>
  <h1><?php echo "Article"; ?></h1>
  <?php
  include('fonction/get_articleByCategorie.php');
  $article=get_articleByCategorie($index);
  foreach ($article as $key) {?>
    <h3><?php echo "Article N°".$key['id']; ?></h3></br>
    <h4><?php echo $key['contenue']; ?></h4>
    <?php
  }
  ?>
</div>
<!--calendrier-->
  <div class="iframe">
		<fieldset class="ssiframe">
			<legend>Calendrier</legend>
				<iframe src="https://calendar.google.com/calendar/embed?showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=saintfiacre.pulnoy%40gmail.com&amp;color=%23333333&amp;src=o87a1o1eqjiv167tm8g152po9s%40group.calendar.google.com&amp;color=%23853104&amp;src=vjo6gs4nmah3hh1im7cncv471c%40group.calendar.google.com&amp;color=%23711616&amp;src=bo0mhpvkpv9v3lt8uv42us0d48%40group.calendar.google.com&amp;color=%23182C57&amp;src=e_2_fr%23weeknum%40group.v.calendar.google.com&amp;color=%238C500B&amp;ctz=Europe%2FParis" style="border-width:0" width="700" height="500" frameborder="0" scrolling="no"></iframe>
		</fieldset>
	</div>
</html>
<?php } ?>
