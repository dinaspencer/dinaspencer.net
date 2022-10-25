<?php
//'name' has to be the same as the name value on the form input element
//$email = $_POST['email'];
$message = $_POST['message'];
$human = $_POST['human'];
$from = 'hello@dinaspencer.net';
$to = $_POST['email']; //set to the default email address
$subject = "Your email from English class on dinaspencer.net";
$body = "From: $email\n Message: $message\n\n More practice and guides on on https://dinaspencer.net/english.html";

$headers = "From: $from" . "\r\n" .
"Reply-To: $from" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(isset($_POST['submit']) && ($_POST['human'] == '4')) {               
mail ($to, $subject, $body, $headers);  //mail sends it to the SMTP server side which sends the email
    echo "<p>Great job!</p><br/><h2><a href='https://dinaspencer.net/english.html'>Back to previous page</a></h2>";
    return true;
} 


else { 
    echo "<p>There was an error. Please try again.</p>"; 
    return false;
} 

?>
