<?php
session_start();
include("db.php");
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
                  <li class="active"><a href="user_home.php">Home</a></li>
                  <li><a href="profile.php">Profile</a></li>           
                  <li><a href="fiq.php">FIQ</a></li>
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
    
            <li class="active">My Status</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">
      		<table width="1000">
            <tr align="center" style="background-color:#000000; color:#FFFFFF;">
            <td>Application No</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>aadhar</td>
            <td>Mobile</td>
            <td>type</td>
            <td>Application Status</td>
            <td>Payment Status</td>
            </tr>
            
            <?php
			$uid=$_SESSION['uid'];
			//echo $uid;
			$sql="select * from applications where app_id='$uid'";
			$done=mysqli_query($con,$sql);
			while($r=mysqli_fetch_array($done))
			{
				?>
                <tr align="center">
                <td><?php echo $r['app_id'];?></td>
                <td><?php echo $r['name'];?></td>
                <td><?php echo $r['email'];?></td>
                <td><?php echo $r['adrs'];?></td>
                <td><?php echo $r['aadhar'];?></td>
                <td><?php echo $r['mob'];?></td>
                <td><?php echo $r['type'];?></td>
                <td><?php echo $r['status'];?></td>
                <td><?php echo $r['payment'];?></td>
                </tr>
                <?php
			}
			?>
            
            
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
