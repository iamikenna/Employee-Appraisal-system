<?php  
    session_start();
    require_once('connect.php');
$email=$_SESSION['username'];

  if($_SESSION['username'] == null){
      header('Location: index.php');
  }
  

?>

<?php

$idey = $_GET['id'];
$results = mysqli_query($conn, "UPDATE  staffsetgoal SET accepted='TRUE' WHERE id = '".$idey."' ");
  header('Location: viewgoals.php');

?>