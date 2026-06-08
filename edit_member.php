<?php
include "db.php";
$id = $_GET["id"];
$sql = "SELECT * FROM members WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(isset($_POST["update"])){
        $imageName = $_FILES["image"]["name"];
        $tempName = $_FILES["image"]["tmp_name"];
    if($imageName != ""){
    move_uploaded_file(
    $tempName,
    "uploads/" . $imageName
    );

    $update = "UPDATE members SET
    name='$name',
    email='$email',
    department='$department',
    skills='$skills',
    image='$imageName'
    WHERE id=$id";
}
else{
    $update = "UPDATE members SET
    name='$name',
    email='$email',
    department='$department',
    skills='$skills'
    WHERE id=$id";
}
    $conn->query($update);
    header("Location: admin_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Member</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<section class="form-section">
<div class="form-container">
<h1>Edit Member</h1>

<form method="POST" enctype="multipart/form-data">
<div class="input-group">
<label>Name</label>
<input type="text"
name="name"
value="<?php echo $row['name']; ?>">
</div>

<div class="input-group">
<label>Email</label>
<input type="email"
name="email"
value="<?php echo $row['email']; ?>">
</div>

<div class="input-group">
<label>Department</label>
<input type="text"
name="department"
value="<?php echo $row['department']; ?>">
</div>

<div class="input-group">
<label>Skills</label>
<input type="text"
name="skills"
value="<?php echo $row['skills']; ?>">
</div>

<div class="input-group">
<label>Update Image</label>
<input type="file"
name="image">
</div>

<button
type="submit"
name="update"
class="submit-btn">Update Member</button>
</form>
</div>
</section>
</body>
</html>