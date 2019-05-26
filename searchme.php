a
<?php  
    session_start();
    require_once('connect.php');
$email=$_SESSION['username'];

  if($_SESSION['username'] == null){
      header('Location: index.php');
  }
  

?>


<?php
$query = $_GET['search'];
$results = mysqli_query($conn, "SELECT * FROM admin WHERE (firstname LIKE '%".$query."%' ) ");
 if ($results->num_rows > 0){
  while($row = $results->fetch_array()) 
                  {
               echo"<div><strong> Welcome Back <strong><b>". $row['firstname'].  "</b></strong></strong></div> ";
 } 
 }else{
     echo "Hello";
 }
?>

