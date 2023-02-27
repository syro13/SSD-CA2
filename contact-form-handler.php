<?php

$errors = '';
$myemail = 'D00246698@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['language']) ||
   empty($_POST['age']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$language = $_POST['language'];
$age = $_POST['age'];
// console.log($name,$email_address,$phone,$message,$language,$age)
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n 
        Name: $name \n 
        Email: $email_address \n 
        Phone: $phone \n 
        Language: $language \n 
        Age: $age \n 
        Message\n $message\n ";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.html');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>