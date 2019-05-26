<?php  
    session_start();
    require_once('connect.php');


    

  if($_SESSION['username'] == null){
      header('Location: index.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="copyright" content="ninodezign.com"> 
	<title>EAS | Company-Select View</title>
	
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
                                        <div class="class-hr-label ">
               <?php
                                             
            $companyid=$_SESSION['username'];
                                            
                   
             $user=mysqli_query($conn,"SELECT * FROM companysignup WHERE companyid='$companyid' ");

                  while($row = $user->fetch_assoc()) 
                  {

            echo "
            <br>
            
            <a class='navbar-brand 'href='#'>Welcome <strong>". $row['fullname']." </strong></a>";
             
                  }
         ?>  
  

                          
                           	
						 </a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					
				</div><!-- /.container-fluid -->
			</nav>

			
		</div>
	</header>
<br><br>
    <section id="signin">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Select an option</span>
				Get started
			</h2>
		
	<div class="sub-container text-center" role="region" aria-labelledby="main-title">
			<br><br><br><br>

			

			<div class="button-container">
			<!--	<a role="button" id="top-teacher-signup-button" href="staffsignup.php" class="btn btn-danger btn-md">Register &nbsp; <span class="glyphicon glyphicon-              plus"></span></a>&nbsp;&nbsp;
            -->
				<a role="button" id="top-student-signup-button" href="staff.php"  class="btn btn-info btn-md">Staff&nbsp; <span class="glyphicon glyphicon-user"></span></a>&nbsp;&nbsp;
                <a role="button" id="top-student-signup-button" href="admin.php"  class="btn btn-danger btn-md"> Admin&nbsp; <span class="glyphicon glyphicon-user"></span></a>&nbsp;&nbsp;
                <a role="button" id="top-student-signup-button" href="hr.php"  class="btn btn-success btn-md"> HR&nbsp; <span class="glyphicon glyphicon-user"></span></a>


			</div>
            <br><br>
        
            <div class="button text-center">
                <a role="button" id="top-teacher-signup-button" href="idlogout.php" class="btn btn-default btn-xs">Sign Out</a>                
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
			<div class="nino-copyright">Copyright &copy; 2019 <a target="_blank">Presented by Umana Emem Ekpo</a>. All Rights Reserved. <br/> IVPBS <a href=""></a></div>
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






	<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-12">
				 <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 text-center">
                        <div class="class-hr-label ">
               <?php
             $value=$_SESSION['username'];

             $user=mysqli_query($conn,"SELECT * FROM companysignup WHERE companyid='$value' ");

                  while($row = $user->fetch_assoc()) 
                  {

            echo "
            <br>
            
            <a class= href='#'>Welcome <strong>". $row['fullname']." </strong></a>";
                  }
         ?>  
  
						      
`<br>
				<hr>
                        </div>
				    </div>
				</div>


					<br><br><br><br>
    </div>

<!--
    <footer class="foot"  style="background-color:#686868; position:fixed; bottom:0;width:100%;height:25px;">	
        <div class="container-fluid text-center">

                <div class="copyright">
                            Copyright © 2017-Forever 
                    <b>
                        <em>EAS.COM</em>
                    </b>
                </div>
        </div>
    </footer>
    -->


	<script type="text/javascript" src="JavaScript/bootstrap.js" ></script>
	<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
	<script type="text/javascript" src="JavaScript/npm.js"></script>


</body>
</html>
