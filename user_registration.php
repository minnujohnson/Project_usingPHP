<?php
session_start();
include("db.php");
?>
<!DOCTYPE HTML>
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<script type="text/javascript">
    // Restrict user input in a text field
    // create as many regular expressions here as you need:
    var digitsOnly = /[1234567890]/g;
    var integerOnly = /[0-9\.]/g;
    var alphaOnly = /[A-Za-z]/g;
    var usernameOnly = /[A-Za-z\._-]/g;

    function restrictInput(myfield, e, restrictionType, checkdot){
        if (!e) var e = window.event
        if (e.keyCode) code = e.keyCode;
        else if (e.which) code = e.which;
        var character = String.fromCharCode(code);

        // if user pressed esc... remove focus from field...
        if (code==27) { this.blur(); return false; }

        // ignore if the user presses other keys
        // strange because code: 39 is the down key AND ' key...
        // and DEL also equals .
        if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) 
		{
            if (character.match(restrictionType)) 
			{
                if(checkdot == "checkdot")
				{
                    return !isNaN(myfield.value.toString() + character);
                } 
				else 
				{
                    return true;
                }
            } 
			else 
			{
                return false;
            }
        }
    }
</script>
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
                  <li><a href="index.php">Home</a></li>
                  <li class="active" ><a href="user_registration.php">New User</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="#">Contact Us</a></li>
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
    
            <li class="active">New User</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">
      
      		<?php
			$qry1="select max(id) as maxid from applications";
			$done1=mysqli_query($con,$qry1);
			$r=mysqli_fetch_array($done1);
			$idd=$r['maxid']+1;
			$maxid=date('Y')."/123456/00".$idd;
			//echo $maxid;
			?>
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Application ID</label>
                    <div class="col-sm-10">
                        <strong><input type="text" class="form-control" id="name" name="id" readonly value="<?php echo $maxid;?>" required></strong>
                        <p class='text-danger'></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="fullname" placeholder="" value="" required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                        <input type="radio"  name="gender" value="male">   Male
                        <input type="radio" name="gender" value="female">   Female
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Date of birth</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="dob" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="adrs" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Aadhar No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="aadhar" required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Nationality</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="nationality" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">PIN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="pin" placeholder="" maxlength="6" value=""required onkeypress="return restrictInput(this, event, digitsOnly);">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="mob" maxlength="10" placeholder="" value=""required onkeypress="return restrictInput(this, event, digitsOnly);">
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="username" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="email" name="pass" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="email" name="cpass" placeholder="" value=""required>
                        <p class='text-danger'></p>
                    </div>
                </div>
               
               <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" required>
                        <p class='text-danger'></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="reg" type="submit" value="REGISTER" class="btn btn-default btn-hover">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                           
                    </div>
                </div>
            </form> 
            
            <?php
				
				if(isset($_POST['reg']))
				{
					$file=$_FILES["file"]["name"]; 
					$folder="C:/wamp/www/passport/uploads/";
					move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);
					
					$name=$_POST['fullname'];
					$gen=$_POST['gender'];
					$dob=$_POST['dob'];
					$email=$_POST['email'];
					$adrs=$_POST['adrs'];
					$aadhar=$_POST['aadhar'];
					$natn=$_POST['nationality'];
					$pin=$_POST['pin'];
					$mob=$_POST['mob'];
					$uname=$_POST['username'];
					$pass=$_POST['pass'];
					$cpass=$_POST['cpass'];
					
					$sql3="select count(*) as cn from applications where aadhar='$aadhar'";
					$done3=mysqli_query($con,$sql3);
					$r=mysqli_fetch_array($done3);
					$c=$r['cn'];
					if($c>0)
					{
						?>
						<script>
						alert("Duplication Is Not allowed. You have already Applied for this...");
						window.location.assign("login.php");
						</script>
						<?php
					}
					
					else{
					if($pass=$cpass)
					{
					$qry="INSERT INTO `applications`(`app_id`, `name`, `gen`, `dob`, `email`, `adrs`,`aadhar`, `natn`, `pin`, `mob`, `username`, `password`, `photo`) VALUES ('$maxid','$name','$gen','$dob','$email','$adrs','$aadhar','$natn','$pin','$mob','$uname','$pass','$file')";
					$done=mysqli_query($con,$qry);
					
					$qry2="INSERT INTO `login`(`uid`, `uname`, `pass`, `type`) VALUES ('$maxid','$uname','$pass','user')";
					$done2=mysqli_query($con,$qry2);
					if($done)
					{
						?>
                        <script>
						alert("Done");
						window.location.assign("login.php");
						</script>
                        <?php
					}
					else
					{
						echo "Error";
					}
					}
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
