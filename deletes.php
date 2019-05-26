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
$results = mysqli_query($conn, "DELETE FROM staffsignup WHERE id = '".$idey."' ");
  header('Location: admininterface.php');
?>