<?php
session_start();
include("db.php");
$uid=$_SESSION['uid'];

$sql3="select count(*) as cn from applications where app_id='$uid' and payment!='pending'";
$done3=mysqli_query($con,$sql3);
$r=mysqli_fetch_array($done3);
$c=$r['cn'];
if($c>0)
{
	?>
    <script>
	alert("Thanks.. You are Already Payed for Your Application... Wait for Other Procedures...");
	window.location.assign("user_home.php");
	</script>
    <?php
}

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
                  <li><a href="fiq.php">FIQ</a></li>
                  <li class="active"><a href="payment.php">Payment</a></li>
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
    
            <li><a href="index.php">Home</a></li>
    
            <li class="active">Login</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">
       <script>
	   function am()
	   {
		   var a=document.getElementById("type").value;
		   
		   if(a=="regular")
		   {
			   document.getElementById("amount").value=1600;
		   }
		   if(a=="tatkal")
		   {
			   document.getElementById("amount").value=3600;
		   }
		   
	   }
	   </script>
      
            <form class="form-horizontal" role="form" method="post">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Passport Type</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="type" name="type" onChange="am();">
                        <option>----- Select Type -----</option>
                        <option value="regular">Regular</option>
                        <option value="tatkal">Tatkal</option>
                        </select>
                        <p class='text-danger'></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Amount</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="amount" id="amount">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Account No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="acc_no">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Your PIN</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pin" maxlength="4">
                        <p class='text-danger'></p>
                    </div>
                </div>
               
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="pay" type="submit" value="PAY" class="btn btn-default btn-hover">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                           
                    </div>
                </div>
            </form> 
            
            <?php
				
				if(isset($_POST['pay']))
				{
					$type=$_POST['type'];
					$am=$_POST['amount'];
					$acc_no=$_POST['acc_no'];
					$pin=$_POST['pin'];
					
					$sql="update accounts set bal=bal-'$am' where accnt_no='$acc_no' and pin='$pin'";
					$done=mysqli_query($con,$sql);
					
					if($done)
					{
						$sql2="UPDATE `applications` SET `type`='$type',`payment`='$am' WHERE app_id='$uid'";
						$done2=mysqli_query($con,$sql2);
						
						if($done2)
						{
							?>
                            <script>
							alert("Paymant Success");
							window.location.assign("user_home.php");
							</script>
                            <?php
						}
					}
					else
					{
						echo "Invalid Account Details";
					}
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
