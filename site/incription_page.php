<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ASSIGNER.COM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

  <?php
  include("header.php");
  include("functions.php");
$erreur=array();
  $nom="";
  $prenom="";
  $pseudo="";
  $mail="";

  if (isset($_POST["submit"])){
/*$mail=$_POST["mail"];
if($mail !== "") {
        if(!ereg("^[A-Za-z0-9.-_]*[@]{1}[A-Za-z0-9.-_]*[.]{1}[a-z]{2,5}$", $mail)){
          $erreur["mail"]="email non valide";}
        else if (check_profil_mail($_POST['mail'])==true)
        {
          $erreur["mail"]="il existe déjâ un compte avec cette adresse email";
        }

}
else{
  $erreur["mail"]="email non rempli";
}
$mdp=$_POST["mdp"];
if (strlen($mdp)<6){
  $erreur["mdptaille"]="mot de passe trop court";
}
if ($mdp!=$_POST["mdp_conf"]){
  $erreur["mdp"]="confirmation du mot de passe fausse";
}

$pseudo=$_POST["pseudo"];
if (strlen($pseudo)<2){
  $erreur["pseudo"]="pseudo trop court";
}
$prenom=$_POST["prenom"];
if (strlen($prenom)<2){
  $erreur["prenom"]="prenom trop court";
}
$nom=$_POST["nom"];
if (strlen($nom)<2){
  $erreur["nom"]="nom trop court";
}*/
$erreur=verifchamp_profil($_POST);
if($erreur=="pas de problème"){
  $msg= "profil créé";
  $tmp= new profil();
  $tmp->construct_tab($_POST);
  $tmp->mdp=password_hash($tmp->mdp,PASSWORD_DEFAULT);
  inscription($tmp);
  header('Location: connexion.php?');
  exit;
  $msg= "profil créé".$tmp->mdp;

}
}


  /*if (isset($_POST['mail']) and check_profil_mail($_POST['mail'])==false) {
    $msg= "profil créé";
    $tmp= new profil();
    $tmp->construct_tab($_POST);
    $tmp->mdp=password_hash($tmp->mdp,PASSWORD_DEFAULT);
    inscription($tmp);
    header('Location: connexion.php?');
    exit;
    $msg= "profil créé".$tmp->mdp;

  }
  else if(check_profil_mail($_POST['mail'])==true)
  {
    $msg="il existe déjâ un compte avec cette adresse email";
  }*/
  ?>

<div class="container inscription">
  <div class="row">
    <div class="col-lg-12 well text-center">
          <h1> Inscription </h1>
        </div>
      </div>
<div class="row">
  <div class="col-lg-4 well">
      <?php if (count($erreur)!=0){
       foreach ($erreur as $key => $value) {
         echo $value."<br>";
       } } ?>
  </div>

  <div class="col-lg-8">
  <div class="well">

  <form method="post">
    <div class="form-group">
      <label>Email address</label>
      <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="nom@domaine.com" value="<?php echo $mail;?>">
    </div>
    <div class="form-group">
      <label>Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp" >
    </div>
    <div class="form-group">
      <label>Confirmation du Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="mdp_conf">
    </div>
    <div class="form-group">
      <label>Pseudo</label>
      <input type="text" class="form-control" id="exampleInputpseudo" placeholder="dupontdu32" name="pseudo" value="<?php echo $pseudo;?>">
    </div>
    <div class="form-group">
      <label>Nom</label>
      <input type="text" class="form-control" id="nom" placeholder="Dupont" name="nom" value="<?php echo $nom;?>">
    </div>
    <div class="form-group">
      <label>Prénom</label>
      <input type="text" class="form-control" id="Inputprenom" placeholder="toto" name="prenom" value="<?php echo $prenom;?>">
    </div>


    <button type="submit" value="true" class="btn btn-default" name="submit">Confirmer</button>
  </form>
</div>
</div>

</div>
</div>

  <?php
  include("footer.php");
  ?>
