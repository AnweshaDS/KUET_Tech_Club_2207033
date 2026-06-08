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

  <!-- HEADER -->
  <section class="page-header">
    <h1>Gallery</h1>
    <p>Moments from our journey at KUET Tech Club</p>
  </section>

  <!-- GALLERY GRID -->
  <section class="gallery">
    <div class="gallery-item">
      <img src="image/g1.jpg" alt="Event">
      <div class="overlay">Coding Session</div>
    </div>

    <div class="gallery-item">
      <img src="image/g2.jpg" alt="Event">
      <div class="overlay">Workshop</div>
    </div>

    <div class="gallery-item">
      <img src="image/g4.png" alt="Event">
      <div class="overlay">Hackathon</div>
    </div>

    <div class="gallery-item">
      <img src="image/g3.png" alt="Event">
      <div class="overlay">Team Work</div>
    </div>

    <div class="gallery-item">
      <img src="image/g6.png" alt="Event">
      <div class="overlay">Robotics Lab</div>
    </div>

    <div class="gallery-item">
      <img src="image/g5.png" alt="Event">
      <div class="overlay">Presentation</div>
    </div>

  </section>
  <button id="topBtn">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- FOOTER -->
  <footer>
    <p><i class="fa-regular fa-copyright"></i>
      2026 KUET Tech Club | Khulna University of Engineering & Technology
    </p>
  </footer>
  <script src="js/script.js"></script>

</body>
</html>