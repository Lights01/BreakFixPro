<?php
session_start();
include('includes/db.php'); // Ensure this file exists and sets up $pdo correctly

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Query the database for the user with the given email
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verify the password if a user was found
        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to the home page
            header("Location: index.php");
            exit;
        } else {
            // Invalid credentials
            echo "<script>alert('Invalid email or password');</script>";
        }
    } catch (PDOException $e) {
        // Handle database errors
        echo "<script>alert('Error: " . addslashes($e->getMessage()) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | BreakFixPro</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="auth.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <header id="main-header">
    <div class="container">
      <div class="logo">
        <h1><a href="index.php">BreakFixPro</a></h1>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php" class="active">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="auth-container">
    <div class="auth-box">
      <h2>Login to Your Account</h2>
      <form class="auth-form" method="POST" action="login.php">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group remember-forgot">
          <label class="remember">
            <input type="checkbox">
            Remember me
          </label>
          <a href="#" class="forgot-password">Forgot Password?</a>
        </div>
        <button type="submit" class="auth-button">Login</button>
      </form>
      <p class="auth-switch">Don't have an account? <a href="register.php">Register</a></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>