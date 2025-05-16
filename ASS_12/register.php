<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Basic validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "<h3 style='color:red;'>All fields are required.</h3>";
    } else {
        echo "<h2>✅ Registration Successful!</h2>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Password:</strong> " . $password . "</p>"; // Not safe in real apps
    }
} else {
    echo "<h3 style='color:red;'>Invalid request method.</h3>";
}
?>

