<?php
if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTp = "From:".$name."<".$email.">\r\n";

    $recipient = "mohamedalibahri122@gmail.com";
    
    mail($recipient, $subject, $message, $mailheader) or die("Error!");

    echo " ok mail sent "
}
?>