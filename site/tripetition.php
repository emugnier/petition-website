<?php session_start();
include("functions.php");
$cat=display_cat();
if(isset($_GET['tri'])){
  if($_GET['tri']==0){
    $tab_petition=sort_by_popularity();
  }
  elseif ($_GET['tri']==1) {
    $tab_petition=sort_by_date();
  }
  elseif ($_GET['tri']==2) {
    $tab_petition=sort_by_categorie();}

    foreach ($cat as $key => $value):
      if ($_GET['tri']==utf8_encode($value[1])) {
      $tab_petition=sort_categorie($value[1]);}
     endforeach;


}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ASSIGNER.COM</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<?php
include("header.php");
?>

<div class="container text-center petition">
  <div class="well">
    <h1> Pétitions</h1>

      <br>
  <p>
            <div class="btn-group">
    <a href="tripetition.php?tri=0"> <input type="button" class="btn btn-primary btn-lg" value="Les plus signées"> </a>
    <a href="tripetition.php?tri=1" > <input type="button" class="btn btn-primary btn-lg" value="Les plus récentes"> </a>
        <a href="tripetition.php?tri=2" > <input type="button" class="btn btn-primary btn-lg" value="Par thèmes"> </a>

          <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Thèmes <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <?php foreach ($cat as $key => $value):?>
              <li><a href="tripetition.php?tri=<?php echo utf8_encode($value[1]) ?>"><?php echo utf8_encode($value[1]) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>



  <div class="row">



<div class="col-lg-9">
  <?php foreach($tab_petition as $petition){?>
  <div class="row">
    <div class="col-lg-12 text-left">
      <h4><a href="petition.php?id=<?php echo $petition[0]?>"><?php echo utf8_encode($petition[1]);?></a></h4>
      <span class="label label-primary"><?php echo utf8_encode($petition[2]);?></span>
      <span class="label label-default"><?php echo utf8_encode($petition[4]);?></span>
      <span class="label label-default"><?php echo utf8_encode($petition[6]);?> signatures sur <?php echo utf8_encode($petition[5]);?> </span>
      <p><?php echo utf8_encode($petition[3]);?></p>
    </div>
  </div>
  <?php }?>

</div>


</div>
</div>
</div>
<?php
include("footer.php");
?>
