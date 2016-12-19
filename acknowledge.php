<html>

<?php
if (isset($_POST['submit'])) {
    $to = 'diyer92@gmail.com'; // Webmaster's Email Address
    $subject = 'Feedback from my site';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$message .= 'Comments: ' . $_POST['comments'];
	$success = mail($to, $subject, $message);}
?>

<!DOCTYPE html>

<body>
<?php if (isset($success) && $success) { ?>
<h1>Thank You</h1>
Your message has been sent.
<?php } else { ?>
<h1>Oops!</h1>
Sorry, there was a problem sending your message.
<?php } ?>
</body>


