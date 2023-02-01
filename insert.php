<?php 
include 'db.php';

if(isset($_POST['studmobile'])){
    extract($_POST);

    $check="SELECT * FROM `tbl_student_bavi` WHERE `studmobile` = '$_POST[studmobile]'";
    
    $result = $db->query($check);
    $data = mysqli_fetch_array($result, MYSQLI_NUM);

    if($data >= 1) {
      
        echo '1';
    }
    
    else if($data  == 0) {
    
      $sql = "INSERT INTO `tbl_student_bavi`(`studname`,`studdob`,`studgender`,`studmobile`,`studemail`,`studcourseid` ) VALUES ('$studname','$studdob','$studgender','$studmobile','$studemail','$studcourseid')";
      if($db->query($sql)){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Data inserted.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      } else {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Data Not Inserted.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    }   
    
}
?>