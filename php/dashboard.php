<?php
session_start();

if (!isset($_SESSION["member_name"])) {
    header("Location: register.html");
}

if(isset($_COOKIE["member_email"])) {
    echo "Registered Email: " . $_COOKIE["member_email"];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION["member_name"]; ?>!</h1>
<p>You are now registered in KUET Tech Club.</p>

<a href="logout.php">Logout</a>

</body>
</html>