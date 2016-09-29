<?php
if(isset($_POST['submit'])) {

$myemail = "universalcaresupport@aol.com"; 
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['message'];



$message = "Hello,\n\nYou have recieved a request for more information from $name. Their email address is $email. Their message says:\n\n$text ";
$subject = "UCSS INFORMATION REQUEST";

echo "Your form has been submitted!\n\n<a href=\"services.html\">CLICK HERE TO RETURN</a>";
mail($myemail, $subject, $message);

} else {

echo "An error occurred during the submission of your message...<a href=\"services.html\">CLICK HERE TO RETURN</a>";

}
?>
