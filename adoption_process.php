<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dog_preference = htmlspecialchars($_POST['dog_preference']);
    $adoption_reason = htmlspecialchars($_POST['adoption_reason']);
    $experience = htmlspecialchars($_POST['experience']);

    // Create the message content
    $message = "New Dog Adoption Request:\n\n";
    $message .= "Full Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Dog Preference: $dog_preference\n";
    $message .= "Reason for Adoption: $adoption_reason\n";
    $message .= "Experience with Dogs: $experience\n";

    // Send an email (or process data as needed)
    $to = "youremail@example.com";  // Replace with your email address
    $subject = "New Dog Adoption Request";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page after successful submission
        header("Location: thankyou.php");
        exit();
    } else {
        echo "There was an error submitting your form. Please try again.";
    }
}
?>
