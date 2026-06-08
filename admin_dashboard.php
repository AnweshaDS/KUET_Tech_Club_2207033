<?php
session_start();
include "db.php";
if(!isset($_SESSION["admin"])){

    header("Location: admin_login.php");
    exit();
}
$sql = "SELECT * FROM members WHERE status='pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="admin-container">
<h1>KUET Tech Club Admin Dashboard</h1>
<br>
<a href="admin_logout.php" class="delete-btn">Logout</a>
<br><br>
<table class="admin-table">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Department</th>
    <th>Skills</th>
    <th>Status</th>
    <th>Actions</th>
</tr>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>

<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["skills"]; ?></td>
<td>

<?php
if($row["status"] == "approved"){
    echo "<span class='approved'>Approved</span>";
}
else{
    echo "<span class='pending'>Pending</span>";
}
?>
</td>

<td>
<a class="approve-btn" href="approve_member.php?id=<?php echo $row['id']; ?>">Approve</a>
<a class="edit-btn" href="edit_member.php?id=<?php echo $row['id']; ?>">Edit</a>
<a class="delete-btn" href="delete_member.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php
    }
}
?>
</table>
</div>
</body>
</html>