<?php
include('db.php');

$fullname = htmlspecialchars(trim($_POST["fullname"]));
$relationship = trim(htmlspecialchars($_POST["relationship"]));
$messagebox = trim(htmlspecialchars($_POST["messagebox"]));

$checkExist = $db->prepare('SELECT * FROM testimonials WHERE fullname = ? AND relationship = ?');
$checkExist->execute(array($fullname, $relationship));
$existCount = $checkExist->rowCount();

if ($existCount > 0) {
    // $error = "You have added a testimonial aready ";
    echo  "You can not be added twice !!";
} else {
    $insertMessage = $db->prepare(' INSERT INTO testimonials(fullname, relationship, messagebox) VALUES (? ,? ,?)');
    $insertMessage->execute(array($fullname, $relationship, $messagebox));

    echo 'Thanks for the your comment';

    $fullname = "";
    $relationship = "";
    $messagebox = "";
}
