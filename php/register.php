<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $skills = $_POST["skills"];
    $message = $_POST["message"];

    if (empty($name) || empty($email)) {
        echo "Please fill required fields.";
    } else {

        $sql = "INSERT INTO members (name, email, department, skills, message)
                VALUES ('$name', '$email', '$department', '$skills', '$message')";

        if ($conn->query($sql) === TRUE) {

            // SESSION
            $_SESSION["member_name"] = $name;

            // COOKIE
            setcookie("member_email", $email, time() + 86400, "/");

            header("Location: dashboard.php");
        } else {
            echo "Error";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>KUET Tech Club</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="form-container">
    <h2><?php echo $message; ?></h2>
    <a href="../html/index.html">Go Back to Home</a>
  </div>
</body>
</html>