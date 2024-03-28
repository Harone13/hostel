<?php

include 'header.php';
include 'connect.php';
?>


<?php


?>



<?php
           $sql = "SELECT * FROM reservations";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll();
    
    ?>
<div class="row mt">
  <div class="col-md-12">
    
  <h2 class="text-center">
      هنا يجي جدول ريزارفاسيون  
  </h2>
  <br>

    <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> All Reservations </h4><hr>
        <table class="table table-striped table-advance table-hover">
          
        <!-- <table class="table table-striped table-bordered">
            <div class="table-responsive"> -->
            <thead>                
            <tr>
                 <th>Nom</th>
                 <th>Email</th>
                 <th>Arriver</th>
                 <th>Quitter</th>
                 <th>Adultes</th>
                 <th>Enfants</th>
                 <th>Chambres</th>
                 <th>Control</th>
            </tr>
            </thead>
            <tbody>

<?php
            foreach ($rows as $row) {
              echo '<tr>';
              echo '<td>' . $row['username'] . '</td>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td>' . $row['arriver'] . '</td>';
              echo '<td>' . $row['quitter'] . '</td>';
              echo '<td>' . $row['adults'] . '</td>';
              echo '<td>' . $row['enfants'] . '</td>';
              echo '<td>' . $row['chambre'] . '</td>';
              echo '<td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
              </tr>';

            }
        
        ?>

          </tbody>
        </table>
    </div>
    </div>
    </div>


    <br> <br><br><br><br><br><br><br><br><br>
<?php

include 'footer.php';
?>