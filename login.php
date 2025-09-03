<?php
    session_start();
    
    // Function to check if the user is already logged in (has an active session)
    function isLoggedIn() {
        return isset($_SESSION['user_id']); // Replace 'user_id' with your actual session variable
    }
    
    // Function to prevent direct URL access after the first visit
    function preventDirectAccess() {
        if (isset($_SESSION['page_visited'])) {
            header("Location: ../page/Authentication.php"); // Redirect to another page
            exit();
        } else {
            $_SESSION['page_visited'] = true; // Set the session variable
        }
    }
    
    // Check if the user is trying to access the page directly
    if (!isLoggedIn()) {
        preventDirectAccess();
    }
    
    // Logout Function
    function logout() {
        session_unset();
        session_destroy();
        header("Location: ../views/Authentication.php"); // Redirect to login page
        exit();
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
      <form method="POST" id="loginForm">
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