<?php  
    session_start();
    require_once('connect.php');
$email=$_SESSION['username'];

 // if($_SESSION['username'] == null){
  //    header('Location: index.php');
   //}
  


        

      /*  //The below code is not in use anymore
           //$rand=rand(123456,987654);
            //$str='abcdefghijklmnopqrstuvwxyz01234567891011121314151617181920';
            //$shuffle=str_shuffle($str);
            //$stu=substr($shuffle,0,5);

            //Checking database for repeated values

            $id= mysqli_query($conn,"SELECT * FROM companysignup WHERE companyid='$companyid' "); 
            $em= mysqli_query($conn,"SELECT * FROM companysignup WHERE email='$email' "); 
            $ofno=mysqli_query($conn,"SELECT * FROM companysignup WHERE officeno='$officeno' "); 
            $com=mysqli_query($conn,"SELECT * FROM companysignup WHERE fullname='$fullname' "); 
       //    $rep=mysqli_query($conn,"SELECT * FROM companysignup WHERE password='$password' "); 


            //if statement to check if there's an existing users greater than 0
         
         if ($_POST['password']!= $_POST['rpassword'])
 
        {
             $message8 = "R E G I S T R A T I O N  F A I L E D \\n P A S S W O R D   D O E S N T   M A T C H .";
       echo "<script type='text/javascript'>alert('$message8');</script>";
        }           
           elseif($id->num_rows > 0) 
        {
             $message = "R E G I S T R A T I O N  F A I L E D \\nI D    T A K E N .";
       echo "<script type='text/javascript'>alert('$message');</script>";
        }  
            elseif($em->num_rows > 0) 
        {
            $message1 = "R E G I S T R A T I O N  F A I L E D \\nE M A I L    A l R E A D Y    E X I S T  .";
       echo "<script type='text/javascript'>alert('$message1');</script>"; 
        }
             elseif($ofno->num_rows > 0) 
        {
            $message3 = "R E G I S T R A T I O N  F A I L E D \\n  P H O N E    N U M B E R    E X I S T  .";
       echo "<script type='text/javascript'>alert('$message3');</script>"; 
        }
            elseif($com->num_rows > 0) 
        {
            $message2 = "R E G I S T R A T I O N  F A I L E D \\n  C O M P A N Y   N A M E    A l R E A D Y    E X I S T  .";
       echo "<script type='text/javascript'>alert('$message2');</script>"; 
        }            
            else 
        {
             $result1=mysqli_query($conn,"INSERT INTO staffsignup (fullname,phoneno,lastname,address,password,email,department,dob,gender,companyid)Values ('$fullname','$phoneno','$lastname','$address','$password','$email','$department','$dob','$gender','$companyid')");   
              $message4 = "R E G I S T R A T I O N    S U C C E S S F U L.";
       echo "<script type='text/javascript'>alert('$message4');</script>";
        }
             
    }   */
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title> Search| Portal </title>
        
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css"/>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>

        <script src="bootstrap-3.3.7/js/jquery-3.1.1.min.js"></script>
        <script src="bootstrap-3.3.7/js/jquery-3.1.1.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        
        <style>


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:white;
    overflow-x: hidden;
    transition: 0.10s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
 .navbar-fixed-left {
  width: 140px;
  position: fixed;
  border-radius: 0;
  height: 100%;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width: 139px;
}

.navbar-fixed-left + .container {
  padding-left: 160px;
}

/* On using dropdown menu (To right shift popuped) */
.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
  margin-top: -50px;
  margin-left: 140px;
}
</style>
    </head>

<body>
      <!--<div class="container">
        <div class="vertical-menu navbar navbar-default navbar-fixed-top" style="position:absolute fixed; width:100%; height:20px; ">
                <div id="navbar-links">
                    <div class="header-top">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="customer-state signed-in hidden-phone pull-right" id="fill">
                                    <br>
                                </div>
                              </div>
    
                                <a href="#"  onclick="openNav()" id="dp" class="dropdown-toggle" data-toggle="dropdown" role="menu" role="button" aria-expanded="false" aria-label="Expand Side Navigation" style="cursor: pointer;position: relative;"><svg viewBox="0 0 24 10" width="20px" height="16px" class="_style_3fWswA" style="transition: all 400ms ease; color: rgb(0, 0, 0); width: 24px; height: 24px; font-size: 20px; margin-left: 30px; margin-right: 400px; margin-top:-20px;padding:20px; fill: currentcolor;"><path d="M0 1h24M0 7h24M0 13h24" fill="none" stroke="currentColor" stroke-width="2"></path></svg>
                                </a>  

                               
                         </div>
                         <div class="hidden-lg hidden-sm text-center" id="eass">
						      <h4>EAS</h4>
					     </div>
                       
                                
                        </div>
                    </div>
             
                </div>
            </div>
-->
<div class="navbar navbar-default navbar-fixed-left">
        <?php
            $value=$_SESSION['username'];
             $user=mysqli_query($conn,"SELECT * FROM sudo WHERE name='$value' ");

                  while($row = $user->fetch_assoc()) 
                  {

            echo "
            <br>
            <img src='ikenna.jpg' class='img-thumbnail' width='135' height='50'>
            <a class='navbar-brand' href='#'>Welcome <strong>". $row['name']." </strong></a>";  
                  }
         ?>  
  
                           
          <ul class="nav navbar-nav">
              
              <hr>

                <div class="user-text-online text-center">
                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                </div>
              <br>
              
              <li class="sidebar-search">
                        <!-- search section-->
                  <form action="" method="post">
                        <div class="input-group custom-search-form">
                           Search: <input type="text" name="search" class="form-control" placeholder="Search...">
                             <div class="button text-center">
                               <a>  <button type="submit" name="search" id="top-teacher-signup-button" href="#" class="btn btn-default btn-xs">Submit  <span class="glyphicon glyphicon-user">                 </span>              
                                   </button> </a> 
                            </div>                  
                        </div>
                  </form>
                        <!--end search section-->
              </li>
              
               <li><a href="admininterface.php">Profile</a></li>            
               <li><a href="scontact.php">Add Staff</a></li>
               <li><a href="history.php">History</a></li>
               <li><a href="form.php">Messages</a></li>
               <li><a href="password.php">Settings</a></li>
                  <br>
              
                  <div class="button text-center">
                    <a role="button" id="top-teacher-signup-button" href="logout.php" class="btn btn-danger btn-xs">Sign Out</a>                
                  </div>
          </ul>
</div>
                                
    <br>
    <div class="container text-center pull-right">
  
            
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Search</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                            <?php
                                $name=$_SESSION['username'];
                                $moi=mysqli_query($conn,"SELECT * FROM sudo WHERE name='$name' ");
                                if($row=$moi->fetch_assoc())
                                {
                                     echo"<div><strong> Welcome Back <strong><b>". $row['name'].  "</b></strong></strong></div> ";
                                    
                                    
                                 }
                        
                                ?>
                           <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" width="100%" height="100%">
                                            <thead>
                                               
                                            </thead>
                                                <tbody>
                                                    <tr>

                                                                    <td><b>Job</b></td>
                                                                                <?php
																if(isset($_POST['search']))
																{
                                                               
																	$namee = $_POST['search'];
                                                            $moi=mysqli_query($conn,"SELECT * FROM admin WHERE firstname='$namee' ");
																if($row=$moi->fetch_assoc())
																	{
																	echo" <td>". $row['firstname']. " </td ";

																	}
																}
                                                           
                                                            ?>

                                                     </tr>
                                                    



                                             </tbody>
                                       </table>
                                                </div>

                                </div>


                            </div>
                         </div>
                
                      
                    </div>
                </div>
                <!--end  Welcome -->
            </div>   
               
        </div>
    </div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "190px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "190px";
}
</script>
    
<script type="text/javascript" src="JavaScript/bootstrap.js" ></script>
<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
<script type="text/javascript" src="JavaScript/npm.js"></script>


</body>
</html>
