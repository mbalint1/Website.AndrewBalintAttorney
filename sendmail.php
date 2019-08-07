<?php
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $name = $_REQUEST['name'] ;
  $phone = $_REQUEST['phone'] ;
  $message = $_REQUEST['message'] ;

  mail( "andy@robertinglish.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: thankyou.html" );
?>