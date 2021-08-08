<?php
include("db.php");

$idd=$_GET['id'];
echo $idd;

$sql="update applications set status='farwarded' where app_id='$idd'";
$done=mysqli_query($con,$sql);
if($done)
{
	?>
    <script>
	alert("Farwarded for verification");
	window.location.assign("admin_home.php");
	</script>
    <?php
}
?>