<?php
// Hardcoded valid credentials
$valid_username = "user";
$valid_password = "pass123";

$username = "";
$login_success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $login_success = true;
    }
} else {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ShopSphere - Login Result</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .result-container {
            background: #fff;
            padding: 2rem 3rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 1.5rem;
        }
        .success {
            color: #2e7d32;
            font-weight: 700;
        }
        .fail {
            color: #c62828;
            font-weight: 700;
        }
        a {
            display: inline-block;
            margin-top: 1.5rem;
            text-decoration: none;
            color: #0078d7;
            font-weight: 600;
            border: 1px solid #0078d7;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        a:hover {
            background-color: #0078d7;
            color: white;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php if ($login_success): ?>
            <h2 class="success">Login successful!</h2>
            <p>Welcome, <?php echo htmlspecialchars($username); ?>.</p>
            <!-- You can add a link to dashboard or main app here -->
        <?php else: ?>
            <h2 class="fail">Login failed!</h2>
            <p>Invalid username or password.</p>
            <a href="login.php">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
