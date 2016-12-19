<?php
// check if fields passed are empty
if(empty($_POST['sub_email'])	||
   !filter_var($_POST['sub_email'],FILTER_VALIDATE_EMAIL))
   {
     header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=failure');
  //echo "No arguments Provided!";
	return false;
   }

$email = $_POST['sub_email'];

$servername = "localhost";
$username = "root";
$password = "immco";
$dbname = "immco";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscription (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {

  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=success');
} else {

  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=failure');
}

$conn->close();

return true;
?>
