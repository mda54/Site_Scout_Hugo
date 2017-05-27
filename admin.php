<?php
include_once("fonction/password_maker.php");
include_once("fonction/password_verify.php");
include_once("fonction/get_mdpFromMail.php");
session_start();
include_once("fonction/get_articleByID.php");
$listID=get_articleByID();
$erreur_adm="";

if (isset($_POST['Article_Add_choix']) and $_POST['Article_Add_choix']!="" and isset($_POST['Article_language']) and $_POST['Article_language']!="" and isset($_POST['Article_contenu']) and $_POST['Article_contenu']!="") {
  include_once("fonction/add_articleByCategorieAndLanguage.php");
  echo $_POST['Article_contenu']." ".$_POST['Article_Add_choix']." ".$_POST['Article_language'];
  add_articleByCategorieAndLanguage($_POST['Article_contenu'],$_POST['Article_Add_choix'],$_POST['Article_language']);
}

if (isset($_POST['Article_Delete_choix']) and  $_POST['Article_Delete_choix']!= "" and isset($_POST['Article_id']) and $_POST['Article_id']!="") {
  include_once('fonction/delete_article.php');
  delete_article($_POST['Article_id'],$_POST['Article_Delete_choix']);
}

if (isset($_POST['Admin_mail']) and isset($_POST['Admin_passe1']) and isset($_POST['Admin_passe2']) and $_POST['Admin_mail']!="" and $_POST['Admin_passe1']!="" and $_POST['Admin_passe2']!=""){
  if ($_POST['Admin_passe1']!=$_POST['Admin_passe2']) {
    $erreur_adm="Les deux mots de passes ne sont pas identique";
  }else {
    if (strlen($_POST['Admin_passe1'])<6) {
      $erreur_adm="Le mot de passe est inférieur à 6 caractères";
    }else {
      include("fonction/add_admin.php");
      include("fontion/password_maker.php");
      add_admin($_POST['Admin_mail'],password_maker($_POST['Admin_passe1']));
    }
  }

}

if (isset($_POST['passe']) and isset($_POST['mail']) and password_verify($_POST['passe'],get_password($_POST['mail']))) {
  $_SESSION['mail']=$_POST['mail'];
  $_SESSION['passe']=$_POST['passe'];
  $erreur=false;
  echo $_SESSION['mail'];
  echo $_SESSION['passe'];
}elseif (isset($_SESSION['mail']) and isset($_SESSION['passe']) and password_verify($_SESSION['passe'],get_password($_SESSION['mail']))) {
  $erreur=false;
}else {
  $erreur=true;
  include_once"connexion.php";
}
if ($erreur==false) {
  include_once("entete.php");
  $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
?>
<html>
<head>
  <link rel="stylesheet" href="css/admin.css" type="text/css" />
</head>
</br>
</body>
<h1>Bienvenue dans la partie administrateur</h1></br>
<h1>Photo</h1>
<h3>Ajouter une photo</h3>
<form action='admin.php' method="post">
<select name="Photo_categorie">
  <option value="">Selectionner</option>
  <?php foreach ($categorie as $key) {?>
    <option value='<?php echo $key; ?>'><?php echo $key; ?></option>
    <?php
  }
    ?>
</select>
</br>
<input type="file" name="Photo_chemin"/>
</br>
  <input type="submit" value="Ajouter" />
</form>
<h1>Article</h1>
<h3>Ajouter un article</h3>
<form action='admin.php' method="post">
<select name="Article_Add_choix">
  <option value="">Selectionner</option>
</select></br>
<select name="Article_language">
  <option value="">Selectionner</option>
  <option value='francais'>Français</option>
  <option value='anglais'>Anglais</option>
</select>
</br>
<input type="texte" rows="5" cols="100" name="Article_contenu"/>
</br>
  <input type="submit" value="Ajouter" />
</form>
<h3>Supprimer un article</h3>
<form action='admin.php' method="post">
<select name="Article_id"/>
<option value=''>Selectionner</option>
<?php
foreach ($listID as $id) {?>
  <option value='<?php echo $id['id'] ?>'><?php echo $id['id'] ?></option>
<?php
}
 ?>

</select>
</br>
  <input type="submit" value="Supprimer" />
  </br>
</form>
<h1>Compte administrateur</h1>
<h3>Ajouter un compte administrateur</h3>
<form action='admin.php' method="post">
  <input type="email" name="Admin_mail" placeholder="Adresse mail" />
  </br>
  <input type="password" name="Admin_passe1" placeholder="Mot de passe" />
  </br>
  <input type="password" name="Admin_passe2" placeholder="Mot de passe" />
  </br>
  <input type="submit" value="Ajouter" />
  </br>
</form>
<?php if($erreur_adm!=""){?>
<a><?php echo $erreur_adm; ?></a>
<?php } ?>
<h3>Supprimer un compte administrateur</h3>
<form action='admin.php' method="post">
  <input type="email" name="Admin_mail1" placeholder="Adresse mail" />
  </br>
  <input type="email" name="Admin_mail2" placeholder="Adresse mail" />
  </br>
  <input type="submit" value="Supprimer" />
</form>
<h1>Message d'accueil</h1>
<h3>Modifier le message d'accueil</h3>
<form action='admin.php' method="post">
  <select name="Accueil_language">
    <option value="">Selectionner</option>
    <option value='francais'>Français</option>
    <option value='anglais'>Anglais</option>
  </select></br>
  <input type="text" name="Accueil_text" rows="5" cols="100" placeholder="coucou c est moi" />
</br>
  <input type="submit" value="Modifier" />
</form>
</body>
</html>
<?php } ?>
