<?php session_start();
include("functions.php");

$cat=display_cat();
if(isset($_POST['creer'])){
$erreur=verifchamp_petition($_POST);

if( $erreur=="pas de problème"){
  foreach ($_POST as $key => $value) {
    $_POST[$key]=utf8_decode($value);
  }
  $tmp= new petition();
  $tmp->construct_tabID($_POST);
  $tmp->ID_profil=$_SESSION['ID_profil'];
  create_petition($tmp);
  $creation=true;
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


<?php
include("header.php");
if ($_SESSION['connecte']!=true){
  header('Location: connexion.php?');
  exit;
}

?>

<div class="container text-center petition">
    <div class="row">
      <div class="well">
        <?php if(isset($creation) ){
        echo "<h3> Votre pétition  a bien été créée!</h3>";
        }
        else{?>
        <h3> Votre pétition </h3>
        <br>
        <?php if(isset($erreur) ){
          foreach ($erreur as $key => $value) {
            echo $value."<br>";
          } } ?>
        <br>
        <form method="post">
          <div class="form-group">
            <label>Titre</label>
            <input type="text" class="form-control"  placeholder="titre" name="titre">
          </div>
          <label>Catégorie</label>
          <select class="form-control" name="ID_categorie">
          <?php foreach ($cat as $key => $value): ?>
            <option value="<?php echo $value; ?>"><?php echo utf8_encode($value[1]); ?></option>
          <?php endforeach; ?>
          </select>
          <div class="form-group">
            <label>Décideur</label>
            <input type="text" class="form-control"  placeholder="decideur" name="decideur">
          </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control"  placeholder="description" name="description" rows="5">
              </textarea>
            </div>

  <div class="form-group">
    <label>Résumé</label>
    <textarea class="form-control"  placeholder="resume" name="resume" rows="3">
    </textarea>
  </div>

          <div class="form-group">
            <label>Objectif de signatures</label>
            <input type="number" class="form-control"  placeholder="nombre" name="objectif_signature">
          </div>


          <button type="submit" class="btn btn-primary btn-lg" name="creer">Créer</button>
        </form>
<?php } ?>
    </div>
    </div>
</div>
<?php
include("footer.php");
?>
