<?php include_once("inc/init.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="style.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
</head>
<body>
  <header>

    
<!-- <a href="#">R.B MONTAGE</a> -->
    <!-- <div class="logo"><img src="assets/logo.png" alt="Logo" width="200" height="200" ></div>
 -->
<div class="toggle-btn" onclick="myFunction();">
  <span></span>
  <span></span>
  <span></span>
</div>
<div class="logo"><img src="assets/logo.png" alt="Logo" width="500" height="500" >
<a class="logotext" href="index.php">R.B MONTAGE</a>
</div>
  <nav id="nav">
    <ul>

 <?php if(isset($_SESSION['pseudo'])){?>

 <?php if(isset($_SESSION['statut']) && $_SESSION['statut']==1){ ?>
      <h1>Vous etes sur l'espace Admin</h1>
      <li><a href="gestionmembre.php">Liste Membres</a></li>
      <li><a href="profil2.php">Profil Admin</a></li>
      <li><a href="#">Factures Clients</a></li>
      <li><a href="reservation.php">Faire Reservation</a></li>
      <li><a href="deconnexion.php">Deconnexion</a></li>
<?php } else if(isset($_SESSION['statut']) && $_SESSION['statut']==2){  ?>

      <h1>Vous etes sur l'espace Admin</h1>
      <li><a href="profil2.php">Profil Membre</a></li>
      <li><a href="reservation.php">Faire Reservation</a></li>
      <li><a href="#">Factures</a></li>
      <li><a href="deconnexion.php">Deconnexion</a></li>


          
       
<?php }} else { ?>
<li><a href="inscription.php">Inscription</a></li>
          <li><a href="connexion.php">Connexion</a></li>
<?php } ?>
      <!-- <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </ul>
  </nav>
  </header>