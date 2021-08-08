<?php
include("db.php");

$idd=$_GET['id'];
echo $idd;

$sql="update applications set status='rejected' where app_id='$idd'";
$done=mysqli_query($con,$sql);


if($done)
{
	?>
    <script>
	alert("Application Rejected");
	window.location.assign("police_home.php");
	</script>
    <?php
}
?>