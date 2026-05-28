<?php
session_start();
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "12345"){
        $_SESSION["admin"] = "loggedin";
        header("Location: admin_dashboard.php");
        exit();
    }
    else{
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section class="form-section">
<div class="form-container">
    <h1>Admin Login</h1>
    <p>KUET Tech Club Management Panel</p>
    <?php
    if(isset($error)){
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form method="POST">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit"
        name="login"
        class="submit-btn">Login</button>
    </form>
</div>
</section>
</body>
</html>