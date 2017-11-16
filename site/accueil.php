<?php session_start();
include 'functions.php';
$tab_petition=sort_by_popularity();
$tab_cat=display_cat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>


<?php include 'header.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img alt="image_accueil2" src="image_accueil2.jpg">
        <div class="carousel-caption">
          <h1>ASSIGNER.COM </h1>
          <h3>Signer c'est s'engager</h3>
        </div>
      </div>
    </div>
  </div>

    <!--  <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>
    </div>-->

    <!-- Left and right controls -->
    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>-->

<div class="container text-center">
  <br>
  <br>
  <div class="row">



    <div class="col-sm-4">
      <div class="well">
        <h3>Nombre de signatures</h3>
        <h3>
        <?php echo nb_signatures()['signatures']; ?>
      </h3>
      </div>
      <div class="well">
        <a href="incription_page.php"><input type="button" class="btn btn-primary btn-lg" value="Nous rejoindre"></a>

      </div>
    </div>

    <div class="col-sm-5">
      <div class="well">
        <h3> Les plus consultées</h3>
        <?php foreach($tab_petition as $petition){?>
        <div class="row">
          <div class="col-lg-12 text-left">
            <h4><a href="petition.php?id=<?php echo $petition[0]?>"><?php echo utf8_encode($petition[1])?></a></h4>
            <span class="label label-primary"><?php echo utf8_encode($petition[2]);?></span>
            <span class="label label-default"><?php echo utf8_encode($petition[4]);?></span>
            <span class="label label-default"><?php echo utf8_encode($petition[6]);?> signatures sur <?php echo utf8_encode($petition[5]);?> </span>

            <p><?php echo utf8_encode($petition[3]);?></p>
          </div>
        </div>
        <?php }?>


      </div>
    </div>

    <div class="col-sm-3">
      <div class="well">
        <h3>Thèmes</h3>
        <div class="btn-group-vertical" role="group" aria-label="...">
          <?php foreach($tab_cat as $cat){?>
            <a href="tripetition.php?tri=<?php echo utf8_encode($cat[1]) ?> "> <input type="button" class="btn btn-default " value="<?php echo utf8_encode($cat[1]) ?> "> </a>
          <?php } ?>
        </div>
      </div>
    </div>

  </div>
</div><br>

<?php include 'footer.php'; ?>

</body>
</html>
