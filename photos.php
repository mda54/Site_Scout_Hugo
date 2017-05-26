<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <link rel="stylesheet" href="photos.css" type="text/css" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<?php include("entete.php"); ?>
</br>
<h1> <?php echo $index; ?> </h1>
<?php
$list=scandir('images/photo/'.$index);
array_shift($list);array_shift($list);
foreach ($list as $element) {?>
<img src='images/photo/<?php echo $element ?>/
  <?php

}
//echo implode(",",$list);
print_r($list);
?>

</body>

</html>
