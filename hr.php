<?php
session_start();
require_once('connect.php');
 

  if($_SESSION['username'] == null){
      header('Location: index.php');
  }
  
   
 

if(isset($_POST['submit']))
{
            $email = $_POST["email"];
            $password=$_POST['password'];  
         
          $companyid=$_SESSION['username'];
    
            $drake = mysqli_query($conn, "SELECT * FROM admin WHERE email= '$email' AND companyid='$companyid' AND password='$password' AND department='hr' AND jposition='hr' ");
//  var_dump($companyid);
        if ($drake->num_rows == 1) 
        { 

            $row=mysqli_fetch_array($drake);

          $_SESSION['email']=$row['email'];      
          $_SESSION['dept']=$row['department'];      
      
          
            
   
            header('Location:hrinterface.php');
        }

        else 

        {
            echo '<br><br>
            <div class="alert alert-danger" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              Enter a valid Email address or Password
            </div>';
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
	<title>EAS | HR-Log In</title>
	
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

                             <a class='navbar-brand' href='uihome.php'>  Welcome, Human Resource</a>
                           	
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
                                <div class="form-group">
                                    <input class="form-control" placeholder="Example@gmail.com" name="email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <button id="id-signup-btn" type="submit" name="submit" class="btn btn-danger btn-lg btn-block">Sign In</button>
                                <br>
                                 <a role="button" id="top-teacher-signup-button" href="index.php" class="btn btn-default btn-xs "> Home <span class="glyphicon glyphicon"></span></a> 
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
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



