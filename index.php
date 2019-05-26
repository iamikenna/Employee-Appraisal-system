<?php
     session_start();
    require_once("connect.php");
	include_once("functions.php");
	if(isset($_POST['submitone'])){
    
		$companyid = $_POST['companyid'];
		$drake = mysqli_query($conn, "SELECT * FROM companysignup WHERE companyid ='$companyid' ");
	  
		if ($drake->num_rows == 1)
		{
	
			 $_SESSION['username'] = $companyid;
		
		
	
			header ('location:select.php');
		}
		
			
		else
		{
			echo '
			<div class="row">
				<div class="col-lg-5 col-lg-offset-4">
					<div class="alert alert-danger pull-right text-center" style="width:500px;padding-top:2px;margin:52px" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Error:</span>
					  Enter a valid ID
					</div>
				</div>
			</div>
			'
			 ;
		}
	
	}


if(isset($_POST['submit']))        
    {       
            $fullname=$_POST['fullname'];
            $officeno=$_POST['officeno'];
            $service=$_POST['service'];
            $address=$_POST['address'];  
            $about=$_POST['about']; 
            $password=$_POST['password'];
        
            $rpassword=$_POST['rpassword'];
            $email=$_POST['email'];
            $photo=$_POST['photo'];
            $companyid=$_POST['companyid'];
            
  
       
            $id= mysqli_query($conn,"SELECT * FROM companysignup WHERE companyid='$companyid' "); 
            $em= mysqli_query($conn,"SELECT * FROM companysignup WHERE email='$email' "); 
            $ofno= mysqli_query($conn,"SELECT * FROM companysignup WHERE officeno='$officeno' "); 
            $com= mysqli_query($conn,"SELECT * FROM companysignup WHERE fullname='$fullname' "); 
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
             $result1=mysqli_query($conn,"INSERT INTO companysignup (fullname,officeno,service,address,password,email,photo,companyid,about)Values ('$fullname','$officeno','$service','$address','$password','$email','$photo','$companyid','$about')");   
			  $message4 = "R E G I S T R A T I O N    S U C C E S S F U L.";
			  
			
       echo "<script type='text/javascript'>alert('$message4');</script>";
        }
             
    }
/*
if(isset($_POST['submit']))        
    {       
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];  
            $phoneno=$_POST['phoneno'];               
            $password=$_POST['password'];
            $rpassword=$_POST['rpassword'];         
            $email=$_POST['email'];         
            $gender=$_POST['gender']; 
            $em=mysqli_query($conn,"SELECT * FROM signup WHERE email='$email' "); 
       
          
          
       //    $rep=mysqli_query($conn,"SELECT * FROM companysignup WHERE password='$password' "); 


            //if statement to check if there's an existing users greater than 0
         
         if ($_POST['password']!= $_POST['rpassword'])
 
        {
             $message8 = "R E G I S T R A T I O N  F A I L E D \\n P A S S W O R D   D O E S N T   M A T C H .";
       echo "<script type='text/javascript'>alert('$message8');</script>";
              echo '<br>
    <div class="row">
        <div class="col-lg-5 col-lg-offset-4">
            <div class="alert alert-danger pull-right text-center" style="width:500px;padding-top:2px;margin:52px" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
      R E G I S T R A T I O N - F A I L E D <br> P A S S W O R D  - D O E S N T  - M A T C H . .
            </div>
        </div>
    </div>
    '
     ;
            
        }           
       

       
            elseif($em->num_rows > 0) 
        {
               echo '<br>
    <div class="row">
        <div class="col-lg-5 col-lg-offset-4">
            <div class="alert alert-danger pull-right text-center" style="width:500px;padding-top:2px;margin:52px" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
       R E G I S T R A T I O N - F A I L E D <br>E M A I L  -  A l R E A D Y   - E X I S T  .
            </div>
        </div>
    </div>
    '
     ;
        }
       
      
            else {
            

            //Checking database for repeated values

             $result1=mysqli_query($conn,"INSERT INTO signup (firstname,lastname,password,email,phoneno,gender)Values ('$firstname','$lastname','$password','$email','$phoneno','$gender')");  
        
          echo '<br>
    <div class="row">
        <div class="col-lg-5 col-lg-offset-4">
            <div class="alert alert-danger pull-right text-center" style="width:500px;padding-top:2px;margin:52px" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
             R E G I S T R A T I O N  -  S U C C E S S F U L L
            </div>
        </div>
    </div>
    '
     ;
            }
        
          
     
    } */


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="http-equiv" content="refresh" value="1">
	<meta name="author" content="ninodezign.com, ninodezign@gmail.com">
	<meta name="copyright" content="ninodezign.com"> 
	<title>Salem- Employee Appraisal System | HOME</title>
	
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
						<a class="navbar-brand" style="size:10px;" href="index.php">Salem- Employee Appraisal System</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
                                 
								<li class="active"><a href="#nino-header">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="#nino-story">About</a></li>
								<li><a href="#nino-services">Service</a></li>
								<li><a href="#nino-ourTeam">Our Team</a></li>
								<li><a href="#signin">Sign in</a></li>
								<li><a href="#signup">Sign up</a></li>
                              
                      
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
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Lets Explore</span>
							Welcome <br>to EAS
						</h2>
						<a href="#nino-story" class="nino-btn">Get started</a>
					</div>
                <!--
					<div class="item">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Creative Template</span>
							Welcome <br>to MoGo
						</h2>
						<a href="#" class="nino-btn">Learn more</a>
					</div>
					<div class="item">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Creative Template</span>
							Welcome <br>to MoGo
						</h2>
						<a href="#" class="nino-btn">Learn more</a>
					</div>
					<div class="item">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Creative Template</span>
							Welcome <br>to MoGo
						</h2>
						<a href="#" class="nino-btn">Learn more</a>
					</div>
				</div>
                -->

				<!-- Indicators
				<ol class="carousel-indicators clearfix">
					<li data-target="#nino-slider" data-slide-to="0" class="active">
						<div class="inner">
							<span class="number">01</span> intro	
						</div>
					</li>
					<li data-target="#nino-slider" data-slide-to="1">
						<div class="inner">
							<span class="number">02</span> work
						</div>
					</li>
					<li data-target="#nino-slider" data-slide-to="2">
						<div class="inner">
							<span class="number">03</span> about
						</div>
					</li>
					<li data-target="#nino-slider" data-slide-to="3">
						<div class="inner">
							<span class="number">04</span> contacts
						</div>
					</li>
				</ol>
                 -->
            
			</section>
		</div>
	</header><!--/#header-->

	<!-- Story About Us
    ================================================== -->
	<section id="nino-story">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">  WANT TO KNOW MORE?</span>
				
			</h2>
            <div class="sectio">			
				
					
					<div class="col-md-4 col-lg-12 ">
						<div layout="row">
							<i class="mdi mdi-blender nino-icon fsr"></i>
				 <div class="wrap">
                    <div class="title">
                        
                        <strong>
                            <h4>
                            Register your department or login to use the features of EAS, Evaluate your staff <br> keep track of every personel under your administration.
                            </h4>
                        </strong>


                    </div>



            </div>
                                </div>
                            </div>


                    </div>

		</div>		
	</section><!--/#nino-story-->

	<!-- Counting
    ================================================== -->
    <section id="nino-counting">
    	<div class="container">
    		<div layout="row" class="verticalStretch">
    			<div class="item">
    				<div class="number">50</div>
    				<div class="text">staff(Lecturers,Logistics)</div>
    			</div>
    			<div class="item">
    				<div class="number">1000</div>
    				<div class="text">Happy client</div>
    			</div>
    			<div class="item">
    				<div class="number">500</div>
    				<div class="text">Departments</div>
    			</div>
    			<div class="item">
    				<div class="number">20</div>
    				<div class="text">Admin (HOD/Dean)</div>
    			</div>
    			<div class="item">
    				<div class="number">1</div>
    				<div class="text">Sudo/Registry</div>
				</div>
				
    		</div>
    	</div>
    </section><!--/#nino-counting-->

    <!-- Services
    ================================================== -->
    <section id="nino-services">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">We work with</span>
				Amazing Services
			</h2>
			<div class="sectionContent">			
				<div class="fw" layout="row">
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-apple-keyboard-command nino-icon fsr"></i>
							<div>
								<h4 class="nino-serviceTitle">Staff evaluation</h4>
								<p>We provide department the ability to evaluate works.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-blender nino-icon fsr"></i>
							<div>
								<h4 class="nino-serviceTitle">Security</h4>
								<p>We have a very secured plaform for every deapartment that registers with us .</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
							<i class="mdi mdi-bookmark-plus-outline nino-icon fsr"></i>
							<div>
								<h4 class="nino-serviceTitle">User interface</h4>
								<p>We provide intending users the ability to register with us and sign in to use our features.</p>
							</div>
						</div>
					</div>
				
				</div>
			</div>
    	</div>
    </section><!--/#nino-services-->

    <!-- Unique Design
    ================================================== -->
    <section id="nino-uniqueDesign">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">What should you expect??</span>
				Quick view
			</h2>
			<div class="sectionContent">
				<div class="nino-devices">
					<img class="tablet" src="rise4.jpg" alt="">
					<img class="mobile" src="rise3.jpg" alt="">
				</div>
			</div>
    	</div>
    </section><!--/#nino-uniqueDesign-->

    <!-- What We Do
    ================================================== -->
 <!--   <section id="nino-whatWeDo">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Service</span>
				Where to visit ?
			</h2>
			<p class="nino-sectionDesc">
				We have alot of industries to visit , sign up to get started.
			</p>
			<div class="sectionContent">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center">
							<img src="visit5.jpg" alt="">
						</div>
					</div>      
            	
			
					<div class="col-md-6">
						<div class="text-center">
							<img src="visit4.jpg" alt="">
						</div>
					</div>
					
			
                </div>
            </div>
            <div class="sectionContent">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center">
							<img src="visit6.jpg" alt="">
						</div>
					</div>      
            	
			
					<div class="col-md-6">
						<div class="text-center">
							<img src="visit7.jpg" alt="">
						</div>
					</div>
					
			
                </div>
            </div>
        </div>
    	
    </section>
-->
	<section id="signin">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Sign In</span>
				Get started
			</h2>
		 <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                 
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                 <div class="col-md-12 col-sm-12 col-xs- col-lg-12 text-center">
                                    <div class="class-hr-label ">
                                        <h2 id="id-hr-label-text">Enter your department ID ! </h2> 
                                            <hr>
                                    </div>
                                </div>            
                                <div class="form-group">
                                     <input type="password" class="form-control" placeholder="E.g 246ab4 (6 characters only) " name="companyid"  aria-describedby="fullname"required>
                             
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
                                 <button id="id-signup-btn" type="submit" name="submitone" class="btn btn-danger btn-lg btn-block">Submit</button>
								<br><br>
						
                                 <div class="button text-center">
                                            <a role="button" id="top-teacher-signup-button" href="sudo.php" class="btn btn-default btn-xs"> Sudo <span class="glyphicon glyphicon-user"></span></a>  
                                     
                                     
                                 </div>  
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</section><!--/#nino-portfolio-->

	<!-- Testimonial
    ================================================== -->
   
    <section id="nino-ourTeam">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Who we are</span>
				Meet MM
			</h2>
			<p class="nino-sectionDesc">
				I am a computer science final year student and i built this software to provide solutions for department with HR and staff evaluation.
			</p>
			<div class="sectionContent">
				<div class="row nino-hoverEffect text-center">
					<!-- <div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="moji.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Akin</h4>
							<span class="regency">Analysis</span>
						</div>
					</div> -->
					<div class="col-md-12 col-sm-12 text-center">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="Umana Emem Ekpo.jpeg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Umana Emem Ekpo</h4>
							<span class="regency">Developer</span>
						</div>
					</div>
					<!-- <div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="ma.JPG" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Esther </h4>
							<span class="regency">Project MAnager</span>
						</div>
					</div> -->
				</div>
			</div>
          
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/#nino-ourTeam-->


    <!-- Happy Client
    ================================================== -->
    <section id="nino-happyClient">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Happy Clients</span>
				What people say
			</h2>
			<div class="sectionContent">
				<div class="row">
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="nino-avatar fsr">
								<img class="img-circle" src="images/happy-client/img-1.jpg" alt="">
							</div>
							<div class="info">
								<h4 class="name">Matthew Dix</h4>
								<span class="regency">Staff</span>
								<p class="desc">
									Efficient
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="nino-avatar fsr">
								<img class="img-circle" src="images/happy-client/img-2.jpg" alt="">
							</div>
							<div class="info">
								<h4 class="name">Nick Karvounis</h4>
								<span class="regency">Admin</span>
								<p class="desc">
								User-friendly
								</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
    	</div>
    </section><!--/#nino-happyClient-->

    <!-- Latest Blog
    ================================================== -->
    <section id="signup">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Register your Department today</span>
				It's quick
			</h2>
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
									<div class="class-hr-label text-center hidden-xs">
											<h4 id="id-hr-label-text"><i class="fa fa-user-plus"></i></h4>
									</div>            
					<form id="id-signup-form" method="post" action="">   
                        
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label for="id-product">Department Photo</label>
                                                        <div class="input-group">
                                                            <input type="file" name="photo" id="pic">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
																	<label for="id-fullname">Department ID (Auto-generated) </label>	
																	<div class="input-group">       
                                                                        
																		<?php
                                                                        //I randomly generated a 6 digit number for the user's who want to register their company and the ID becomes unique, because only one company can have an Id.
                                                                       
                                                                          $str='abcdefghijklmnopqrstuvwxyz01234567891011121314151617181920';
                                                                          $shuffle=str_shuffle($str);
                                                                          $stu=substr($shuffle,0,6);

                                                                        echo
                                                                            "<input type='text' class='form-control' value='$stu' name='companyid' id='id-fullname' aria-describedby='fullname' readonly='true'>";
                                                                      
                                                                        ?>
																			<span class='input-group-addon'><span class='glyphicon glyphicon-lock'></span>
                                                                               
																	</div>
												    </div>
                                                </div>
                                                
                                            </div>
                                            
											<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-fullname">Department Name</label>
																	<div class="input-group">
																			<input type="text" class="form-control" placeholder="Company name" name="fullname" id="id-fullname" aria-describedby="fullname"required>
																			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
																	</div>
															</div>
													</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
															<div class="form-group">
																	<label for="id-matric-no">Services<label>
																	<div class="input-group">											
                                                                        <input list="browsers"  class="form-control" name="service" placeholder="Select" d="id-matric-no" aria-describedby="matric_no"required />
                                                                            <datalist id="browsers">
                                                                              
                                                                              <option value="Enter your department's service">
                                                                            </datalist>
                                                                        
																			<span class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span>
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
                                                                <label for="id-fullname">Office No</label>
                                                                <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="E.g 07036296579" name="officeno"  aria-describedby="phoneno"required>
                                                                          
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
																	<label for="id-address">About</label>
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
										
                                           
									   </div>
                                                                        
                                         <div class="button text-center">
                                            <a role="button" id="top-teacher-signup-button" href="applicantsignup.php" class="btn btn-default btn-xs"> Proceed  <span class="glyphicon glyphicon-user"></span></a>                                                 
                                        </div>               
                                  
                                     </div>
						</form>
                                  
            </div>
    	</div>
    </section><!--/#nino-latestBlog-->

    <!-- Map
    ================================================== -->
    <section id="nino-map">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
    			<i class="mdi mdi-map-marker nino-icon"></i>
    			<span class="text">Open map</span>
    			<span class="text" style="display: none;">Close map</span>
    		</h2>
    		<div class="mapWrap">
	    		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d79466.26604960626!2d-0.19779784176715043!3d51.50733004537892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!3m2!1d51.5073509!2d-0.1277583!5e0!3m2!1sen!2s!4v1469206441744" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	    	</div>
    	</div>
    </section><!--/#nino-map-->
	
    <!-- Footer
    ================================================== -->
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
			<div class="nino-copyright">Copyright &copy; 2019 <a target="_blank">Presented by Umana Emem Ekpo</a>. All Rights Reserved. <br/> EAS <a href=""></a></div>
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