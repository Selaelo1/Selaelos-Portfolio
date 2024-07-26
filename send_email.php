<?php
  // Collect form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Send email
  $to = "selaelolanga@gmail.com";
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  mail($to, $subject, $message, $headers);

  // Redirect to thank-you page or display success message
  header("Location: thank-you.html");
  exit;
?>

