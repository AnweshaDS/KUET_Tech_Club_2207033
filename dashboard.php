<?php
session_start();

if (!isset($_SESSION["member_name"])) {
    header("Location: ../html/register.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="dashboard-box">
    <h1>
      Welcome,
      <?php echo $_SESSION["member_name"]; ?>!
    </h1>
    <p>Your registration request has been submitted.</p>
    <p>Status: Pending Admin Approval</p>
    <?php

    if(isset($_COOKIE["member_email"])){
        echo "<p>Email: "
        . $_COOKIE["member_email"] .
        "</p>";
    }
    ?>
    <a href="logout.php" class="dashboard-btn">Logout</a>
</div>
</body>
</html>