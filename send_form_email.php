
<?php
 

function died($error) {

    // your error code can go here

    echo "We are very sorry, but there were error(s) found with the form you submitted. ";

    echo "These errors appear below.<br /><br />";

    echo $error."<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();

}

if(isset($_POST['cemail'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "diyer92@gmail.com";
 
    $email_subject = "New Message for IMMCO!";
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['cname']) ||
  
        !isset($_POST['cemail']) ||
  
        !isset($_POST['cmessage'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $cname = $_POST['cname']; // required
  
    $cemail = $_POST['cemail']; // required
 
    $cmessage = $_POST['cmessage']; // not required 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$cemail)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$cname)) {
 
    $error_message .= 'The name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($cmessage) < 2) {
 
    $error_message .= 'The message you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($cname)."\n";
  
    $email_message .= "Email: ".clean_string($cemail)."\n";
  
    $email_message .= "Message: ".clean_string($cmessage)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$cemail."\r\n".
 
'Reply-To: '.$cemail."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>