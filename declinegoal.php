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
$man = mysqli_query($conn, "DELETE FROM acceptgoal  WHERE id= '".$idey."' ");
$results = mysqli_query($conn, "DELETE FROM staffsetgoal  WHERE id= '".$idey."' ");


  header('Location: viewgoals.php');

?>

