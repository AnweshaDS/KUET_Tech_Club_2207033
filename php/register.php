<?php
// To Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // to get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $skills = $_POST["skills"];
    $message = $_POST["message"];
    // simple validation
    if (empty($name) || empty($email)) {
        echo "Please fill all required fields!";
    } else {
        // displaying data(without mysql for now)
        echo "<h2>Registration Successful!</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Department: " . $department . "<br>";
        echo "Skills: " . $skills . "<br>";
        echo "Message: " . $message;
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