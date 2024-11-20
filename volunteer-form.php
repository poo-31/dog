<?php
// Collect volunteer data from the URL
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['interest'])) {
    // Sanitize and collect form data
    $name = htmlspecialchars(trim($_GET['name']));
    $email = htmlspecialchars(trim($_GET['email']));
    $interest = htmlspecialchars(trim($_GET['interest']));

    // Show thank you message if all fields are filled
    if (!empty($name) && !empty($email) && !empty($interest)) {
        echo "<h2>Thank you for signing up, $name!</h2>";
        echo "<p>We will contact you soon to discuss the next steps.</p>";
    } else {
        echo "<p style='color: red;'>Please fill in all fields.</p>";
    }
}
header("Location: thank-you.php");
    exit();
}
?>

