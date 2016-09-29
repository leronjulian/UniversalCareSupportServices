<?php
	if(isset($_POST['submit'])) {

		$myemail = "universalcaresupport@aol.com"; 
		$firstname = $_POST['userfirstname'];
		$lastname = $_POST['userlastname'];
		$phone = $_POST['userphone'];
		$address = $_POST['useraddress'];
		$country = $_POST['usercountry'];
		$city = $_POST['usercity'];
		$state = $_POST['userstate'];
		$zip = $_POST['userzip'];
		$email = $_POST['useremail'];

   

$body = "Hello,\n\nYou have recieved a career interest from $firstname $lastname. \n\n\nTheir information: email: $email.\nPhone Number: $phone\nAddress: $address\nCity: $city\nState: $state\nZip: $zip\nCountry: $country";
$subject = "UCSS CAREER INTEREST";


echo "Your form has been submitted!\n\n<a href=\"careers.html\">CLICK HERE TO RETURN</a>";
mail($myemail, $subject, $body, $headers);

} else {

echo "An error occurred during the submission of your message...<a href=\"careers.html\">CLICK HERE TO RETURN</a>";

}
?>

