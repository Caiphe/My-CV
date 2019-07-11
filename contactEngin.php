<?php

$From = "Marc Developer Website";
$destinataire = 'marc@propdata.net';
$subject  = "Contact Me";
$name = Trim(htmlspecialchars($_POST['name']));
$contact = Trim(htmlspecialchars($_POST['contact']));
$email = Trim(htmlspecialchars($_POST['email']));
$message = Trim(htmlspecialchars($_POST['message']));


$validationOK = true;
if (!$validationOK) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL.error.html\">";
    exit;
}

// Prepare The Email Body Text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Contact: ";
$Body .= $contact;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;

//Send Email
$success = mail($destinataire, $subject, $Body, "From: Dear <$name>");

// Redirect To Success Page
if ($success) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=sent.html\">";
} else {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
