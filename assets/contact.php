<?php
$to = "sharmatarun1019@gmail.com";
$subject = "Response From Website";
$message = "Test";
$headers = "From: contact@eathealthy.life"

if(mail($to,$subject,$message,$headers)){
    echo "Mail Sent Successfully";
} else{
    echo "Error occured, Try again"
}
?>
