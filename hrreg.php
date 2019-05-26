<?php  
    session_start();
    require_once('connect.php');
$email=$_SESSION['username'];

  if($_SESSION['username'] == null){
      header('Location: index.php');
  }
  


if(isset($_POST['submit']))        
    {       
            $firstname=$_POST['firstname'];
            $phoneno=$_POST['phoneno'];
            $lastname=$_POST['lastname'];
            $address=$_POST['address'];      
            $password=$_POST['password'];
          
            $rpassword=$_POST['rpassword'];
            $email=$_POST['email'];
            $department=$_POST['department'];            
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $jposition=$_POST['jposition'];
            $companyid=$_POST['companyid'];
  
        
          $result1=mysqli_query($conn,"INSERT INTO admin (firstname,phoneno,lastname,address,password,email,department,dob,gender,companyid,jposition)Values ('$firstname','$phoneno','$lastname','$address','$password','$email','$department','$dob','$gender','$companyid','$jposition')");   
              $message4 = "R E G I S T R A T I O N    S U C C E S S F U L.";
       echo "<script type='text/javascript'>alert('$message4');</script>";
        
    }
        

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
		<title> Add HR | Portal </title>
        
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
            <img src='emem.jpeg' class='img-thumbnail' width='135' height='50'>
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
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                             <div class="button text-center">
                                 <a role="button" id="top-teacher-signup-button" href="#" class="btn btn-default btn-xs">Submit  <span class="glyphicon glyphicon-user">                 </span>              
                                 </a> 
                            </div>                  
                        </div>
                        <!--end search section-->
              </li>
              
               <li><a href="sudointerface.php">Profile</a></li>            
               <li><a href="hrreg.php">Add HR</a></li>
               <li><a href="#">History</a></li>
               <li><a href="#">Messages</a></li>
               <li><a href="spassword.php">Settings</a></li>
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
                    <h1 class="page-header">Add HR</h1>
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
                      
                    </div>
                </div>
                <!--end  Welcome -->
            </div>           

           <div id="con">
    <div class="container">
		<div class="class-hr-label text-center ">
            <h3 id="joini"><strong>Admin Registration !</strong></h3>						
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
									<div class="class-hr-label text-center hidden-xs">
											<h4 id="id-hr-label-text"><i class="fa fa-user-plus"></i></h4>
									</div>            
					<form id="id-signup-form" method="post" action="">   
                                             <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">                                                   
                                                    <div class="form-group">
																	<label for="id-fullname">Company ID</label>	
																	<div class="input-group">                                                                        
                                                                            <input type='text' class='form-control' placeholder='E.g 246ab4 (6 characters only)' name='companyid' id='id-fullname' aria-describedby='fullname' >                                                                
																			<span class='input-group-addon'><span class='glyphicon glyphicon-lock'></span>
                                                                               
																	</div>
												    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-fullname">Job Position </label>
																	<div class="input-group">
																			<input type="text" class="form-control" value="hr" name="jposition" id="id-fullname" aria-describedby="fullname" readonly="true" required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															</div>
													</div>
                                                
                                            </div>
											<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-fullname">First name</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="Full Name" name="firstname" id="id-fullname" aria-describedby="fullname"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															</div>
													</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-matric-no">Last name</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="Last name" name="lastname" id="id-matric-no" aria-describedby="matric_no"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															</div>
													</div>
											</div>                            
							             <div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-mobile-number">Password</label>
																	<div class="input-group">
																			<input type="password" class="form-control" placeholder="Enter a password" name="password" id="id-mobile-number" aria-describedby="mobile_number" required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span>
																	</div>
															</div>
													</div>
                                                     <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-mobile-number"> Verify Password</label>
																	<div class="input-group">
																			<input type="password" class="form-control" placeholder="Re-enter password" name="rpassword" id="id-mobile-number" aria-describedby="mobile_number" required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span>
																	</div>
															</div>
													</div>												
                                            </div>
							                 <div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-mobile-number">Phone number</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="Phone number" name="phoneno" id="id-mobile-number" aria-describedby="mobile_number" required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
																	</div>
															</div>
													</div> 
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
												        <div class="form-group">
																	<label for="id-matric-no">Email</label>
																	<div class="input-group">
																			<input type="email" class="form-control" placeholder="Email" name="email" id="id-matric-no" aria-describedby="matric_no"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
																	</div>
												        </div>
													</div>
                                             </div>
                                            <div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
                                                                <label for="id-matric-no">Section</label>
																	<div class="input-group">											
                                                                        <input list="browsers"  class="form-control" name="department" value="hr" d="id-matric-no" readonly="true" aria-describedby="matric_no"required />
                                                                                                                                         
																			<span class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span>
																	</div>
															</div>
													</div>
                                                     <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
												        <div class="form-group">
																	<label for="id-matric-no">Date of birth</label>
																	<div class="input-group">
																			<input type="date" class="form-control" placeholder="Date of birth" name="dob" id="id-matric-no" aria-describedby="matric_no"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
																	</div>
												        </div>
													</div>
                                             </div>
                                            
                                        
											<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
															<div class="form-group">
																	<label for="id-address">Home address</label>
																	<div class="input-group">
																			<textarea class="form-control" placeholder="Home address" name="address" id="id-address" aria-describedby="address" required></textarea>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
																	</div>
															</div>
													</div>
                                                     <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">                 
                                                        <strong>Gender: </strong> 

                                                        <input type="radio" name="gender" value="female" required>Female
                                                        <input type="radio" name="gender" value="male" required>Male   
                                                     </div>
											</div>								
									 									
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12 col-lg-12 text-center" id="join">
											 <button id="id-signup-btn" type="submit" name="submit" class="btn btn-danger btn-sm ">JOIN   <span class="glyphicon glyphicon-lock"></span></button>
                                            <br><br>
<!-- 										
                                            <p style=text-align;center>Already have an Account?</p>
									    </div>
                                                                        
                                         <div class="button text-center">
                                            <a role="button" id="top-teacher-signup-button" href="companysignin.php" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-user"></span> Sign In</a>                
                                        </div>                -->
                                  
                                    </div>
						</form>
                                  
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
