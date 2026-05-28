<?php
session_start();
include "db.php";
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $skills = $_POST["skills"];
    $userMessage = $_POST["message"];

    // IMAGE UPLOAD
    $imageName = "";
    if(isset($_FILES["image"]) && $_FILES["image"]["name"] != ""){
        $imageName = time() . "_" . $_FILES["image"]["name"];
        $tempName = $_FILES["image"]["tmp_name"];
        $folder = "uploads/" . $imageName;
        move_uploaded_file($tempName, $folder);
    }

    // VALIDATION
    if (empty($name) || empty($email)) {
        $message = "Please fill all required fields.";
    } else {
        $sql = "INSERT INTO members
        (name, email, department,
        skills, message, image, status)
        VALUES
        ('$name', '$email',
        '$department', '$skills',
        '$userMessage', '$imageName',
        'pending')";
        if ($conn->query($sql) === TRUE) {
            // SESSION
            $_SESSION["member_name"] = $name;
            // COOKIE
            setcookie(
                "member_email",
                $email,
                time() + 86400,
                "/"
            );
            header("Location: dashboard.php");
            exit();
        } else {
            $message = $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0"/>

<title>KUET Tech Club</title>

<link rel="stylesheet"
href="css/style.css"/>

</head>

<body>

<!-- NAVBAR -->
<header class="navbar">

<div class="logo">
<h2>KUET <span>Tech Club ⚡</span></h2>
</div>

<nav class="nav-links">

<a href="index.php">Home</a>

<a href="about.php">About</a>

<a href="members.php">Members</a>

<a href="events.php">Events</a>

<a href="gallery.php">Gallery</a>

<a href="register.php" class="btn">Join</a>

<button class="theme-toggle">🌙</button>

</nav>

</header>

<!-- FORM SECTION -->
<section class="form-section">

<div class="form-container">

<h1>Join KUET Tech Club</h1>

<p>Fill out the form to become a member</p>

<form
method="POST"
enctype="multipart/form-data">

<div class="input-group">

<label>Full Name</label>

<input
type="text"
name="name"
placeholder="Enter your name"
required>

</div>

<div class="input-group">

<label>Email</label>

<input
type="email"
name="email"
placeholder="Enter your email"
required>

</div>

<div class="input-group">

<label>Department</label>

<input
type="text"
name="department"
placeholder="e.g. CSE, EEE"
required>

</div>

<div class="input-group">

<label>Skills</label>

<input
type="text"
name="skills"
placeholder="e.g. HTML, Python, Robotics">

</div>

<div class="input-group">

<label>Why do you want to join?</label>

<textarea
name="message"
rows="4"
placeholder="Write your motivation..."></textarea>

</div>

<!-- IMAGE -->
<div class="input-group">

<label>Upload Your Photo</label>

<input
type="file"
name="image"
accept="image/*">

</div>

<button
type="submit"
class="submit-btn">

Submit Application

</button>

</form>

<!-- MESSAGE -->
<p style="margin-top:15px; color:red;">
<?php echo $message; ?>
</p>

</div>

</section>

<button id="topBtn">↑</button>

<!-- FOOTER -->
<footer>

<p>
© 2026 KUET Tech Club |
Khulna University of Engineering & Technology
</p>

</footer>

<script src="js/script.js"></script>

</body>
</html>
```
