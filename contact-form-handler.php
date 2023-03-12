<?php

$errors = '';
$myemail = 'D00246698@student.dkit.ie'; // <-----Put your DkIT email address here.
if (
    empty($_POST['uName'])  ||
    empty($_POST['email']) ||
    empty($_POST['time']) ||
    empty($_POST['game']) ||
    empty($_POST['language']) ||
    empty($_POST['platform']) ||
    empty($_POST['runLink'])
) {
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: ' . $myemail . "\r\n" .
    'Reply-To: ' . $myemail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$userName = $_POST['uName'];
$email_address = $_POST['email'];
$time = $_POST['time'];
$game = $_POST['game'];
$language = $_POST['language'];
$platform = $_POST['platform'];
$link = $_POST['runLink'];
if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address
)) {
    $errors .= "\n Error: Invalid email address";
}

if (!preg_match(
    "/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/",
    $time
)) {
    $errors .= "\n Error: Invalid Time Format";
}

if (empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new submition. " .
        " Here are the details:\n 
        UserName: $userName \n 
        Email: $email_address \n 
        Time: $time \n 
        Game: $game \n 
        Language: $language \n 
        Platform\n $platform\n  
        Link\n $link\n ";

    mail($to, $email_subject, $email_body, $headers);
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