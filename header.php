<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?></title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="assets/style.css">
</head>
<body>

   <!-- header -->

   <header class="header">
      <div class="artan">
         <img src="assets/images/ghir-HBH2.png" alt="">
         <a href="index.php" class="logo"> Hotel Beni Hamad </a>
      </div>
      <!-- <i class="fas fa-hotel"></i> -->
      <nav class="navbar">
         <a href="index.php">Accueil</a>
         <a href="#about">À propos</a>
         <ul class="list">
            <li class="nav-item menU">
               <a class="nav-link pe-4" href="#reservation">Réservation</a>
               <ul class="submenu">
                 <li><a href="#room">Chambre & Tarifs</a></li>
                 <li><a href="#EVENEMENT">Événement & Salles</a></li>
             </ul>
             </li>
            </ul>
            <a href="#gallery">Gallerie</a>
            <a href="#review">Avis</a>
            <a href="#faq">faq</a>  

 
            <?php if (isset($_SESSION['username']) || isset($_SESSION['user'])) { ?>
                     <a class="nav-link pe-4 " href="profile.php"><img src="" class="circel" alt="img">
                      <?= isset($_SESSION['username']) ? $_SESSION['username'] : $_SESSION['user'] ?></a>        
            <?php } ?>
         <!-- <a href="#reservation" class=""> book now</a> -->
         
          </li>
         </ul>
         <!-- <a href="logout.php" class="btn" id="log"> Registre</a> -->
         <?php if (!isset($_SESSION['username']) && !isset($_SESSION['user'])) { ?>
         <a href="login.php" class="btn" id="log"> Login</a>
         <?php }else{ ?>
         <a href="logout.php" class="btn">Logout</a>
         <?php } ?>
         <?php if (isset($_SESSION['user'])) { ?>
         <a href="admin/index.php" class="btn" id="log"> Admin</a>
         <?php } ?>
         
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
      
   </header>

   <!-- end -->
 
   