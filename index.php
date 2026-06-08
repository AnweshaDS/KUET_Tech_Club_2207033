<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>KUET Tech Club</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="logo">
      <h2>KUET <span>Tech Club<i class="fa-solid fa-bolt"></i></span></h2>
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

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-text">
      <h1>KUET Tech Club</h1>
      <p>Empowering students to learn, build, and innovate in the world of technology.</p>
      <a href="register.php" class="hero-btn">Become a Member</a>
    </div>

    <div class="ktc">
      <img src="image/ktc.png" alt="KUET Logo"/>
    </div>
  </section>

  <!-- HIGHLIGHTS -->
  <section class="highlights">
    <h2>Our Domains</h2>

    <div class="cards">
      <div class="card">
        <h3><i class="fa-solid fa-code"></i>Coding</h3>
        <p>Enhance programming and problem-solving skills.</p>
      </div>

      <div class="card">
        <h3><i class="fa-solid fa-robot"></i>Robotics</h3>
        <p>Explore automation and intelligent systems.</p>
      </div>

      <div class="card">
        <h3><i class="fa-solid fa-globe"></i>Web Development</h3></h3>
        <p>Design and build modern web applications.</p>
      </div>
    </div>
  </section>
  <button id="topBtn">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- FOOTER -->
  <footer>
    <p><i class="fa-regular fa-copyright"></i>2026 KUET Tech Club | Khulna University of Engineering & Technology</p>
  </footer>
  <script src="js/script.js"></script>
</body>
</html>