<?php
 
if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName =$_POST['lastName'];
    $emailInfo = $_POST['email'];
    $phoneNumber = $_POST['number'];
    $comments = $_POST['comments'];

    $mailTo = "bonjourcestmichel@gmail.com";
    $headers = "From: ".$emailInfo;
    $txt = "You have received an email from ".$firstName." ".$lastName.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");

}