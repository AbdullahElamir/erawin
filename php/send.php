
<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'abdullahelameer@gmail.com';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: youremail@domain.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
$mail=mail($to,$subject,$message,$headers); //This method sends the mail.
if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed."; 
}

}else{
echo "Invalid Email, please provide an correct email.";
}

?>

