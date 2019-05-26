<?php
    require_once("connect.php");  
if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $complain = $_POST['complain'];

    $report=mysqli_query($conn,"INSERT INTO com (fullname,email,complain)Values  ('$fullname','$email','$complain')");    
}

?>
<?php
include_once('connect.php');


if(isset($_POST['submit']))
{
 $message = "M E S S A G E   S E N T";
   echo "<script id='scr' type='text/javascript'>alert('$message');

   </script>";
     
}

?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>CONTACT-US /COMPLAINS</title>
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

@media screen and (max-height: 450px) 
{
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
    
<body >
    
<div class="navbar navbar-default navbar-fixed-left">
  <a class="navbar-brand" href="#">Welcome</a>
  <ul class="nav navbar-nav">
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="companyinterface.php">Home</a></li>
      <li><a href="scontact">contact</a></li>
      <li><a href="#">Sub Menu3</a></li>
      <li class="divider"></li>
      <li><a href="#">Sub Menu4</a></li>
      <li><a href="#">Sub Menu5</a></li>
     </ul>
   </li>
   <li><a href="companyinterface.php">Home</a></li>
   <li><a href="form.php">sign up</a></li>
   <li><a href="scontact.php">contact</a></li>
  
  </ul>
</div>
6y66yyyyuj
    
	<br><br><br><br>
    
	<div class="container">
		<div class="jumbotron">
			<h2 style="text-align:center">CONTACT-US /COMPLAINS</h2>
			<hr>
			<h4 style="text-align:center">Here on EAS we provide a 24hrs customer service through out call service , for self-service please kindly make direct contact with the numbers below. Thank you!</h4>
		</div>
        
	       <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-12 ">
				 <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 text-center">
                    <div class="class-hr-label ">
                        
                        <h4 id="id-hr-label-text">Fill the form below !</h4>

												<hr>
                    </div>
				</div>
				</div>

                    <form id="id-signup-form" method="post" action="">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                <div class="form-group">
                                    <label for="id-fullname">Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control required" placeholder="Fullname" name="fullname" id="id-fullname" aria-describedby="fullname" required>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div> 

						<div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                <div class="form-group">                                    
                                    <label for="id-Matric-No">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control required" placeholder="example@gmail.com" name="email" id="email" aria-describedby="email" required>
                                         <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                <div class="form-group">
                                    <label for="id-Complain">Complain</label>
                                    <div class="input-group">
                                        <textarea class="form-control required" placeholder="Kindly fill in a brief complain " name="complain" id="id-Complain" aria-describedby="Complain" required></textarea>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                <button id="id-submit-btn" type="submit" name="submit"class="btn btn-info btn-sm btn-block"><i class="fa fa-user-plus"></i> Submit</button>
                            </div>
                        </div>
                    </form>
                            
					<br><br><br><br>
                            
        </div>
	</div>
                        
<footer style="background-color:#686868">	
    <div class="container text-center hidden-xs hidden-sm">        
			<h2 style="text-align:center">Posted by: IKENNA IBEZIM</h2>		                                                        
            <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a></p> 
        
            <div class="copyright">
                        Copyright © 2017-Forever <b><em>EAS.COM</em></b>
            </div>        
    </div>                                   
</footer>

 <footer class="foot"  style="background-color:#686868; bottom:0;width:100%;height:25px;">	
        <div class="container text-center hidden-lg hidden-md">
                <div class="copyright">
                            Copyright © 2017-Forever <b><em>EAS.COM</em></b>
                </div>
        </div>
 </footer>
                        
<script type="text/javascript" src="JavaScript/bootstrap.js" ></script>
<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
<script type="text/javascript" src="JavaScript/npm.js"></script>
                        
</body>
</html>
