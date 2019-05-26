<?php
$servername = "localhost";
$username = "root";
$password = "";
$datababse="eas";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$datababse);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else{
//  
//
//
//    $message = "D A T A B A S E    C O N N E C T E D";
//  echo "<script type='text/javascript'>
//          alert('$message');
//        </script>";
//      
      
}

?>
