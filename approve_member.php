<?php
include "db.php";
$id = $_GET["id"];
$sql = "UPDATE members
SET status='approved'
WHERE id=$id";
$conn->query($sql);
header("Location: admin_dashboard.php");
exit();
?>