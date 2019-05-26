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
	</head>
    
<body style="background-color:white;">
   <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="row">
					<div class="hidden-md col-sm-4 col-xs-4 hidden-lg">
						<div class="dropdown">
							<a href="#" id="dp" class="dropdown-toggle" data-toggle="dropdown" role="menu" role="button" aria-expanded="false" aria-label="Expand Side Navigation" style="cursor: pointer;position: relative;"><svg viewBox="0 0 24 10" width="16px" height="16px" class="_style_3fWswA" style="transition: all 400ms ease; color: rgb(0, 0, 0); width: 24px; height: 24px; font-size: 20px; margin-left: 20px; margin-right: 60px; margin-top: 19px; fill: currentcolor;"><path d="M0 1h24M0 7h24M0 13h24" fill="none" stroke="currentColor" stroke-width="2"></path></svg>
								<ul class="dropdown-menu drop">									
								  <li><a href="#con"><span class="glyphicon glyphicon-plus-sign"></span> Sign Up</a></li><hr>
                                            <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
								</ul>
							</a>
						</div>
					</div>
                				
					<div class="hidden-md col-sm-4 col-xs-4 hidden-lg text-center" id="eas">
						<h4>EAS</h4>
					</div>
						
					<div class="hidden-md col-sm-4 col-xs-4 hidden-lg">
						<ul class="nav navbar-nav navbar-right pull-right">
						  <li><a href="id.php"><span class="glyphicon glyphicon-user"></span> LOGIN</a></li>					
						</ul>
					</div>		
				</div>
				
				<div class="row">
					<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">						
						<div class="navbar-header">
							<a class="navbar-brand" href="#">E A S</a>
						</div>
						<ul class="nav navbar-nav">
						  <li ><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
						  <li><a href="http://blog.mentishrms.com/how-an-online-employee-performance-appraisal-system-benefits-a-company/"><span class="glyphicon glyphicon-globe"></span> BLOG</a></li>
						  <li><a href="contact.php"><span class="glyphicon glyphicon-exclamation-sign"></span> ABOUT</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						
						  <li><a href="id.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
						</ul>
					</div>
				</div>
			</div>			
		</nav>
		
    
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
