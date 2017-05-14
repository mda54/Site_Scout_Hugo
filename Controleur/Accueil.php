<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if(isset($_GET['deconnexion']) and $_GET['deconnexion']=='true')
{
	session_destroy();
	session_start();
}
if (isset($_POST['Adresse_Mail']) and $_POST['Adresse_Mail']!="" and isset($_POST['Mot_de_Passe']) and $_POST['Mot_de_Passe']!='') {

}
include_once('../Modele/langue.php');
 include("../Vue/Accueil.php"); ?>
