<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
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
        <h2> Pour nous contacter, voici nos adresses mails : </h2>
        <br>
        <br>
        <h4> Eric Mugnier : eric.mugnier@enseirb-matmeca.fr </h4>
        <br>
        <h4> Alexandre Piquemal : alexandre.piquemal09@enseirb-matmeca.fr </h4>

      </div>
    </div>
  </div>
</div>
</body>
<?php
include("footer.php");
?>
