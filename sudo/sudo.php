<?php
    session_start();
    require_once('connect.php');
  /**  if($_SESSION['id']==null)
    {
        header('location:id.php');
    }

**/

    if(isset($_POST['submit']))
    {
    $name = $_POST["name"];
    $password=$_POST['password'];  



     $drake = mysqli_query($conn, "SELECT * FROM sudo WHERE name= '$name' AND password='$password ' ");
     if ($drake->num_rows > 0) 
    { 


        $_SESSION['username']=$name;
        header('Location:sudointerface.php');
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
<html lang="en-us">
	<head>
		<title>Company Sign in</title>
		<meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

				<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css"/>
				<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css"/>
				<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.css"/>
				<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.min.css"/>
				<script src="bootstrap-3.3.7/js/jquery-3.1.1.min.js"></script>
				<script src="bootstrap-3.3.7/js/jquery-3.1.1.js"></script>
				<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
		        <link rel="stylesheet" type="text/css" href="style.css"/>

	</head>

<body style="background-color:white;">
<div class="container">
	<div class="navbar navbar-default navbar-fixed-top" style="position:absolute fixed; width:100%; height:-30px; ">
			<div id="navbar-links">
				<div class="header-top">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="customer-state signed-in hidden-phone pull-right" id="fill">
								<br>
                  			</div>

								<div class="dropdown">
                                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="menu" role="button" aria-expanded="false"        aria-label="Expand Side Navigation" style="cursor: pointer;position: relative;"><svg viewBox="0 0 24 10" width="16px" height="16px" class="_style_3fWswA" style="transition: all 400ms ease; color: rgb(0, 0, 0); width: 24px; height: 24px; font-size: 20px; margin-left: 20px; margin-right: 60px; margin-top: 19px; fill: currentcolor;"><path d="M0 1h24M0 7h24M0 13h24" fill="none" stroke="currentColor" stroke-width="2"></path></svg>
                                                <ul class="dropdown-menu drop">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                   <!-- <a href="indexhm.php"><img src="bulo2.png"  width="200px" height="120px"/></a> -->
                                                    </div>
                                            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li><hr>
                                            <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                                                </ul>
                                        </a>
								</div>
						</div>
					</div>
				</div>
			</div>
        </div>
 </div>


  
	<br><br> <br><br> <br><br> 
<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12 text-center">
                <img src=""  width="150px" height="100px"/>
            </div>

        </div>
    
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <div class="class-hr-label text-center">
                        <h4 id="id-hr-label-text"><i class="fa fa-user-plus"></i>SUDO | LOG IN!<h4>

												
                    </div>

                    <form action=""  method="post" id="id-signup-form">

                      
                             <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                <div class="form-group ">
                                    <label for="id-matric-no">Username</label>
                                    <div class="input-group text-center">
                                        <input type="password" class="form-control required" placeholder="admin123" name="name" id="id-matric-no" aria-describedby="matric_no" required >
                                          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                    </div>
                                </div>
                                    
                                
                               
                            </div>
                             


                       
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                <div class="form-group">
                                    <label for="id-password">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control required" placeholder="Password" name="password" id="id-password" aria-describedby="password">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span>
                                    </div>
                                </div>
                            </div>
                             <div class="row" >
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 col-lg-offset-5">
                                        <button id="id-signup-btn" type="submit"  data-toggle="modal" name="submit" class="btn btn-danger btn-sm "><i class="fa fa-user-plus"></i> login </button> 
                                        
                                    
                                    </div>
                                </div>
                     
                    
                   
			<br><br>
            <div class="button text-center">
                                    <a role="button" id="top-teacher-signup-button" href="idlogout.php" class="btn btn-default btn-xs">Sign Out</a>                
                               </div>   

                    </form>
					
    </div>
    </div>
 </div>
 

	
    <footer class="foot"  style="background-color:#686868; position:fixed; bottom:0;width:100%;height:25px;">	
        <div class="container text-center">

                <div class="copyright">
                            Copyright © 2017-Forever <b><em>EAS.COM</em></b>
                </div>
        </div>
    </footer>


		
                        
	<script type="text/javascript" src="JavaScript/bootstrap.js">
    </script>
	<script type="text/javascript" src="JavaScript/bootstrap.min.js"></script>
	<script type="text/javascript" src="JavaScript/npm.js">
    </script>


</body>
</html>
