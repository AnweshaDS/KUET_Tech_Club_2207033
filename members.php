<?php
include "db.php";
$sql = "SELECT * FROM members
WHERE status='approved'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUET Tech Club</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!-- NAVBAR -->
  <header class="navbar">
    <div class="logo">
      <h2>KUET <span>Tech Club <i class="fa-solid fa-bolt"></i></span></h2>
    </div>

    <nav class="nav-links">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="members.php">Members</a>
      <a href="events.php">Events</a>
      <a href="gallery.php">Gallery</a>
      <a href="register.php" class="btn">Join</a>

      <!-- Theme Toggle -->
      <button class="theme-toggle" title="Toggle Theme"><i class="fa-solid fa-moon"></i></button>
    </nav>
  </header>

    <!-- HEADER -->
    <section class="page-header">
        <h1>Our Team Members</h1>
        <p>The talented minds behind KUET Tech Club</p>
    </section>

    <!-- FIXED EXECUTIVE MEMBERS -->
    <section class="members-section">
        <!-- PRESIDENT -->
        <div class="member-card">
            <img src="image/member1.jpg" alt="Member">
            <h3>Md. Arif Hossain</h3>
            <p class="role">President</p>
            <p class="bio">Passionate about leadership, software development, and innovation.</p>
            <div class="tags">
                <span>Leadership</span>
                <span>Web Dev</span>
            </div>
        </div>

        <!-- VP -->
        <div class="member-card">
            <img src="image/member2.jpg" alt="Member">
            <h3>Nusrat Jahan</h3>
            <p class="role">Vice President</p>
            <p class="bio">Interested in AI, robotics, and competitive programming.</p>
            <div class="tags">
                <span>AI</span>
                <span>Robotics</span>
            </div>
        </div>
        <!-- DEV -->
        <div class="member-card">       
            <img src="image/member3.jpg" alt="Member">
            <h3>Srija Chowdhury</h3>
            <p class="role">Developer</p>
            <p class="bio">Loves building websites and learning modern frameworks.</p>
            <div class="tags">
                <span>Frontend</span>
                <span>UI/UX</span>
            </div>  
        </div>

        <!-- DESIGNER -->
        <div class="member-card">
            <img src="image/member4.jpg" alt="Member">
            <h3>Tanvir Islam</h3>
            <p class="role">Designer</p>
            <p class="bio">Creative designer focused on user experience and visuals.</p>
            <div class="tags">
                <span>Design</span>
                <span>Creativity</span>
            </div>
        </div>
        
</section>

<!-- DYNAMIC MEMBERS -->
<section class="page-header">
    <h1>General Members</h1>
    <p>Approved club members</p>
</section>

<section class="members-section">
<?php
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>

<div class="member-card">
    <img src="uploads/<?php echo $row['image']; ?>" alt="Member">
    <h3><?php echo $row["name"]; ?></h3>
    <p class="role">Member</p>
    <p class="bio"><?php echo $row["message"]; ?></p>
    <div class="tags"><span><?php echo $row["department"]; ?></span><span><?php echo $row["skills"]; ?></span></div>
</div>

<?php
}
}
else{
echo "<h2>No approved members yet.</h2>";
}
?>
</section>
<button id="topBtn"><i class="fa-solid fa-arrow-up"></i></button>

<footer>
<p><i class="fa-regular fa-copyright"></i>
  2026 KUET Tech Club | Khulna University of Engineering & Technology
</p>
</footer>
<script src="js/script.js"></script>
</body>
</html>

