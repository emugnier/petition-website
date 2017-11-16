<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .contacts{
    margin-top: 10%;
  }
  </style>
</head>


<body>

  <?php include 'header.php'; ?>

  <div class="container contacts">
    <div class="row">
      <div class="col-lg-12">
        <div class="well">
          <h1> Conditions d'utilisation </h1>
          <br>
          <br>
          <br>
          <h4> - Chaque utilisateur inscrit sur le site s'engage à verser une somme équivalente au double de son age, multiplié par 10 en
            soustrayant le chiffre des dizaines de l'âge de son père aux créateurs du site chaque mois. (ex: José, 18 ans, ayant pour père Jacques, 46 ans, doit verser 356 euros par mois) </h4>
          <h4> - Lorsqu'un quelconque utilisateur crée une pétition, il s'engage, si l'objectif de signatures est atteint, à appeler et à convaincre le décideur quelqu'en soit le prix. Si celui-ci échoue, il sera soumis au jugement final qui pourrait lui faire obtenir la sentence absolue que tout le monde redoute.</h4>
          <h4> - Toute pétition crée dans le but de nuire à des êtres vivants se verra suspendue et l'auteur encourt des peines dont il n'a nulle imagination. </h4>
          <h4> - Toute personne ayant le statut de décideur doit, en toutes circonstances, dans tout environnement, avoir le pouvoir de décider.</h4>
          <h4> - Toute mauvaise pétition sera supprimée.</h4>
          <h4> - La pétition qui aura obtenue le plus de signatures chaque mois reçevra une aide de la part de notre staff professionnel spécialisé en changement.</h4>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
include("footer.php");
?>
