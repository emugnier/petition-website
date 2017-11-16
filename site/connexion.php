<?php
include("functions.php");
session_start();
$connecte = false;
if (isset($_POST['mail']) && isset($_POST['mdp'])) {
  $mdp=mdp_correct($_POST['mail']);
  if (password_verify($_POST['mdp'],$mdp['mdp'])==true){
    $_SESSION['connecte']=true;
    $_SESSION['mail']=$_POST['mail'];
    $connecte= true;
    header("Location: profil.php?");
    exit();
  }
  else {
    $msg="mauvais mot de passe ou email inconnu";
  }}

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>ASSIGNER.COM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
  }
  <?php
  include("header.php");
  ?>

  <div class="container inscription">
    <div class="row">
      <div class="col-lg-4 well">
        <?php if (isset($mdp)) {

          echo $msg;} ?>
      </div>

      <div class="col-lg-8">
        <div class="well">
          <?php if ($connecte==false){
          ?>
          <form method="post">
            <div class="form-group">
              <label>adresse email</label>
              <input type="email" name="mail" class="form-control" id="nom@domaine.com" placeholder="nom@domaine.com">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" name=mdp class="form-control" id="exampleInputPassword1" placeholder="motdepasse">
            </div>

            <button type="submit" class="btn btn-default">Se Connecter</button>
          </form>
          <?php } ?>
          <br>
          <p> Pas encore inscrit? <a href="incription_page.php">Sautez le pas!</a>
        </div>
      </div>

    </div>
  </div>

  <?php
  include("footer.php");
  ?>
