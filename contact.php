<?php require_once("includes/header.php"); ?>
<?php
if(isset($_POST['action'])) {
	require_once("includes/class.phpmailer.php");
	$mail             = new PHPMailer();
	$mail->IsSMTP();
	// $mail->Host = "";
	// $mail->SMTPDebug = 2;
	$mail->SetFrom($_POST['email'], $_POST['name']);
	$mail->AddReplyTo($_POST['email'], $_POST['name']);
	$mail->Subject = "Message from stephanierobison.com on ".date('m d, Y').' at '.date('g:i:s');
	$mail->AltBody = $_POST['message'];
	$mail->MsgHTML(nl2br($_POST['message']));
	$mail->AddAddress('stephanie@stephanierobison.com', "Stephanie Robison");
	if(!$mail->Send()) {
	  echo "<h3 style=\"color:red;\">Error: " . $mail->ErrorInfo . "</h3>";
	} else {
	  echo "<h3 style=\"color:green;\">Your email has been sent successfully.</h3>";
	}
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
		<p><label>Name</label> <input type="text" name="name" /></p>
		<p><label>Email</label> <input type="text" name="email" /></p>
		<p><label>Message</label> <textarea name="message" rows="" cols=""></textarea></p>
		<p><label>&nbsp;</label> <input type="submit" name="action" value="Send" /></p>
	</fieldset>
</form>
<?php require_once("includes/footer.php"); ?>