<?php 
include 'db.php';

$sql = "Delete from `tbl_student_bavi` where studid='$_POST[id]'";
if($db->query($sql)){
    
    
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> Data deleted Successfully!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
} else {
    echo 0;
}