<?php  
    session_start();
    require_once('connect.php');



                              
 
       
                      if(isset($_SESSION['username']))
                      {
                            $email=$_SESSION['username'];
                               $user=mysqli_query($conn,"SELECT * FROM companysignup WHERE email='$email' ");  

                                if ($user->num_rows > 0)
                         {
                                $email=$_SESSION['username'];

                              header('location:select.php');
                          }
                          
                      }
                          
                    
                           
  
/*
if($_SESSION['id'] == null)
{
      Header('Location:id.php');
  }
*/

?>