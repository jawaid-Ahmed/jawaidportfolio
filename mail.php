<?php
//get data from form  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$number = $_POST['mobile'];
$message= $_POST['message'];


$to = "jkahmed78@mail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $fname . "\r\n  Email = " . $email . "\r\n Mobile Number =" . $number . "\r\n Message =" . $message ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>