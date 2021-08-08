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
<script>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
   window.location.assign("verified.php");
}
</script>

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
                  <li><a href="admin_home.php">Home</a></li>
                  <li class="active"><a href="verified.php">Verified</a></li>
                  <li><a href="admin_fiq.php">Feedback & Reply</a></li>
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
    
            <li><a href="admin_home.php">Home</a></li>
    
            <li class="active">Print</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">
       <?php
	   		$idd=$_GET['id'];
	  		$sql="select * from applications where payment!='pending' and status='verified' and app_id='$idd'";
			$done=mysqli_query($con,$sql);
			$r=mysqli_fetch_array($done);
	   ?>
      		
            <table width="700" height="472" border="0" id="printTable">
  <tbody>
    <tr>
      <td colspan="3" style="font-size:30px; font-weight:600;" align="center">PASSPORT SEVA</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><img src="uploads/<?php echo $r['photo'];?>" width="100" height="100"></td>
    </tr>
    <tr align="center">
      <td>Application ID</td>
      <td>:</td>
      <td><?php echo $r['app_id'];?></td>
    </tr>
    <tr align="center">
      <td>FullName</td>
      <td>:</td>
      <td><?php echo $r['name'];?></td>
    </tr>
    <tr align="center">
      <td>Gender</td><td>:</td>
      <td><?php echo $r['gen'];?></td>
    </tr>
    <tr align="center">
      <td>Date of Birth</td><td>:</td>
      <td><?php echo $r['dob'];?></td>
    </tr>
    <tr align="center">
      <td>Email</td><td>:</td>
      <td><?php echo $r['email'];?></td>
    </tr>
    <tr align="center">
      <td>Addess</td><td>:</td>
      <td><?php echo $r['adrs'];?></td>
    </tr>
    <tr align="center">
      <td>Aadhar</td><td>:</td>
      <td><?php echo $r['aadhar'];?></td>
    </tr>
    <tr align="center">
      <td>Nationality</td><td>:</td>
      <td><?php echo $r['natn'];?></td>
    </tr>
    <tr align="center">
      <td>PIN</td><td>:</td>
      <td><?php echo $r['pin'];?></td>
    </tr>
    <tr align="center">
      <td>Mobile</td><td>:</td>
      <td><?php echo $r['mob'];?></td>
    </tr>
    <tr align="center">
      <td>UserName</td><td>:</td>
      <td><?php echo $r['username'];?></td>
    </tr>
    
  </tbody>
</table>
<div align="center" style="margin-top:40px;">
<input type="button" name="print" value="PRINT" onClick="printData();" />
</div>
            
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
