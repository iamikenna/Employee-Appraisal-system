<?php  
    session_start(); 
    require_once('connect.php');


         

  if($_SESSION['email'] == null){
      header('Location: index.php');
  }
  
$email  = $_SESSION['email'];


if(isset($_POST['submitt']))        
    {       
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $boss=$_POST['boss'];
            $jposition=$_POST['jposition'];
            $department=$_POST['department'];  
            $goal1=$_POST['goal1']; 
            $goal2=$_POST['goal2'];        
            $goal3=$_POST['goal3'];
            $sog=$_POST['sog'];
            $eog=$_POST['eog'];
            $companyid=$_POST['companyid'];
            $staff_id = $_SESSION['id'];
       
  
           
         
       
             $result1=mysqli_query($conn,"INSERT INTO staffsetgoal (companyid,firstname,lastname,boss,jposition,department,eog,sog,goal1,goal2,goal3,staff_id)Values ('$companyid','$firstname','$lastname','$boss','$jposition','$department','$eog','$sog','$goal1','$goal2','$goal3', '$staff_id')");   
            
    echo ' <br>
    <div class="row">
        <div class="col-lg-5 col-lg-offset-4">
            <div class="alert alert-successful pull-right text-center" style="width:500px;padding-top:2px;margin:52px" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              Goal Set successfully
            </div>
        </div>
    </div>
    '
     ;
       
    }
     var_dump( $_SESSION['id']);

    

?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title> Set goal | Portal </title>
        
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
    
    
             $companyid=$_SESSION['username'];
        $email=$_SESSION['email'];
            
          // var_dump($email);

  

             $user=mysqli_query($conn,"SELECT * FROM staffsignup WHERE companyid='$companyid' AND email='$email'");

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
              
               <li><a href="staffinterface.php">Profile</a></li>            
<!--               <li><a href="#">View appraisal</a></li>-->
           
               <li><a href="setgoalstaff.php">Set Goal</a></li>
               <li><a href="history.php">History</a></li>
               
               <li><a href="password.php">Settings</a></li>
                  <br>
              
                  <div class="button text-center">
                    <a role="button" id="top-teacher-signup-button" href="logout.php" class="btn btn-danger btn-xs">Sign Out</a>                
                  </div>
          </ul>
</div>
                                
    <br>
   
    <div class="container text-center pull-right">
   <div class="jumbotron">
            
			<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Set Goals</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                            <?php
                                $email=$_SESSION['email'];
                                $moi=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
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
                                          <form method="post" action="">
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><b>EMPLOYEE'S FIRST-NAME</b></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <?php
                                                                  $email  = $_SESSION['email'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count>0)
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
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </td>
                                
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>EMPLOYEE'S LAST-NAME</b></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <?php
                                                                  $email  = $_SESSION['email'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count>0)
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
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </td>
                                
                                                </tr>
                                                 <tr>
                                                    
                                                    <td><b>REVIEWER NAME</b></td>
                                                    <td>
                                                        <div class="input-group">
                                                                       <?php
                                                                  $email  = $_SESSION['email'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count>0)
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
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </td>
                                
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>POSITION HELD</b></td>
                                                    <td><div class="input-group">
                                                                        <?php
                                                                  $email  = $_SESSION['email'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count>0)
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
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </td>
                                
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>DEPARTMENT</b></td>
                                                    <td><div class="input-group">
                                                                              <?php
                                                                  $email  = $_SESSION['email'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count>0)
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
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </td>
                                
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>COMPANY ID</b></td>
                                                    <td><div class="input-group">
                                                                              <?php
                                                                  $email  = $_SESSION['email'];

                                                                   
                                                                    $drake=mysqli_query($conn,"SELECT * FROM staffsignup WHERE email='$email' ");
                                                                    $count=mysqli_affected_rows($conn);
                                                                    if($count>0)
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
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </td>
                                
                                                </tr>
                                                
                                                
                                                <tr>
                                                    
                                                    <td><b>GOAL 1</b></td>
                                                      <td><div class="form-group">
															
																	<div class="input-group">
																			<textarea class="form-control" placeholder="Goal description" name="goal1" id="id-address" aria-describedby="address" required></textarea>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
																	</div>
															</div></td>
                            
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>GOAL 2</b></td>
                                                      <td><div class="form-group">
															
																	<div class="input-group">
																			<textarea class="form-control" placeholder="Goal description" name="goal2" id="id-address" aria-describedby="address" required></textarea>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
																	</div>
															</div></td>
                            
                                                </tr> 
                                                <tr>
                                                    
                                                    <td><b>GOAL 3</b></td>
                                                      <td><div class="form-group">
															
																	<div class="input-group">
																			<textarea class="form-control" placeholder="Brief description" name="goal3" id="id-address" aria-describedby="address" ></textarea>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
																	</div>
															</div></td>
                            
                                                </tr>
                                                <tr>
                                                    
                                                    <td><b>GOAL DURATION</b></td>
                                                    <td>
                                                
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
												        <div class="form-group">
																	<label for="id-matric-no">START</label>
																	<div class="input-group">
																			<input type="date" class="form-control" placeholder="Date of birth" name="sog" id="id-matric-no" aria-describedby="matric_no"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
																	</div>
												        </div>
													</div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
												        <div class="form-group">
																	<label for="id-matric-no">END</label>
																	<div class="input-group">
																			<input type="date" class="form-control" placeholder="Date of birth" name="eog" id="id-matric-no" aria-describedby="matric_no"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
																	</div>
												        </div>
													</div>
                                                </td>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                          <button id="id-signup-btn" type="submit" name="submitt" class="btn btn-danger btn-lg btn-block">Submit</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                              </form>
                                        </table>
                                    </div>

                                </div>


                </div>

                
              
             
       
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
