<?php session_start();
include("functions.php");
if(isset($_SESSION["ID_profil"])){
$signature=check_signature($_SESSION["ID_profil"],$_GET["id"]);}

if(isset($_POST['signer']) and isset($_GET['id']) and $signature==false){
  signer($_SESSION["ID_profil"],$_GET['id']);
  $signature=true;
}

if(isset($_POST['supprimer']) and isset($_GET['id']) ){
  supprimer_petition($_GET['id']);
}

if(isset($_GET['id'])){
    $petition=info_petition($_GET['id']);
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


<?php
include("header.php");
?>

<div class="container text-center petition">
    <div class="row">
      <div class="well">
        <h2> <?php echo utf8_encode($petition["titre"]); ?> </h2>
        <br>
        <h4> <?php echo utf8_encode($petition["pseudo"]); ?>  </h4>
        <br>
        <div class="row">
        <div class="col-lg-12 text-left">

          <p><?php echo utf8_encode($petition["description"]); ?> </p>
        </div>
      </div>
    </div>
  </div>
<div class="row">
<div class="col-lg-6 text-left">
  <div class="well">
<h4>Résumé</h4>
  <p><?php echo utf8_encode($petition["resume"]); ?> </p>

  </div>
  </div>
  <div class="col-lg-6 text-center">
    <div class=row>
      <div class="well">
        <h4>Nombre de signatures</h4>
        <?php echo $petition["count(signatures.id)"]." signatures sur ".$petition['objectif_signature']." nécessaires"; ?>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php
          $remplissage=$petition["count(signatures.id)"]/$petition['objectif_signature']*100;
          echo $remplissage?>%">
          <?php echo $petition["count(signatures.id)"]."/".$petition['objectif_signature']; ?>
          </div>
        </div>
    </div>
    </div>
    <div class=row>
      <div class="well">
        <?php
        if ($_SESSION['connecte']==true){
          if($signature==true){ ?>
        <h4> Merci pour votre soutien</h4>
      <?php }
       else{ ?>
          <form method="post">
          <button type="submit" class="btn btn-primary btn-lg" name="signer">Signer</button>
        </form>
      <?php }
    if (check_auteur($_SESSION["ID_profil"],$_GET["id"])==true){?>
      <form method="post">
      <button type="submit" class="btn btn-primary btn-lg" name="supprimer">Supprimer</button>
    </form>
    <?php }
  }
      else {?>
          <a href="incription_page.php"> <input type="button" class="btn btn-primary btn-lg" value="Nous rejoindre"> </a>
        <?php }?>
    </div>
    </div>
</div>

</div>
</div>
<?php
include("footer.php");
?>
