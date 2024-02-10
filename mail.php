<?php
//get data from form  
$name = $_POST['contactPerson'];
$email= $_POST['email'];
$contact = $_POST['number']; 
$subject = $_POST['subject']; 
$message= $_POST['message'];
$to = "rajib@softclimax.com";
$subject = "Mail From website " . $name." ".$email;
$txt ="Name = ". $name . "\r\n Email = " . $email ."r\n contact number= ".$contact . "r\n Subject: " . $subject . "\r\n Message =" . $message;
$headers = "From: contact@softclimax.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.htm");
?>