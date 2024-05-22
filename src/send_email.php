<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Extract form data
  $name = $_POST['name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Email details
  $to = 'gergojeles5@gmail.com';
  $subject = 'New Message from Contact Form';
  $body = "Name: $name\nCompany: $company\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo '<script>alert("Message sent successfully!"); window.location.href = "contact.html";</script>';
  } else {
    // Failed to send email
    echo '<script>alert("Failed to send message. Please try again later."); window.location.href = "contact.html";</script>';
  }
}
