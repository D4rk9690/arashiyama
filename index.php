<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arashiyama Studio</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="icon" type="image/x-icon" href="./assets/images/logo.png">
</head>
<body>

  <!-- INTRO OVERLAY -->
  <div id="intro-overlay">
    <div class="intro-content">
      <img src="assets/images/logo.png" alt="Logo" class="intro-logo" />
      <h1 class="intro-text">Dive into the Studio</h1>
    </div>
    <div class="logo-rain"></div>

  </div>

  <!-- NAV -->
  <header class="navbar">
    <div class="logo-name">Arashiyama</div>
    <nav>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#games">Games</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="overlay">
      <img src="assets/images/logo.png" alt="Logo" class="hero-logo" />
      <h1 class="hero-title">ARASHIYAMA STUDIO</h1>
      <p class="hero-tag">Immersive worlds. Legendary stories. Played by millions.</p>
      <a href="#games" class="cta-button">Explore Games</a>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="section">
    <div class="container">
      <h2 class="section-title">Who We Are</h2>
      <p class="section-text">
        Arashiyama Studio is a leading Roblox development team creating genre-defining games with cutting-edge visuals, rich gameplay, and vibrant communities. Our goal is to make unforgettable experiences that players return to, again and again.
      </p>
    </div>
  </section>

  <!-- GAMES -->
  <section id="games" class="section dark">
    <div class="container">
      <h2 class="section-title">Our Games</h2>
      <div class="game-cards">
        <div class="game-card">
          <div class="game-thumb" style="background-image: url('assets/images/game1.png');"></div>
          <div class="game-info">
            <h3>Be NPC or Die</h3>
            <p><i data-lucide="heart" class="icon-heart"></i> 435k+ &nbsp; | &nbsp; 204.6M+ Visits</p>
          </div>
        </div>
        <div class="game-card">
          <div class="game-thumb" style="background-image: url('assets/images/game2.png');"></div>
          <div class="game-info">
            <h3>🔎 Undercover Trouble!</h3>
            <p><i data-lucide="heart" class="icon-heart"></i> 31K+ &nbsp; | &nbsp; 17.2M+ Visits</p>
          </div>
        </div>
        <div class="game-card stats-card">
          <i data-lucide="activity"></i>
          <h4>Total Studio Stats</h4>
          <p>220 000 000+ Total Visits</p>
          <p>1 000 000+ Followers</p>
        </div>
      </div>
    </div>
    <div class="live-stats">
      <i data-lucide="users"></i>
      <span id="player-count">Loading...</span>
      <span class="label">Players Online</span>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="section">
    <div class="container">
      <h2 class="section-title">Get in Touch</h2>
      <p class="section-text">
        We're open to collaborations, media, hiring, and new partnerships. Let's build something legendary.
      </p>
      <a href="mailto:contact@arashiyama.dev" class="cta-button">contact@arashiyama.dev</a>
    </div>
  </section>

  <script src="script.js"></script>
  <script>lucide.createIcons();</script>
</body>
</html>
