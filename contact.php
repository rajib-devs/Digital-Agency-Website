<?php


// if(isset($_POST['submit'])){
    
//  $name = $_POST[contactPerson];
//  $email = $_POST[email];
//  $number = $_POST[number];
//  $sub = "Email from website".$_POST["subject"];
//  $msg = $_POST[message];
//  $toEmail = 'rajib@softclimax.com';
// $text = "Name: ".$name."r\n\ Email Address: ".$email."r/n/ Contact Number: ".$number."r/n/ Subject: ".$subject."r/n/ Message: ".$msg; 

// $headers = "From: contact@softclimax.com"."\r\n"; 
// if($email !=NULL){
// 	if(mail($toEmail, $sub, $text, $headers)){
// 		echo "message sent"; 
//     }
//     else {
//         echo "Message not sent."

//     }

// }
// else{
//     echo "Something went wrong."
// }

// }


<?php

function strip_crlf($string)
{
    return str_replace("\r\n", "", $string);
}

if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $toEmail = "admin@phppot_samples.com";
    // CRLF Injection attack protection
    $name = strip_crlf($name);
    $email = strip_crlf($email);
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        // appending \r\n at the end of mailheaders for end
        $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
        if (mail($toEmail, $subject, $content, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
            $type = "success";
        }
    }
}
require_once "contact-view.php";
?>


?>