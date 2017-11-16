<? if(!isset($_SESSION['connecte'])){
  $_SESSION["connecte"]=false;
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="accueil.php">ASSIGNER.COM </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <!--  <ul class="nav navbar-nav">

        <li><a href="#">Lancer un pétition</a></li>
        <li><a href="#">Signer</a></li>
      </ul>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="set_petition.php">Lancer une pétition</a></li>
        <li><a href="tripetition.php?tri=0">Signer</a></li>
        <?php if ($_SESSION['connecte']==true){
          ?>
         <li><a href="profil.php">Profil</a></li>
         <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in"></span>Déconnexion</a></li>
      <?php }
      else{ ?>
        <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Se Connecter</a></li>

      <?php } ?>
      </ul>
    </div>
  </div>
</nav>
