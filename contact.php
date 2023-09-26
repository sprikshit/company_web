<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate the data (you can add more validation as needed)
      // Create an email message
        $to = 'sprikshit0610@gmail.com'; // Replace with your email address
        $subject = 'New contact form submission';
        $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            echo '<script>alert("Thank you! Your message has been sent.");</script>';
            echo '<script>window.location.href = "index.html";</script>'; // Redirect to the home page
        } else {
            // Email sending failed
            echo '<script>alert("Sorry, there was an error sending your message. Please try again later.");</script>';
        }
    }
 else {
    // Handle invalid form submission (GET request)
    echo '<script>alert("Invalid form submission.");</script>';
}
?>
