<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$web=$_POST['web'];

$to = "sharmatarun1019@gmail.com";
$subject = "Response From Website";
$message = "Name: ".$name."\n"."Phone: ".$phone."\n"."Email: ".$email."\n"."Website".$web."\n"."Message: "."\n\n".$msg;
$headers = "From: ".$email;

if(mail()){
    echo "<h1>Sent Successfully</h1>";
} else{
    echo "Something went wrong";
}

}
?>
