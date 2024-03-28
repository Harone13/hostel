
<?php
 $title = 'Hotel Beni Hamad | Profile';

 include 'header.php';
if (!isset($_SESSION['username']) && !isset($_SESSION['user'])) {
   header('location: login.php'); 
   exit();  
} else {  
?>
هنا تقدر دير سيكسيون يشوفها غير لي داير لوغ ان

دير ديزاين و انا ساهل مبعد
<div style="margin-top: 70px;"> </div>


<section class="about" id="about">

<div class="row">

   <div class="image">
      <img src="assets/images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>Profile</h3>
      <p>
      <i class="fa fa-user"></i> Name: <?= isset($_SESSION['username']) ?
       $_SESSION['username'] : $_SESSION['user']; ?> <br>
      <i class="fa fa-envelope"></i> Email: <?= isset($_SESSION['username']) ?
       $_SESSION['username'] : $_SESSION['user']; ?>
      </p>
      <!-- <p>« L'hôtel BENI-HAMAD » bénéficie d’un emplacement privilégié au centre ville de wilaya Bordj Bou Arreridj pas loin de toutes commodités et surtout d’une zone industrielle développée.
         L’hôtel vous réserve une escale somptueux ou vous découvrez le contraste harmonieux de l’aménagement de l’espace ainsi que son intimité et sécurité, sculpté par la lumière qui anime son architecture, parée par le luxe et le raffinement jusqu’aux moindres détails.</p> -->
      <!-- <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.0272260289494!2d4.762933176271358!3d36.06844000860572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128cbdcdb40b0edb%3A0x61cbf6e31cd43b21!2sH%C3%B4tel%20Beni%20Hamad!5e0!3m2!1sfr!2sdz!4v1708106501155!5m2!1sfr!2sdz" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p> -->

        
   </div>
   



</div>

</section>

<div style="margin-top: 70px;"> </div>
  


<?php
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
                  <option value="0">0 adulte</option>
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
   
        </div>
        
         <input type="submit" name="Send" value="Valider" class="btn">

        </form>

   </section>
   <div style="margin-top: 70px;"> </div>
   <!-- end -->



<?php
 include 'footer.php';
?>

<?php
      $data = file_get_contents("php://input");
        $data = json_decode($data);

        if (is_object($data)) {

               //  $cat = $this->load_model('category');
                $sql = "SELECT * FROM chambres WHERE id = :id";
                $arr['msg'] = "$cat->create($data)";
                if (is_array($arr['msg'])) {
                    echo json_encode($arr);
                } else { 
                  //   $arr['type'] = "Add";
                  //   $arr['msg_type'] = "info";
                    $arr['msg'] = "$cat->get_all()";
                  //   $arr['data'] = $cat->get_all("sub");
                    echo json_encode($arr);
                }
         }


}       
 ?>    