  <head>
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssadmin/admin.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssadmin/admin2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssadmin/admin3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssadmin/admin4.css" />

  </head>
<?php
include_once("fonction/password_maker.php");
include_once("fonction/password_verify.php");
include_once("fonction/get_mdpFromMail.php");

session_start();

$_SESSION['connexion']=true;

include_once("fonction/get_articleByID.php");

if (isset($_POST['Article_Add_choix']) and $_POST['Article_Add_choix']!="" and isset($_POST['Article_language']) and $_POST['Article_language']!="" and isset($_POST['Article_contenu']) and $_POST['Article_contenu']!="") {
  include_once("fonction/add_articleByCategorieAndLanguage.php");
  add_articleByCategorieAndLanguage($_POST['Article_contenu'],$_POST['Article_Add_choix'],$_POST['Article_language']);
}

if (isset($_POST['Article_id']) and $_POST['Article_id']!="") {
  include_once('fonction/delete_article.php');
  delete_article($_POST['Article_id']);
}

if (isset($_POST['Admin_mail']) and isset($_POST['Admin_passe1']) and isset($_POST['Admin_passe2']) and $_POST['Admin_mail']!="" and $_POST['Admin_passe1']!="" and $_POST['Admin_passe2']!=""){
  if ($_POST['Admin_passe1']!=$_POST['Admin_passe2']) {
    $erreur_adm="Les deux mots de passes ne sont pas identique";
  }else {
    if (strlen($_POST['Admin_passe1'])<6) {
      $erreur_adm="Le mot de passe est inférieur à 6 caractères";
    }else {
      include("fonction/add_admin.php");
      add_admin($_POST['Admin_mail'],password_maker($_POST['Admin_passe1']));
    }
  }
}

if (isset($_POST['Admin_mail1']) and isset($_POST['Admin_mail2']) and $_POST['Admin_mail1']!="" and $_POST['Admin_mail2']!="") {
  if($_POST['Admin_mail1']!=$_POST['Admin_mail2']) {
    $erreur_admin="Les deux adresses ne sont pas identiques";
  }else {
    include("fonction/delete_admin.php");
    delete_admin($_POST['Admin_mail1']);
  }
}

if(isset($_POST['Accueil_language']) and isset($_POST['Accueil_text']) and $_POST['Accueil_language']!="" and $_POST['Accueil_text']!="") {
  include("fonction/modif_Accueil.php");
  modif_Accueil($_POST['Accueil_language'],$_POST['Accueil_text']);
}

if (isset($_POST['Accueil_text_fr']) and $_POST['Accueil_text_fr']!="") {
  include('fonction/modif_Accueil.php');
  modif_Accueil("francais",$_POST['Accueil_text_fr']);
}

if (isset($_POST['Accueil_text_en']) and $_POST['Accueil_text_en']!="") {
  include('fonction/modif_Accueil.php');
  modif_Accueil("anglais",$_POST['Accueil_text_en']);
}

if (isset($_POST['Photo_categorie']) and isset($_FILES['Photo_chemin']['name']) and $_POST['Photo_categorie']!="" and $_FILES['Photo_chemin']['name']!="") {
  $extensions_valides = array( 'jpg' , 'jpeg' ,'png' );
  $extension_upload = strtolower(substr(strrchr($_FILES['Photo_chemin']['name'], '.')  ,1)  );
  if ( !in_array($extension_upload,$extensions_valides) ) $erreur_photo="extention invalide";
  if ($_FILES['Photo_chemin']['size'] > $_POST['MAX_FILE_SIZE']) $erreur_photo = "Le fichier est trop gros";
  $chemin = "images/photo/".$_POST['Photo_categorie']."/";
  $resultat = move_uploaded_file($_FILES['Photo_chemin']['tmp_name'],$chemin.$_FILES['Photo_chemin']['name']);
  if ($resultat) $erreur_photo="Transfert réussi";
}

if (isset($_POST['passe']) and isset($_POST['mail']) and password_verify($_POST['passe'],get_password($_POST['mail']))) {
  $_SESSION['mail']=$_POST['mail'];
  $_SESSION['passe']=$_POST['passe'];
  $erreur=false;
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

    <div class="messagetel">Vous en pouvez pas ajouter des éléments sur ce support.</div>
  <br>
  <div class='miseenforme'>
  <div class="modif">
    <h1 class="tete">Bienvenue dans la partie administrateur</h1><br>

    <div class="photo">
      <h1>Photo</h1>
      <h3>Ajouter une photo(JPG,JPEG ou PNG| max 15 Ko)</h3>

      <form action='admin.php' method="post" enctype="multipart/form-data">
        <select name="Photo_categorie">
          <option value="">Selectionner</option>
          <?php foreach ($categorie as $key) {?>
            <option value='<?php echo $key; ?>'><?php echo $key; ?></option>
            <?php
          }
          ?>
        </select>
        <br>
        <input type="file" name="Photo_chemin" id="Photo_chemin"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
        <br>
        <?php
        if (isset($erreur_photo)) {
          echo $erreur_photo;
        }
        ?>
        <br>
        <input class="button" type="submit" value="Ajouter" />
      </form>
    </div>

    <div class="admin">
      <h1>Compte administrateur</h1>
      <h3>Ajouter un compte administrateur</h3>
      <form action='admin.php' method="post">
        <input type="email" name="Admin_mail" placeholder="Adresse mail" />
        <br>
        <input type="password" name="Admin_passe1" placeholder="Mot de passe" />
        <br>
        <input type="password" name="Admin_passe2" placeholder="Mot de passe" />
        <br>
        <input class="button" type="submit" value="Ajouter" />
        <br>
      </form>

      <?php if(isset($erreur_adm)){?>
      <a><?php echo $erreur_adm; ?></a>
      <?php } ?>
      <h3>Supprimer un compte administrateur</h3>

      <form action='admin.php' method="post">
        <input type="email" name="Admin_mail1" placeholder="Adresse mail" />
        <br>
        <input type="email" name="Admin_mail2" placeholder="Adresse mail" />
        <br>
        <input class="button" type="submit" value="Supprimer" />
      </form>

      <?php if (isset($erreur_admin)){?>
        <a><?php echo $erreur_admin;?></a><?php
      } ?>
    </div>

    <div class="article">
      <h1>Article</h1>
      <h3>Ajouter un article</h3>
      <form action='admin.php' method="post">
        <select name="Article_Add_choix">
          <option value="">Selectionner</option>
          <?php foreach ($categorie as $key) {?>
            <option value='<?php echo $key; ?>'><?php echo $key; ?></option>
            <?php
          }
          ?>
        </select><br>

        <select name="Article_language">
          <option value="">Selectionner</option>
          <option value='francais'>Français</option>
          <option value='anglais'>Anglais</option>
        </select>
        <br>

        <textarea id="text" type="texte" rows="5" cols="100" name="Article_contenu"></textarea>
        <br>

        <input class="button" type="submit" value="Ajouter" />
        </form>

        <h3>Supprimer un article</h3>

        <form action='admin.php' method="post">
          <select name="Article_id">
          <option value=''>Selectionner</option>
          <?php
          $listID=get_articleByID();
          foreach ($listID as $id) {?>
            <option value='<?php echo $id['id'] ?>'><?php echo $id['id'] ?></option>
            <?php
          }
          ?>
          </select>
          <br>

          <input class="button" type="submit" value="Supprimer" />
          <br>
        </form>

      </div>

      <div class="accueil">
        <h1>Message d'accueil</h1>
        <h3>Modifier le message d'accueil francais</h3>

        <form action='admin.php' method="post">
          <br>
          <?php
          include("fonction/get_accueil.php");
          $text_fr=get_accueil("francais");
          $text_en=get_accueil("anglais");
          ?>
          <textarea id="text" class="text" type="text" name="Accueil_text_fr" rows="5" cols="100" ><?php echo $text_fr ?></textarea>
          <br>
          <input class="button" type="submit" value="Modifier" />
        </form>

        <h3>Modifier le message d'accueil anglais</h3>

        <form action='admin.php' method="post">
          <br>
          <textarea id="text" class="text" type="text" name="Accueil_text_en" rows="5" cols="100"><?php echo $text_en ?></textarea>
          <br>
          <input class="button" type="submit" value="Modifier" />
        </form>

      </div>

      <div class="deco">
        <h3><a href="index.php?deco=true">Déconnexion</a></h3>
      </div>

  </div>
</div>

</html>
<?php } ?>
