<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Lien vers Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

  </head>
  <body>
    <div class="header">
      <div class="logo">
        <img src="<?= base_url('assets/images/logo.png'); ?>"  />
        <h1>
          Trip <br />
          Fusion
        </h1>
      </div>

      <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#contact">Destenations</a>
        <a href="#contact">Trips</a>
        <a href="#about">About</a>
      </div>
    </div>
    <div class="container">
      <section class="video-section">
        <div class="content">
          <h1>
            "The world is a book, and those who do not travel read only one
            page"
          </h1>
          <p>
            Our team has selected the best attractive and diverse tourist
            destinations in Morocco to give you the opportunity to discover the
            most wonderful historical and modern cities and have an
            <strong>exceptional experience</strong> .
          </p>
          <button class="play-button" onclick="showVideo()">
            <span>&#9658;</span> Watch the video
          </button>
          <div class="btn">
            <a href="http://localhost:8080/login" target="_blank" rel="noopener noreferrer"
              >log in</a
            >
            <a href="http://localhost:8080/sign?" target="_blank" rel="noopener noreferrer"
              >sing in</a
            >
          </div>
        </div>

        <div id="video-container" class="video-container">
          <video id="natureVideo" controls>
            <source src=<?= base_url('assets/images/video.mp4'); ?> type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </section>

      <section class="des">
        <div class="card">
          <div class="ville" id="kech">
            <span class="card__title">MARAKKECH</span>
            <button id="kechB" class="card__button">learn more</button>
          </div>
        </div>

        <div class="card">
          <div class="ville" id="tanga">
            <span class="card__title">CHFCHAOUNE</span>
            <button id="tangaB" class="card__button">learn more</button>
          </div>
        </div>

        <div class="card">
          <div class="ville" id="fez">
            <span class="card__title">FEZ</span>
            <button id="fezB" class="card__button">learn more</button>
          </div>
        </div>
      </section>

      <section class="des">
        <div class="card">
          <div class="ville" id="dakhla">
            <span class="card__title">DAKHLA</span>
            <button id="dakhlaB" class="card__button">learn more</button>
          </div>
        </div>

        <div class="card">
          <div class="ville" id="casa">
            <span class="card__title">CASABLANCA</span>
            <button id="casaB" class="card__button">learn more</button>
          </div>
        </div>

        <div class="card">
          <div class="ville" id="marzoga">
            <span class="card__title">MARZOUGA</span>
            <button id="mrzgB" class="card__button">learn more</button>
          </div>
        </div>
      </section>
    </div>

    <!-- <script src="script.js"></script> -->
    <script src="<?= base_url('assets/script/script.js'); ?>"></script>

  </body>
</html>
