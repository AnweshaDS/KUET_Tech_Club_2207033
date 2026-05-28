<?php
include "db.php";
$id = $_GET["id"];
$sql = "DELETE FROM members WHERE id=$id";
$conn->query($sql);
header("Location: admin_dashboard.php");
exit();
?>