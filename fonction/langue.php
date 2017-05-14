<?php

if(isset($_GET['langue']) and $_GET['langue']=='fr') {
	$_SESSION['langue']='fr';
}
elseif(isset($_GET['langue']) and $_GET['langue']=='en') {
	$_SESSION['langue']='en';
}

if (isset($_SESSION['langue']) and $_SESSION['langue']=='fr') {
	include('langues/french.php');
}
elseif (isset($_SESSION['langue']) and $_SESSION['langue']=='en') {
	include('langues/english.php');
}
else{
	include('langues/french.php');
}

?>
