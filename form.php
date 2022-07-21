<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'] ;
$message = $_POST['message'] ;

$email_form ='info@email.com';

$email_subject ='New form submission';

$email_body ="Username: $name.\n".
              "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

  $to = 'rijuphp05@gmail.com';
  
  $headers = "Form: $email_form \r\n";

  $headers .= "Replay to : $visitor_email\r\n";

  mail($to, $email_subject, $email_body, $headers);

  header ("Location: ./contact.html");
                 
?>