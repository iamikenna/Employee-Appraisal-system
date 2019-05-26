<?php  
    session_start(); 
    require_once('connect.php');


         

  if($_SESSION['email'] == null){
      header('Location: index.php');
  }
  

?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title> View Appraisal | Portal </title>
        
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/template.css" />

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
    
    
             $companyid=$_SESSION['username'];
    
        $email=$_SESSION['email'];
        $dept=$_SESSION['dept'];
    
    
            
        
        
            
        

  

             $user=mysqli_query($conn,"SELECT * FROM admin WHERE companyid='$companyid' AND email='$email'  ");

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
                  <form action="admininterfacesearch.php" method="GET">
                        <div class="input-group custom-search-form">
                            <input type="text" name="search" class="form-control" placeholder="Search...">
                             <div class="button text-center">
                                 <button type="submit" name="setgo" id="top-teacher-signup-button" href="#" class="btn btn-default btn-xs">Submit  <span class="glyphicon glyphicon-user"></span>              
                                 </button> 
                            </div>                  
                        </div>
                      </form>
                        <!--end search section-->
              </li>
              
               <li><a href="admin.php">Profile</a></li>            
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
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
              <section id="pay">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Your ticket summary!</span>
				Full Booking details: 
              
			</h2>
            
            <div class="item active">
						
						<a href="#nino-story" class="nino-btn">Get started</a>
					</div>
		 <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                 <?php
                                     
                    
                                 $mee=mysqli_query($conn,"SELECT * FROM book WHERE firstname='$firstname' ");

                                    
                                      while($row = $mee->fetch_assoc()) 
                                      {
                                        $refno       =  $row['refno'];
                                        $purpose     =  $row['purpose'];
                                        $doa         =  $row['doa'];
                                        $dod         =  $row['dod'];
                                        $tod         =  $row['tod'];
                                        $toa         =  $row['toa'];
                                        $occupation  =  $row['occupation'];
                                        $industry    =  $row['industry'];
                                        $destination =  $row['destination'];
                                        $amount      =  $row['amount'];
                                        
//                                        $ref = "<span class='info'> ".$refno."</span>";
                                      
                                        $disRef = " <p><a class='' href=''>  Name :<strong>"." ".$firstname." ".$lastname." "." <br>"
                                        ."Reference No : ".$refno." <br>" 
                                        ."Purpose : ".$purpose." <br>"
                                        ."Industry :".$industry." <br>"
                                        ."Destination : ".$destination." <br>"
                                        ."Occupation : ".$occupation." <br>"
                                        ."Date of Depature: ".$dod." <br>"
                                        ."Time of Depature: ".$tod." <br>"
                                        ."Date of Arrival: ".$doa." <br>"
                                        ."Time of Arrival: ".$toa." <br>"
                                         ."Ticket fee: ".$amount." <br>"
                                            
                                            ."
                                        
                                        </a></p>";
                                      }
                                                
                             ?>  		
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                  <div class="form-group">
								        <label for="id-fullname">
                                            <?php 
                                                if(isset($disRef))
                                                echo $disRef;
                                            ?>
                                      
                                        </label>
                                      
                                        		
                                            
																	
                                              </div>
										
                                      
																		
									 									
								<div class="button text-center">
                                            <a role="button" id="top-teacher-signup-button" href="logout.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-user"></span> Sign out</a>                
                                        </div>               
                                    </div> 
                                                    
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</section>

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
