<?php
if (isset($_POST['submit'])) {
  $to = 'shonna.dorsey@gmail.com';
  $subject = 'Email from shonnadorsey.com';
  $message = 'Name: " . $_POST['contactName'] . "\r\n\r\n";
  $message .= 'Email: ' . $_POST['emailAddr'] . "\r\n\r\n";
  $message .= 'Reason: ' . $_POST['dropDown'] . "\r\n\r\n";
  $message .= 'Comments: ' . $_POST['textArea'] . "\r\n\r\n";
  
  echo $message;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Thank you!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />    
  </head>
  <body>
    <h1>Thank you!</h1>
    <p>Your message has been sent.</p>
    
    <h1>Oops!</h1>
    <p>There was a problem sending your message.</p>
  </body>
</html>    
