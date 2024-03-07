<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    require_once 'includes/server.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="web.css">
  </head>
  <body>
    <nav class="navbar">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#About">About Me</a></li>
        <li><a href="#Contact">Contact Me</a></li>
        <?php if (!isset($_SESSION['username'])): ?>
          <li><a href="login.php">Log in</a></li>
        <?php else: ?>
          <li><a href="includes/logout.php"><?= $_SESSION['first'] ?> <?= $_SESSION['last'] ?></a></li>
        <?php endif ?>

      </ul>
    </nav>
    <section id="home" >
      <div class="main">
        <h1 style="font-size: 5em">Hello! Welcome</h1>       
        <?php if (!isset($_SESSION['username'])): ?>
          <a href="login.php" class="btn btn-primary mt-5 p-3">Sign in</a>
        <?php else: ?>
          <h1 style="font-size: 3em"><?= $_SESSION['first'] ?> <?= $_SESSION['last'] ?></h1>       
        <?php endif ?>
      </div>
    </section>

    <section id="About" >
      <h1 class="text-center">ABOUT ME</h1>
      <div id="pic">
        <img src="mew.jpg" alt="">
        <div id="intro">
          <h2> SAMANTHA JOY BALMES </h2>
          <p> Hi, I’m Samantha Joy Balmes 2nd Year and I am a NUFV. I’m currently seeking a position in software development. </p>
          <p> I have always been interested in computers and software, especially in education, I aim to create tools that make learning easier for students, <b>including myself.</b> </p>
        </div>
      </div>
    </section>

    <section id="education"  >
      <h1 class="text-center">EDUCATION</h1>
      <div class="schools">
        <div class ="schools">
          <img src="science.jpg" alt="">
          <img src="litex.jpg" alt="">
          <img src="nu.jpg" alt="">
        </div>
      </div>
    </section>

    <section id="Contact" >
      <h1 class="text-center">CONTACT ME</h1>
      <div class="social-links">
        <a href="https://www.facebook.com/balmes.samanthajoy" target="_blank">Facebook</a>
        <a href="https://www.instagram.com/manthajjxo" target="_blank">Instagram</a>
      </div>
    </section>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>