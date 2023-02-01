<?php 
include 'db.php';

if(isset($_POST['studmobile'])){
    extract($_POST);

    $check="SELECT * FROM `tbl_student_bavi` WHERE `studmobile` = '$_POST[studmobile]' AND `studid` != '$_POST[studid]'";
    
    $result = $db->query($check);
    $data = mysqli_fetch_array($result, MYSQLI_NUM);
    if($data >= 1) {
        echo '1';
    }    
    else if($data  == 0) {
    $sql = "update `tbl_student_bavi` set `studname`='$studname',`studdob`='$studdob',`studgender`='$studgender',`studmobile`='$studmobile',`studemail`='$studemail',`studcourseid`='$studcourseid' where studid='$studid'";
    if($db->query($sql)){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Data Updated Successfully!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        echo "Data Not updated";
    }
}
}

?>