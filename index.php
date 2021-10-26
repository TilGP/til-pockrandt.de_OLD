<!doctype html>
<html lang="de">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,follow" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/8b368c47c1.js" crossorigin="anonymous"></script>
  <title>Site is still under construction!</title>
 </head>
 <body>

    <!--Header-->

  <header>
      <div id="logo">
          <a href="#">
              <img src="img/logo.png" alt="Logo">
          </a>
      </div>

      <nav>
          <ul>
              <li><a href="#home">Startseite</a></li>
              <li><a href="#about">Über mich</a></li>
              <li><a href="#work">Projecte</a></li>
              <li><a href="#contact">Kontakt</a></li>
          </ul>
      </nav>
    </header>

    <!--Home-->

    <section id="home">
        <hr>
        <h1>Til Georg Pockrandt</h1>
        <h2>Schüler am <a href="bszet.de">BSZ für Elektrotechnik</a></h2>
        <a href="#about">
            <i class="fas fa-arrow-alt-circle-down fa-5x"></i>
        </a>
        <i onclick="topFunction()" class="fas fa-arrow-alt-circle-up fa-5x" id="scrollToTopBtn"></i>
    </section>

    <!--About-->

    <section id="about">
        <h3>Über mich</h3>
        <hr>
        <img src="img/avatar.png" alt="Avatar">
        <h4>Til Georg Pockrandt</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, blanditiis doloribus dicta, ullam repudiandae, vitae odit saepe iusto incidunt <br> enim molestias voluptatum nam adipisci iure cum quos quas soluta sint!</p>
    </section>

    <!--Work-->

    <section id="work">
        <h3>Projekte</h3>
        <hr>
        <div id="projects">
            <ul>
                <li><a href="#"><img src="https://via.placeholder.com/280x170" alt="Placeholder_IMG_280x170"></a></li>
                <li><a href="#"><img src="https://via.placeholder.com/280x170" alt="Placeholder_IMG_280x170"></a></li>
                <li><a href="#"><img src="https://via.placeholder.com/280x170" alt="Placeholder_IMG_280x170"></a></li>
                <li><a href="#"><img src="https://via.placeholder.com/280x170" alt="Placeholder_IMG_280x170"></a></li>
                <li><a href="#"><img src="https://via.placeholder.com/280x170" alt="Placeholder_IMG_280x170"></a></li>
                <li><a href="#"><img src="https://via.placeholder.com/280x170" alt="Placeholder_IMG_280x170"></a></li>
            </ul>
        </div>
    </section>

    <!--Contact-->

    <section id="contact">
        <h3>Kontakt</h3>
        <hr>

        <form action="">
            <input class="input_text" type="email" tabindex="1" placeholder="E-Mail"><br>
            <input class="input_text" type="text" tabindex="2" placeholder="Betreff"><br>
            <textarea class="input_text" tabindex="3" placeholder="Nachricht"></textarea><br>
            <input class="input_text button" type="submit" value="Senden">
        </form>
    </section>

    <!--Footer-->

    <footer>
        <p>
            &copy; 2021 - Til Georg Pockrandt
        </p>
    </footer>
    <script src="scripts/scrollToTop.js"></script>
 </body>
</html>