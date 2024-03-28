
<?php

// include 'header.php';
include 'admin/connect.php';

if (isset($_POST['Send'])) {
   $Nom = $_POST['name'];
   $Email = $_POST['email'];
   $Arriver = $_POST['arriver'];
   $Quitter = $_POST['quitter'];
   $Adultes = $_POST['adultes'];
   $Enfants = $_POST['enfants'];
   $Chambres = $_POST['chambres'];
   // $TypeDC = $_POST['TypeDC'];
   
   $addData = $conn->prepare("INSERT INTO reservations(username, email, arriver, quitter, adults, enfants, chambre)
   VALUES('$Nom','$Email','$Arriver','$Quitter','$Adultes','$Enfants','$Chambres')"); //,'$TypeDC'
   var_dump($addData);
   
   if ($addData->execute()) {
       echo 'DONE';
    }else{
      echo 'NOTs GOOD';
    }
}
   
?>

<div style="margin-top: 70px;"> </div>

   <section class="reservation" id="reservation">
       
      <h1 class="heading">Réservation</h1>
      
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        
      <div class="container">

            <div class="box">
                <p>Nom <span>*</span></p>
                <input type="text" name="name" class="input" placeholder="votre nom svp">
            </div>
            
            <div class="box">
                <p>email <span>*</span></p>
               <input type="text" name="email" class="input" placeholder="votre email svp">
            </div>

            <div class="box">
               <p>Arriver <span>*</span></p>
               <input type="date" name="arriver" class="input">
            </div>
            
            <div class="box">
               <p>Quitter <span>*</span></p>
               <input type="date" name="quitter" class="input">
            </div>

            <div class="box">
               <p>Adultes <span>*</span></p>
               <select name="adultes" class="input">
                  <option value="1">1 adulte</option>
                  <option value="2">2 adultes</option>
                  <option value="3">3 adultes</option>
                  <option value="4">4 adultes</option>
                  <option value="5">5 adultes</option>
                  <option value="6">6 adultes</option>
                </select>
            </div>

            <div class="box">
                <p>Enfants <span>*</span></p>
                <select name="enfants" class="input">
                  <option value="0">0 Enfant</option>
                  <option value="1">1 Enfant</option>
                  <option value="2">2 Enfants</option>
                  <option value="3">3 Enfants</option>
                  <option value="4">4 Enfants</option>
                  <option value="5">5 Enfants</option>
                  <option value="6">6 Enfants</option>
               </select>
            </div>

            <div class="box">
               <p>type de chambre <span>*</span></p>
               <select name="chambres" class="input">
                  <option value="1">Chambre single</option>
                  <option value="2">Chambre double</option>
                  <option value="3">suite junior single</option>
                  <option value="4">suite senior single</option>
                  <option value="5">suite junior double</option>
                  <option value="6">suite senior double</option>
                </select>
            </div>

            <!-- <div class="box">
               <p>Type de chambre <span>*</span></p>
               <select name="TypeDC" class="input">
                   <option value="1">Chambre single</option>
                   <option value="2">Chambre double</option>
                   <option value="3">suite junior single</option>
                  <option value="4">suite senior single</option>
                  <option value="5">suite junior double</option>
                  <option value="6">suite senior double</option>
               </select>
            </div> -->
   
        </div>
        
         <input type="submit" name="Send" value="Valider" class="btn">

        </form>

   </section>
   <div style="margin-top: 70px;"> </div>
   <!-- end -->

<?php   
      //   include 'footer.php';
    ?>    
