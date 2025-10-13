
<?php
// Hardcoded valid credentials
$valid_username = "user";
$valid_password = "pass123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        echo "<h2>Login successful! Welcome, " . htmlspecialchars($username) . ".</h2>";
    } else {
        echo "<h2>Login failed. Invalid username or password.</h2>";
        echo '<p><a href="login.php">Try again</a></p>';
    }
} else {
    // If accessed directly without POST
    header("Location: login.php");
    exit;
}
?>
