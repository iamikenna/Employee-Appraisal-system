<?php  
    session_start();
    require_once('connect.php');
// $email=$_SESSION['username'];

//   if($_SESSION['username'] == null){
//       header('Location: index.php');
//   }
  

?>

<?php

$staff_id = $_GET['id'];


$results = mysqli_query($conn, "UPDATE  appraisalone SET hrsign='SIGNED' WHERE id = '".$staff_id."' ");
  header('Location: appraisal_hr.php');

?>