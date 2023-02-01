<?php 
include 'db.php';

$sql = "SELECT * FROM `tbl_student_bavi` where studid='$_POST[id]'";
$result = $db->query($sql);
$row = $result->fetch_assoc();

echo json_encode($row);
?>