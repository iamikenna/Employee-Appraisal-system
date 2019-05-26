<?php  
    session_start();
    require_once('connect.php');
$email=$_SESSION['username'];

  if($_SESSION['username'] == null){
      header('Location: index.php');
  }
  

?>

<?php
$cat = $_GET['id'];
//$man = mysqli_query($conn, "SELECT FROM admin WHERE id = '$cat' ");
$results = mysqli_query($conn, "SELECT * FROM admin WHERE (id ='$cat' ) ");
 if ($results->num_rows > 0)
 {
  while($row = $results->fetch_array()) 
                  {
               echo"<div class='col-lg-6>'<div class=' text-center'><strong><strong><b>". $row['firstname'].  "        ".    "            "."".$row['lastname'].  "</b></strong></strong>
<a href='sanchez.php?id=".$row['id']."'> </a></div></div> <br><br>";
 }
 }
// var_dump($man);
// var_dump($cat);
//if ($man->num_rows == 1){
//  while($row = $man->fetch_array()) 
//                  {
//                    
//              echo"<div><strong><strong><b>". $row['firstname'].  "        ".    "            "."".$row['lastname'].  "</b></strong></strong>
//<a href='sanchez.php?id=".$row['id']."'>  <button type='submit'>Delete</button></a><a href='getdetails.php?id=".$row['id']."'>  <button type='submit'>Get Details</button></a></div> <br><br>";
// }
// }

?>