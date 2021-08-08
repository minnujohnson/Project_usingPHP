<?php
require 'class.phpmailer.php';//path to php mailer class
require 'class.smtp.php';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer();

include("db.php");

$idd=$_GET['id'];
echo $idd;


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
$mail->Body = "Your application is rejected By police.";
$mail->AddAddress($email);
$mail->Send();

	?>
    <script>
	alert("Notification Send");
	window.location.assign("admin_home.php");
	</script>
    <?php

?>