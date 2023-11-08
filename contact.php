<?php
// check if the form is submitted
if (isset($_POST['submit'])) {
  // get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // validate the email address
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // set the email parameters
    $to = "chehabahmad13@gmail.com"; // your email address
    $headers = "From: $name <$email>";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // send the email
    if (mail($to, $subject, $body, $headers)) {
      // redirect to the thank you page
      header("Location: thank-you.html");
    } else {
      // display an error message
      echo "Sorry, something went wrong. Please try again later.";
    }
  } else {
    // display an error message
    echo "Please enter a valid email address.";
  }
}
?>
