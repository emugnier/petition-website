<?php
session_start();
if ($_SESSION["connecte"]==false){
  header('Location: accueil.php?');
}
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

<?php
include("header.php");
include("functions.php");

$profil=accesProfil($_SESSION['mail']);
$_SESSION['ID_profil']=$profil['ID'];
$tab_p_signe=accesPetition_signe($_SESSION['ID_profil']);
$tab_p_cree=accesPetition_cree($_SESSION['ID_profil']);
$erreur=array();



//$msg=$_SESSION['mail'];

if (isset($_POST["modification"])){

if(verifchamp_profil($_POST)=="pas de problème"){
  $msg= "profil changé";
  $tmp= new profil();
  $tmp->construct_tab($_POST);
  $tmp->ID=$profil['ID'];
  $tmp->mdp=password_hash($tmp->mdp,PASSWORD_DEFAULT);
  update_profil($tmp);
  $msg= "profil changé";

}
else{
  $msg="Votre profil n'a pas été modifié!"."<br>";
  $erreur=verifchamp_profil($_POST);
}
}
$profil=accesProfil($_SESSION['mail']);

?>


<div class="container text-center petition">
    <div class="row">
      <div class="col-lg-7 text-left">
      <div class="well">


        <?php
        if (isset($_POST["modifier"]) and $_SESSION['connecte']=true){
        ?>
        <form method="post">
          <div class="form-group">
            <label for="mail">Email address</label>
            <input type="mail" name="mail" class="form-control" id="exampleInputEmail1" placeholder="nom@domaine.com" value=<?php echo $profil['mail']; ?>>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" name="mdp_conf" class="form-control" id="exampleInputPassword1" placeholder="Password" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Pseudo</label>
            <input type="pseudo" class="form-control" name="pseudo" id="exampleInputEmail1" placeholder="nom@domaine.com" value=<?php echo $profil['pseudo']; ?> >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="nom" class="form-control" name="nom" id="exampleInputEmail1" placeholder="nom@domaine.com" value=<?php echo $profil['nom']; ?> >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
            <input type="prenom" class="form-control" name="prenom" id="exampleInputEmail1" placeholder="nom@domaine.com" value=<?php echo $profil['prenom']; ?>>
          </div>


          <button type="submit" class="btn btn-default" name="modification" >Modifier</button>
        </form>

<?php }
else{ ?>

        <h2> Profil </h2>
        <br>
        <h4>Pseudo: <?php echo $profil['pseudo']; ?>  </h4>
        <br>
        <h4>Nom: <?php echo $profil['nom']; ?> </h4>
        <br>
        <h4>Prenom: <?php echo $profil['prenom']; ?> </h4>
        <br>
        <h4>adresse mail: <?php echo $profil['mail']; ?> </h4>
        <br>
        <h4>mot de passe: ... </h4>
        <br>
        <div class="row">
        <div class="col-lg-12 text-left">
          <form method="post">
<button type="submit" class="btn btn-primary" name="modifier" value="envoi">Modifier </button>
</form>
        </div>
      </div>

<?php } ?>

    </div>
  </div>


  <div class="col-lg-5 text-left">
  <div class="well">

    <h2> Pétitions signées</h2>
    <br>
    <table class="table">
  <tr>
    <th>Petitions</th>
    <th>Categories</th>
    <th>Nombre de signatures</th>
  </tr>
  <?php foreach($tab_p_signe as $petition){?>
  <tr>
    <td> <a href="petition.php?id=<?php echo $petition[0]?>"><?php echo utf8_encode($petition[1])?></a> </td>
    <td><?php echo utf8_encode($petition[2]); ?></td>
    <td><?php echo utf8_encode($petition[3]); ?></td>
  </tr>
  <?php } ?>

</table>



    <h2> Pétitions proposées </h2>
    <br>
    <table class="table">
  <tr>
    <th>Petitions</th>
    <th>Categories</th>
    <th>Nombre de signatures</th>
  </tr>
  <?php foreach($tab_p_cree as $petition){?>
  <tr>
    <td> <a href="petition.php?id=<?php echo $petition[0]?>"><?php echo utf8_encode($petition[1])?></a> </td>
    <td><?php echo utf8_encode($petition[2]); ?></td>
    <td><?php echo utf8_encode($petition[3]); ?></td>
  </tr>
  <?php }?>

</table>
<?php
if (isset($msg)){
  echo $msg;
}
if (isset($erreur)){
  foreach ($erreur as $key => $value) {
    echo $value."<br>";
  }
} ?>
</div>
</div>

  </div>


<!--<div class="row">
<div class="col-lg-6 text-left">
  <div class="well">
<h4>Résumé</h4>
  <p>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
    Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum</p>

  </div>
  </div>

</div>
-->


</div>
<?php
include("footer.php");
?>
