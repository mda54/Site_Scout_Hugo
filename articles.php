<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Articles-Scouts Saint-Fiacre Pulnoy</title>
    <link rel="stylesheet" media="screen and (min-width: 1024px)and (max-width: 4000px)" href="css/cssarticles/articles.css" />
    <link rel="stylesheet" media="screen and (min-width:980px) and (max-width: 1023px)" href="css/cssarticles/articles2.css" />
    <link rel="stylesheet" media="screen and (min-width:640px) and (max-width: 979px)" href="css/cssarticles/articles3.css" />
    <link rel="stylesheet" media="screen and (max-width: 639px)" href="css/cssarticles/articles4.css" />
  </head>

  <?php include("entete.php"); ?>
  <br>

  <h1>Article</h1>
  <div class="post">
    <?php
    include('fonction/get_articleByCategorie.php');
    if (isset($_GET['key']) and $_GET['key']!="" and $_GET['key']!="all") {?>
      <div class="<?php echo $_GET['key']?>">
        <h2><?php echo ucfirst($_GET['key']); ?></h2><br>
        <?php
        $list=get_articleByCategorie($_GET['key']);
        foreach ($list as $element) {?>
        <div class="id"><h3>Post n° <?php echo $element['id']; ?></h3></div><br>
        <div class="contenue"><h4><?php echo $element['contenue']; ?></h4></div>
        <?php
      }?>
      </div>

      <?php
      }else{
        $categorie= array("compagnons","farfadets","louveteaux","pionniers","scouts");
        foreach ($categorie as $key) {
          ?>
          <div class="<?php echo $key?>">
            <h2><?php echo ucfirst($key); ?></h2><br>
            <?php
            $list=get_articleByCategorie($key);
            foreach ($list as $element) {?>
              <div class="id"><h3>Post n° <?php echo $element['id']; ?></h3></div><br>
              <div class="contenue"><h4><?php echo $element['contenue']; ?></h4></div>
              <?php
            }
            ?>
          </div>
          <?php
        }
        ?>
      </div>
      <?php
      }
   ?>
  </body>
</html>
