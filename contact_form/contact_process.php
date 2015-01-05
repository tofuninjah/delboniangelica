<?php

#require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/swift-5.0.1/lib/swift_required.php';
require $_SERVER['DOCUMENT_ROOT'] . '/libs/sendgrid-php/SendGrid_loader.php';
$user = getenv("SENDGRID_USERNAME");
$pass = getenv("SENDGRID_PASSWORD");


$post = (!empty($_POST)) ? true : false;

error_reporting (E_ALL ^ E_NOTICE);

if ($post) {
  $sendgrid = new SendGrid($user, $pass);  

  include 'email_validation.php';

  $name = stripslashes($_POST['name']);
  $email = trim($_POST['email']);
  $subject = stripslashes($_POST['subject']);
  $message = stripslashes($_POST['message']);

  $error = '';

  // Check name
  if(!$name) {
    $error .= 'Please enter your name.<br />';
  }

  // Check email

  if(!$email) {
    $error .= 'Please enter an e-mail address.<br />';
  }

  if($email && !ValidateEmail($email)) {
    $error .= 'Please enter a valid e-mail address.<br />';
  }

  // Check message (length)

  if(!$message || strlen($message) < 10) {
    $error .= "Please enter your message. It should have at least 10 characters.<br />";
  }

  if(!$error) {
    $mail = new SendGrid\Mail();

    $mail->addTo('chung.kang@gmail.com')->
        setFrom($email)->
        setFromName($name)->
        setSubject($subject)->
        setText($message);

    if($sendgrid->smtp->send($mail)){
      echo 'OK';
    };


  } else {
    echo '<div class="notification_error">'.$error.'</div>';
  }


}
?>