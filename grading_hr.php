<?php  
    session_start(); 
    require_once('connect.php');


         

  if($_SESSION['email'] == null){
      header('Location: index.php');
  }
  


  $staff_id=$_GET['id'];
  echo $staff_id;
if(isset($_POST['submit']))        
    {       
          
         
$staff_id= $_GET['id'];
$results = mysqli_query($conn, "UPDATE  appraisalone SET hrsign='SIGNED' WHERE id = '".$staff_id."' ");
  header('Location: ');
         
      
           
            
            
           
 
        
             echo '<br><br>
     <div class=" col-lg-3 col-lg-offset-5">
            <div class="alert alert-default text-center" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              Appraisal Submmited
            </div>
     </div>
            ';
    } 
else
{
     echo '<br><br>
     <div class=" col-lg-3 col-lg-offset-5">
            <div class="alert alert-danger text-center" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              Please fill the form correctly
            </div>
     </div>
            ';
}

?>

<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>  Grading | Portal </title>
        
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
--><div class="navbar navbar-default navbar-fixed-left">
        
  
                             <?php
    
    
             $companyid=$_SESSION['username'];
             echo $companyid;
    
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
              
               <li><a href="admininterface.php">Profile</a></li>            
               <li><a href="sreg.php">Add Staff</a></li>
               <li><a href="historya.php">History</a></li>
               <li><a href="#">Messages</a></li>
               <li><a href="password.php">Settings</a></li>
                  <br>
              
                  <div class="button text-center">
                    <a role="button" id="top-teacher-signup-button" href="logout.php" class="btn btn-danger btn-xs">Sign Out</a>                
                  </div>
          </ul>
</div>                    
    <br>

    <div class="container">
        <div class="col-lg-12 text-center">
              <section id="pay">
		<div class="container text-center">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading"> Evaluation Form!</span>
				Performance Review: 
              
			</h2>
            
          
		 <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-lg-9 col-lg-offset-2">
                <div class="login-panel panel panel-default">                  
                 
                    <div class="panel-body">
                        <form method="post" action="">
                            <fieldset>
                                 <div class="col-lg-12" >
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" width="100%" height="100%">
                                            <thead>
                                                <tr><strong>EMPLOYEE INFO</strong></tr>
                                                
                                               <tr>
                                                    <th>EMPLOYEE'S FIRST-NAME</th>
                                                   <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                  $companyid =$_SESSION['username'];

                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $firstname=$row["firstname"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$firstname' name='firstname'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                               
                                                   <th>EMPLOYEE'S LAST-NAME</th>
                                                   <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];
                                                                  $companyid =$_SESSION['username'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $lastname=$row["lastname"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$lastname' name='lastname'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                </tr>
                                                <tr>
                                                    <th>DEPARTMENT</th>
                                                      <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                  $companyid =$_SESSION['username'];
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE  companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $department=$row["department"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$department' name='department'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                    <th>POSITION-HELD</th>
                                                  <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                  $companyid=$_SESSION['username'];
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $jposition=$row["jposition"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$jposition' name='jposition'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                </tr>
                                                <tr>
                                                    <th>REVIEWER</th>
                                                      <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];
                                                                  $companyid=$_SESSION['username'];
                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $boss=$row["boss"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$boss' name='boss'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                    <th>COMPANY-ID</th>
                                                  <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];
                                                                  $companyid=$_SESSION['username'];
                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $companyid=$row["companyid"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$companyid' name='companyid'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>START GOAL</th>
                                                    <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];
                                                                  $companyid=$_SESSION['username'];
                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $sog=$row["sog"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$sog' name='sog'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                    <th>END GOAL</th>
                                                  <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                  $companyid=$_SESSION['username'];
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $eog=$row["eog"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control' value='$eog' name='eog'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                </tr>
                                                <tr>
                                                    <th>DATE OF REVIEW</th>
                                                      <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                  $companyid=$_SESSION['username'];
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $date=$row["date"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo
                                                                       " <input type='text' class='form-control'  value='$date' name='date'  aria-describedby='email' readonly='true' required> "                                                            ?>          
                                                                            
                                                                </div>
                                                         </td>
                                                </tr>
                                        
                                                
                                                  </thead>   
                                         
                                                

                                        </table>                                  
                                    </div>
                                </div>	  
                                                    
                            </fieldset>
                            <tr><strong>**NOTE** <br> The total mark for this appraisal is 100. This appraisal has 10 questions to score, each evaluation has maximum score of 10 and minimum score of 0..</strong></tr>
                            <hr> <tr><strong>BEHAVIOUR <br> </strong></tr>
                            <hr>
                    <fieldset>
                        <table class="table table-bordered table-hover table-striped" width="100%" height="100%">
                              <thead>
                                  <tr><th>
                                        <strong> INFO</strong>
                                      </th>
                                     
                                    
                                      <th>
                                          <strong>GRADE =  TOTAL SCORE/100</strong>
                                      </th>
                                  </tr>
                          
                            
                              
                                               
                                                <tr>
                                                    <th>GOAL ACHIEVEMENT</th>
                                                   <td>
                                                     <div class="input-group">

                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["goal"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='goal'  value='$goal' readonly='true' required> "  ?>                       
                                                         
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr>
                                  <br>
                                                <tr>
                                                    <th>QUALITY OF WORK</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["qualityofwork"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='qualityofwork'  value='$goal' readonly='true' required> "  ?> 
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr> <tr>
                                                    <th>CREATIVITY</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["creativity"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='creativity'  value='$goal' readonly='true' required> "  ?> 
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr><tr>
                                                    <th>TECHNICAL SKILLS</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["skills"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='skills'  value='$goal' readonly='true' required> "  ?> 
                                                        
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr><tr>
                                                    <th>PUNCTUALITY</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["punctuality"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='punctuality'  value='$goal' readonly='true' required> "  ?> 
                                                        
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr><tr>
                                                    <th>ATTENDANCE</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["attendance"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='attendance'  value='$goal' readonly='true' required> "  ?> 
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr><tr>
                                                    <th>PRODUCTIVITY</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["productivity"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='productivity'  value='$goal' readonly='true' required> "  ?> 
                                                        
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr><tr>
                                                    <th>COMMUNICATION</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["communication"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='communication'  value='$goal' readonly='true' required> "  ?> 
                                                        
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr>
                                                <tr>
                                                    <th>GROUP WORK</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["groupwork"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='groupwork'  value='$goal' readonly='true' required> "  ?> 
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr>
                                                <tr>
                                                    <th>HONESTY</th>
                                                   <td>
                                                     <div class="input-group">
                                                     <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["honesty"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"
                                                         <input type='text' name='honesty'  value='$goal' readonly='true' required> "  ?> 
                                                        
                                                           
                                                     </div>
                                                   </td>
                                               
                                                </tr> 
                                               
                                                <tr>
                                                    <th><mark>GRADE</mark></th>
                                                   <td>
                                                     <div class="input-group">
                                                            <?php
                                                                  $dept  = $_SESSION['dept'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM appraisalone WHERE companyid='$companyid' AND id='$staff_id' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count==1)
                                                                    {
                                                                        while($row=mysqli_fetch_assoc($drake))
                                                                        {
                                                                          
                                                                            $goal=$row["grade"];
                                                                           
                                                                        }
                                                                    }
                                                                        else
                                                                        {
                                                                            echo"not getting company ID";
                                                                        }
                                                            echo"  <input type='text' name='grade'  value='$goal' readonly='true' required> "  
                                                            ?>                                                   
                                                     </div>
                                                   </td>
                                               
                                                </tr>
                                             
                                <tr>
                                                   
                                                   <td>
                                                        <sup> <i>REVIEWER SIGNATURE</i></sup>
                                                        <div class="input-group">
                                                             <input type='text' class='form-control' value='SIGNED' name='rsign'  aria-describedby='email' readonly="true"  required>
                                                        </div>
                                                       
                                                   </td>
                                               
                                </tr>
                                        <tr>
                                                   
                                                   <td>
                                                         <sup><i>HR SIGNATURE</i></sup>
                                                     <div class="input-group">
                                                     <input type='text' class='form-control' value='SIGNED' name='hrsign'  aria-describedby='email' readonly="true" >
                                                     </div>
                                                       
                                                   </td>
                                               
                                         </tr>
                                      
                                 
                            </thead>    
                    </table>
                   </fieldset>
                   <button type='submit' name='submit' id='top-teacher-signup-button' href='#' class='btn btn-success btn- xs'>SUBMIT  <span class='glyphicon glyphicon-ok'></span>              
                                                </button>        
                  
                             </form>
                     </div>
                </div>
            </div>
        </div>
		</div>
	</section>

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
