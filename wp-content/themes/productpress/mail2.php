<?php

  if ( isset($_POST['name']) )     { $name = $_POST['name']; } else { die("Please don't try to hack this site!"); }
  if ( isset($_POST['email']) )    { $email = $_POST['email']; } else { die("Please don't try to hack this site!"); }
  if ( isset($_POST['subject']) )  { $subject = $_POST['subject']; } else { die("Please don't try to hack this site!"); }
  if ( isset($_POST['comments']) ) { $comments = $_POST['comments']; } else { die("Please don't try to hack this site!"); }
  
  
  //Function to avoid spam
  function antispam($field) {

           $field=filter_var($field, FILTER_SANITIZE_EMAIL);
           if(filter_var($field, FILTER_VALIDATE_EMAIL)) { return TRUE; } else { return FALSE; }
  
  }

  //Parameters:
  $thank_you = "Message sent!  We've received your email. We'll be in touch as soon as we possibly can!";
  $to = "your valid email address for instance info@johndoe.com";
  $subject = "The subject that you want to see when received a message from your site";
  $message = "From: $name\nEmail address: $email\nSubject: $subject \n\nMessage:\n\n$comments\n";
  $from = $email;
  $headers = "From:" . $from;

  //check if the email address is invalid
  $checkmail = antispam($email);
  if ($checkmail==FALSE) { echo "<div class=\"error\"><p>Please don't try to hack this site!</p></div>"; }
  if ($checkmail==TRUE) { 
     if ( mail($to,$subject,$message,$headers) ) { echo "<div class=\"success\"><p>$thank_you</p></div>"; } else { echo "<div class=\"error\"><p>Failure!</p></div>"; }
  
  }


?>