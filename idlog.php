<?php
include_once('connect.php');

if(isset($_POST['submit']))
{
    $companyid = $_POST['companyid'];
}
$drake = mysqli_query($conn, "SELECT * FROM companysignup WHERE companyid = '$_POST['companyid']' ");
if ($drake->num_rows > 0) {
    session_start();

    header('Location:select.php');
} 
?>
