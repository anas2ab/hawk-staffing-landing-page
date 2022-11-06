<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'anasahmadbutt@gmail.com';

  $email_subject = "New Form submission";

  $email_body = "You have received a new message from $name. Their number is phone.\n".
                          "Here is the message:\n $message".

  $to = "yourname@yourwebsite.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  if(isset($_POST['submitted'])) {
    mail($to,$email_subject,$email_body,$headers);
  }
    
?>