ss<?php  
    session_start(); 
    require_once('connect.php');


         
/*
  if($_SESSION['username'] == null){
      header('Location: index.php');
  }
  */

?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title> Portal </title>
        
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
    
    
             $email=$_SESSION['email'];
            
        //  var_dump($email);

  

             $user=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email'");

                  while($row = $user->fetch_array()) 
                  {

            echo "
            <br>
            
            <a class='navbar-brand 'href='#'>Welcome <strong>". $row['firstname']." </strong></a>";
             
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
              
               <li><a href="admininterface.php">Profile</a></li>            
               <li><a href="sreg.php">Add Staff</a></li>
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
                    <h1 class="page-header">Applicant details</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                            <?php
                                $email=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                     echo"<div><strong> Welcome Back <strong><b>". $row['lastname'].  "</b></strong></strong></div> ";
                                    
                                    
                                 }
                                ?>
                      
                    </div>
                </div>
                <!--end  Welcome -->
            </div>           

            <div class="row">
                

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" width="100%" height="100%">
                                            <thead>
                                               
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><b>Surname</b></td>
                                                    <?php
                                $email=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['lastname']. " </td ";
                                    
                                 }
                                ?>
                                
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>First Name</b></td>
                                                      <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['firstname']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>Middle Name</b></td>
                                                      <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['middlename']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>Email</b></td>
                                                      <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['email']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>Department</b></td>
                                                      <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['department']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                 <tr>
                                                    
                                                    <td><b>Date of birth</b></td>
                                                      <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['dob']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>Address</b></td>
                                                      <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['address']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                              
                                                 <tr>
                                                    
                                                    <td><b>Gender</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['gender']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                               
                                               
                                                 <tr>
                                                    
                                                    <td><b>Company ID</b></td>
                                                        <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['companyid']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                
                                               
                                                 <tr>
                                                    
                                                    <td><b>Phone Number</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['phoneno']. " </td ";
                                    
                                 }
                                ?>
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>Boss</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['boss']. " </td ";
                                    
                                 }
                                ?>
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>Job position</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['jposition']. " </td ";
                                    
                                 }
                                ?>
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>About</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['about']. " </td ";
                                    
                                 }
                                ?>
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>State</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['state']. " </td ";
                                    
                                 }
                                ?>
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>Picture</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['Photo']. " </td ";
                                    
                                 }
                                ?>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>Application ID</b></td>
                                                       <?php
                                $matricno=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM applicant WHERE email='$email' ");
                                if($row=$moi->fetch_assoc())
                                {
                                    echo" <td>". $row['applicantid']. " </td ";
                                    
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
