<?php
  $sabject="this is test";
  $recipient = "fredericklcho@gmail.com";
  $sender = $_POST["name"];
  $sender_email=$_POST["email"];
  $message=$_POST["message"];
  $mailbody="Name:$sender\nEmail:$sender_email\nMessage:$message";
  $mail=mail($recipient,$sabject,$mailbody);
  if($mail){
    echo"it worked";
  }else{
    echo"it failed";
  }
?>
