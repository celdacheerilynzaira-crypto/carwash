<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database();
    $db = $database->getConnection(); // ✅ Now using getter

    $auth = new Auth($db);

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($auth->login($username, $password)) {
        // Redirect to dashboard if login successful
        header("Location: ../page/admin_dashboard.php");
        exit();
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>Login</title>
    <link rel="stylesheet" href="../model/style.css">
</head>
<body>
    <div class="login-container">
      <form method="POST" action="../page/admin_dashboard.php" id="loginForm">
        <h3>LOGIN</h3>
        <?php if (!empty($message)): ?>
            <p style="color:red;"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <br />
        <button type="button" class="btn-close" onclick="window.location.href='../page/Home.php'">Cancel</button>
        <button type="submit" class="btn btn-login">Login</button>
      </form>
    </div>
</body>
</html>