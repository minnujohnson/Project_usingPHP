<?php
session_start();
include("db.php");
?>
<!DOCTYPE HTML>
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
                  <li class="active"><a href="profile.php">Profile</a></li>           
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
    
            <li><a href="index.php">Home</a></li>
    
            <li class="active">Update Data</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">
      
      		<?php
			$uid=$_SESSION['uid'];
			$qry1="select * from applications where app_id='$uid'";
			$done1=mysqli_query($con,$qry1);
			$r=mysqli_fetch_array($done1);
			?>
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Application ID</label>
                    <div class="col-sm-10">
                        <strong><input type="text" class="form-control" id="name" name="id" readonly value="<?php echo $r['app_id'];?>"></strong>
                        <p class='text-danger'></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="fullname" placeholder="" value="<?php echo $r['name'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Date of birth</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="dob" placeholder="" value="<?php echo $r['dob'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo $r['email'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="adrs" placeholder="" value="<?php echo $r['adrs'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Aadhar No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="aadhar" value="<?php echo $r['aadhar'];?>" readonly >
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Nationality</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="nationality" placeholder="" value="<?php echo $r['natn'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">PIN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="pin" placeholder="" value="<?php echo $r['pin'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="mob" placeholder="" value="<?php echo $r['mob'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="username" readonly value="<?php echo $r['username'];?>">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Photo</label>
                    <div class="col-sm-10">
                        <img src="uploads/<?php echo $r['photo'];?>" width="150" height="150">
                        <p class='text-danger'></p>
                    </div>
                </div>
               
               <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="update" type="submit" value="UPDATE" class="btn btn-default btn-hover">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                           
                    </div>
                </div>
            </form> 
            
            <?php
				
				if(isset($_POST['update']))
				{
					
					$id=$_POST['id'];
					$name=$_POST['fullname'];
					$dob=$_POST['dob'];
					$email=$_POST['email'];
					$adrs=$_POST['adrs'];
					$aadhar=$_POST['aadhar'];
					$natn=$_POST['nationality'];
					$pin=$_POST['pin'];
					$mob=$_POST['mob'];
				
					
					
					
					$qry="update `applications` set`name`='$name',`dob`='$dob', `email`='$email',`adrs`='$adrs',`natn`='$natn', `pin`='$pin', `mob`='$mob' where app_id='$id'";
					$done=mysqli_query($con,$qry);
					
					if($done)
					{
						?>
                        <script>
						alert("Done");
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
