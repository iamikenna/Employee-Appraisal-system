<?php
include_once('connect.php');

if(isset($_POST['submit']))
{
$email = $_POST['email'];
$password = $_POST['password'];

}
$drake = mysqli_query($conn, "SELECT * FROM companysignup WHERE email = '$email' AND password = '$password'  ");
if ($drake->num_rows > 0) {
    session_start();

    header('Location: companyinterface.php');
} else 
{ 

   $message = "E m a i l  or  P a s s w o r d  incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
