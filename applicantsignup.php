<?php
session_start();
 require_once("connect.php");
if(isset($_POST['submit']))        
    {       
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $phoneno=$_POST['phoneno'];
            $middlename=$_POST['middlename'];
            $address=$_POST['address'];  
            $about=$_POST['about']; 
            $password=$_POST['password'];
            $state=$_POST['state'];
            $dob=$_POST['dob'];        
            $rpassword=$_POST['rpassword'];
            $email=$_POST['email'];
            $photo=$_POST['photo'];
            $applicantid=$_POST['applicantid'];
            
  
            
            $id= mysqli_query($conn,"SELECT * FROM applicant WHERE applicantid='$applicantid' "); 
            $em= mysqli_query($conn,"SELECT * FROM  applicant WHERE email='$email' "); 
            $ofno=mysqli_query($conn,"SELECT * FROM  applicant WHERE phoneno='$phoneno' "); 
         
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
            
            else 
        {
             $result1=mysqli_query($conn,"INSERT INTO applicant (firstname,lastname,middlename,phoneno,dob,state,address,password,email,photo,applicantid,about)Values ('$firstname','$lastname','$middlename','$phoneno','$dob','$state','$address','$password','$email','$photo','$applicantid','$about')");   
              $message4 = "R E G I S T R A T I O N    S U C C E S S F U L.";
       echo "<script type='text/javascript'>alert('$message4');</script>";
        }
             
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="copyright" content="ninodezign.com"> 
	<title>EAS | Applicant Registration</title>
	
	<!-- favicon -->
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
	
</head>

<body data-target="#nino-navbar" data-spy="scroll">

	<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" style="size:10px;" href="homepage.html">

                             <a class='navbar-brand' href='uihome.php'>  Welcome, Applicant</a>
                           	
						 </a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#nino-header">Home <span class="sr-only">(current)</span></a></li>
								
							
							</ul>
						</div><!-- /.navbar-collapse -->
					<!--	<ul class="nino-iconsGroup nav navbar-nav">
							<li><a href="#"><i class="mdi mdi-cart-outline nino-icon"></i></a></li>
							<li><a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>
						</ul>
                    -->

					</div>
				</div><!-- /.container-fluid -->
			</nav>

			<section id="nino-slider" class="carousel slide container" data-ride="carousel">
			
            
			</section>
		</div>
	</header>
<br><br>
    
	<section id="signin">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Quick registration! </span>
				Get started
			</h2>
        	<div class="sub-container text-center" role="region" aria-labelledby="main-title">
		


 
    	
    		<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
									<div class="class-hr-label text-center hidden-xs">
											<h4 id="id-hr-label-text"><i class="fa fa-user-plus"></i></h4>
									</div>            
					<form id="id-signup-form" method="post" action="">   
                        
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label for="id-product">Profile photo</label>
                                                        <div class="input-group">
                                                            <input type="file" name="photo" id="pic">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
																
												    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
															<div class="form-group">
																		<label for="id-fullname">Applicant ID (Auto-generated) </label>	
																	<div class="input-group">       
                                                                        
																		<?php
                                                                        //I randomly generated a 6 digit number for the user's who want to register their company and the ID becomes unique, because only one company can have an Id.
                                                                        	$job='Applicant';
                                                                          $str='01234567000000000000777777733333333888888889999999888666666666666666666665555555555555555533333333344444444444444222222222222221111111117777777666666666666999999999993333333322222222111111891011121314151617181920';
                                                                          $shuffle=str_shuffle($str);
                                                                          $stu=substr($shuffle,0,3);

                                                                        echo
                                                                            "<input type='text' class='form-control' value='$job$stu' name='applicantid' id='id-fullname' aria-describedby='fullname' readonly='true'>";
                                                                      
                                                                        ?>
																			<span class='input-group-addon'><span class='glyphicon glyphicon-lock'></span>
                                                                               
																	</div>
															</div>
													</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-fullname">First Name</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="First Name" name="firstname" id="id-fullname" aria-describedby="fullname"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															 </div>
													</div>
											</div>
                                            
											<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-fullname">last Name</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="Last Name" name="lastname" id="id-fullname" aria-describedby="fullname"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															</div>
													</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-fullname">Middle Name</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="Middle Name" name="middlename" id="id-fullname" aria-describedby="fullname"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															 </div>
													</div>
											</div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                                    <div class="form-group">
                                                                <label for="id-matric-no">Email</label>
                                                                <div class="input-group">
                                                                        <input type="email" class="form-control" placeholder="Email" name="email"  aria-describedby="email"required>                                                                        
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                                        <div class="form-group">
                                                                <label for="id-fullname">Phone No</label>
                                                                <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="E.g 07036296579" name="phoneno"  aria-describedby="phoneno"required>
                                                                          
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                                                </div>
                                                        </div>
                                                </div>                                               
                                              </div>  
                                              <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                                    <div class="form-group">
                                                                <label for="id-matric-no">Date of birth</label>
                                                                <div class="input-group">
                                                                        <input type="date" class="form-control" name="dob"  aria-describedby="email"required>                                                                        
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                                        <div class="form-group">
                                                                <label for="id-fullname">State</label>
                                                                <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="E.g Imo" name="state"  aria-describedby="phoneno"required>
                                                                          
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
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
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
															<div class="form-group">
																	<label for="id-address">Address</label>
																	<div class="input-group">
																			<textarea class="form-control" placeholder="Address" name="address" id="id-address" aria-describedby="address" required></textarea>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
																	</div>
															</div>
													</div>
											</div>	
                                             <div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
															<div class="form-group">
																	<label for="id-address">About yourself</label>
																	<div class="input-group">
																			<textarea class="form-control" placeholder="Brief description" name="about" id="id-address" aria-describedby="address" required></textarea>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span>
																	</div>
															</div>
													</div>
											</div>					
											
											
									 									<br><br>
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12 col-lg-12 text-center" id="join">
											 <button id="id-signup-btn" type="submit" name="submit" class="btn btn-danger btn-sm ">JOIN   <span class="glyphicon glyphicon-lock"></span></button>
                                            <br><br>
										
                                            <p style=text-align;center>Already have an Account?  </p>
									   </div>
                                                                        
                                         <div class="button text-center">
                                            <a role="button" id="top-teacher-signup-button" href="applicant.php" class="btn btn-default btn-xs">Sign In  <span class="glyphicon glyphicon-user"></span></a>                                                 
                                        </div>               
                                  
                                     </div>
						</form>
                                  
            </div>
    	</div>
        </div>
    </section>
	
    <footer id="footer">
        <div class="container">
        	<div class="row">
        		<div class="col-md-4">
        			<div class="colInfo">
	        			<div class="footerLogo">
	        			
	        			<div class="nino-followUs">
	        				
	        				<div class="socialNetwork">
	        					<span class="text">Follow Us: </span>
	        					<a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-youtube-play"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-dribbble"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-tumblr"></i></a>
	        				</div>
	        			</div>
	        			<form action="" class="nino-subscribeForm">
	        				<div class="input-group input-group-lg">
								<input type="email" class="form-control" placeholder="Your Email" required>
								<span class="input-group-btn">
									<button class="btn btn-success" type="submit">Subscribe</button>
								</span>
							</div>
	        			</form>
        			</div>
        		</div>
        		
        	</div><br>
			<div class="nino-copyright">Copyright &copy; 2017 <a target="_blank">Presented by Group 16</a>. All Rights Reserved. <br/> IVPBS <a href=""></a></div>
        </div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
	
    <!-- Scroll to top
    ================================================== -->
	<a href="#" id="nino-scrollToTop">Go to Top</a>
	
	<!-- javascript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/unslider-min.js"></script>
	<script type="text/javascript" src="js/template.js"></script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
		
</body>
</html>