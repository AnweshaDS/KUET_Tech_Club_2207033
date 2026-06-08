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
      <h2>KUET <span>Tech Club <i class="fa-solid fa-bolt"></i></span></h2>
    </div>

    <nav class="nav-links">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="members.php">Members</a>
      <a href="events.php">Events</a>
      <a href="gallery.php">Gallery</a>
      <a href="register.php" class="btn">Join</a>

      <button class="theme-toggle" title="Toggle Theme"><i class="fa-solid fa-moon"></i></button>
    </nav>
  </header>

  <!-- HERO ABOUT SECTION -->
  <section class="about-hero">
    <div class="about-text">
      <h1>About KUET Tech Club</h1>
      <p>
        KUET Tech Club is a student-driven organization dedicated to exploring 
        technology, innovation, and hands-on learning in fields like software 
        development, robotics, AI, and competitive programming.
      </p>
    </div>

    <div class="about-image">
      <img src="image/about-tech.png" alt="Teamwork"/>
    </div>
  </section>

<!-- MISSION / VISION -->
<section class="mission-vision">
  <div class="box">
    <h2><i class="fa-solid fa-bullseye"></i>Our Mission</h2>
    <p>
      To empower students with practical technical skills, teamwork experience,
      and problem-solving abilities through real-world projects and events.
    </p>
  </div>

  <div class="box">
    <h2><i class="fa-solid fa-rocket"></i>Our Vision</h2>
    <p>
      To build a strong tech community at KUET that fosters innovation,
      creativity, and leadership in the field of technology.
    </p>
  </div>

</section>

<!-- WHAT WE DO -->
<section class="activities">
  <h2>What We Do</h2>
  <div class="activity-grid">
    <div class="activity-card">
      <h3><i class="fa-solid fa-code"></i>Coding Practice</h3>
      <p>Regular problem-solving sessions and contests.</p>
    </div>

    <div class="activity-card">
      <h3><i class="fa-solid fa-robot"></i>Robotics Projects</h3>
      <p>Hands-on hardware and automation projects.</p>
    </div>

    <div class="activity-card">
      <h3><i class="fa-solid fa-laptop-code"></i>Web Development</h3>
      <p>Building real-world websites and applications.</p>
    </div>

    <div class="activity-card">
      <h3><i class="fa-solid fa-chalkboard-user"></i>Workshops</h3>
      <p>Skill development sessions by seniors and experts.</p>
    </div>

  </div>
</section>
<button id="topBtn"><i class="fa-solid fa-arrow-up"></i></button>

  <!-- FOOTER -->
  <footer>
    <p><i class="fa-regular fa-copyright"></i>
    2026 KUET Tech Club |Khulna University of Engineering & Technology
    </p>
  </footer>
  <script src="js/script.js"></script>
</body>
</html>