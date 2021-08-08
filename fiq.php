<?php
session_start();
include("db.php");
$uid=$_SESSION['uid'];
?>
<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Passport Seva</title>
<meta name="description" content="">
<meta name="author" content="Themesrefinery">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<!-- Animation -->
<link rel="stylesheet" href="css/style-animate.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<!--Slider CSS-->
<link rel="stylesheet" type="text/css" href="css/slider.css">
<!--Custom CSS-->
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>


<body>
<!--Top Header-->
<header class="header">
	<div class="container">
    	<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
            	<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="index.html" class="navbar-brand scroll-top logo animated bounceInLeft rollIn"><b>Passport Seva</i></b></a></div>				
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li><a href="user_home.php">Home</a></li>
                  <li><a href="profile.php">Profile</a></li>           
                  <li class="active"><a href="fiq.php">FIQ</a></li>
                  <li><a href="payment.php">Payment</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>  
            
        </nav>
    </div>
</header>
<!--Top Header End-->

    <!--Breadcrumbs-->
        <div class="col-lg-12 top2">
        <div class="container">
    
        <ul class="breadcrumb">
    
            <li><a href="user_home.php">Home</a></li>
    
            <li class="active">FIQ</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">
       
      
            <form class="form-horizontal" role="form" method="post">
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Your Question Here..</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="fiq"></textarea>
                        <p class='text-danger'></p>
                    </div>
                </div>
                 
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="post" type="submit" value="POST" class="btn btn-default btn-hover">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                           
                    </div>
                </div>
            </form> 
            
            <?php
				
				if(isset($_POST['post']))
				{
					$fiq=$_POST['fiq'];
					
					$sql="INSERT INTO `fiq`(`uid`, `qstn`) VALUES ('$uid','$fiq')";
					$done=mysqli_query($con,$sql);
					
					
						if($done)
						{
							?>
                            <script>
							alert("Post Success");
							window.location.assign("user_home.php");
							</script>
                            <?php
						}
					
					else
					{
						echo "Error";
					}
				}
				?>
                
                <table width="500">
                <tr align="center" style="background-color:#000000; color:#FFFFFF;">
                <td>Recent Question</td>
                <td>Answers</td>
                </tr>
                <?php
				
				$sql1="select * from fiq where uid='$uid'";
				$done1=mysqli_query($con,$sql1);
				while($r=mysqli_fetch_array($done1))
				{
					?>
                    <tr align="center">
                    <td><?php echo $r['qstn'];?></td>
                    <td><?php echo $r['reply'];?></td>
                    </tr>
                    <?php
				}
				?>
                </table>
       </div>
    <!--Sidebar Start-->
    <div class="col-md-4">

                <!-- Blog Search Well -->
                

                <!-- Blog Categories Well -->
                

                <!-- Side Widget Well -->
                

            </div>
     <!--Sidebar End-->
  </div>
<!--Footer Start-->

<!--Footer End-->
</div>
<!--Main Body End-->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jssor.js" type="text/javascript"></script>
<script src="js/jssor.slider.js" type="text/javascript"></script>
<script src="js/slider.js" type="text/javascript"></script>
</body>
</html>
