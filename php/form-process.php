<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

//Add your email here
$EmailTo = "mferrer920@gmail.com";
$Subject = "[mauricioferrer.com] New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\r\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\r\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\r\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\r\n";

$headers  = "From: SizeSquirrel Admin <noreply@sizesquirrel.com>" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text; charset=iso-8859-1\r\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>