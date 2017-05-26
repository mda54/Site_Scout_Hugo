
<?php
function width()
{
  $width='<script type="text/javascript"> document.write(""+screen.width);
  </script>';
  return $width;
}
function height()
{
  $height='<script type="text/javascript"> document.write(""+screen.height);
  </script>';
  return $height;
}
?>
