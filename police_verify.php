<?php
require 'class.phpmailer.php';//path to php mailer class
require 'class.smtp.php';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer();

include("db.php");

$idd=$_GET['id'];
echo $idd;

$sql="update applications set status='verified' where app_id='$idd'";
$done=mysqli_query($con,$sql);

$sql1="select * from applications where app_id='$idd'";
$done1=mysqli_query($con,$sql1);
$r=mysqli_fetch_array($done1);

$email=$r['email'];

$mail->IsSMTP(); // enable SMTP
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = gethostbyname('smtp.gmail.com');
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "bluegentest@gmail.com";
$mail->Password ="solution*secure";
$mail->SetFrom($email);
$mail->Subject = "Passport Seva";
$mail->Body = "All the verification Procedures are completed. Passport Will deliver Soon...";
$mail->AddAddress($email);
$mail->Send();

if($done)
{
	?>
    <script>
	alert("Verification Done");
	window.location.assign("police_home.php");
	</script>
    <?php
}
?>