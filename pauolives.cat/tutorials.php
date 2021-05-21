<!DOCTYPE html>
<html>
<?php
require 'core/php/database.php';

$title = "Tutorials";

function serverconfig() {

  $db = new Database();
  $serverconfig = $db->serversettings();
  return $serverconfig;
}

$serverconfig = serverconfig();

?>
  <head>
    <meta charset="utf-8"/>
    <title><?= $serverconfig['title']; ?> - <?=$title?></title>
    <meta name="author" content="Pau Olives" />
    <meta name="description" content="Proves 2020" />
    <meta name="keywords" content="html, proves, css" />
    <link rel="icon" type="image/jpg" href="favicon.jpg"/>
    <link rel="stylesheet" href="core/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script type="text/javascript" src="core/js/index.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>

  <body class="container">

  <!-- HEADER -->
    <header class="banner">
      <?php  include_once("includes/header.php"); ?>
    </header>

  <!-- NAV -->
    <?php  include_once("includes/nav.php"); ?>

  <!-- MAIN -->
    <main>

      <section>
        <h2 class="textcenter">Tutorials disponibles:</h2>
        <section class="container2">
          <article class="tutorials">
            <header class="banner prep">
              <h1>Preparació</h1>
            </header>
            <p>Preparació per a la resta de tutorials</p>
            <a href="https://moodle.pauolives.cat" class="button size">Començar</a>
          </article>

          <article class="tutorials">
            <header class="banner html">
              <h1>HTML</h1>
            </header>
            <p>Introducció HTML</p>
            <a href="https://moodle.pauolives.cat" class="button size">Començar</a>
          </article>

          <article class="tutorials">
            <header class="banner css">
              <h1>CSS</h1>
            </header>
            <p>Introducció CSS</p>
            <a href="https://moodle.pauolives.cat" class="button size">Començar</a>
          </article>

          <article class="tutorials">
            <header class="banner php">
              <h1>PHP</h1>
            </header>
            <p>Introducció PHP</p>
            <a href="https://moodle.pauolives.cat" class="button size">Començar</a>
          </article>
        </section>
      </section>

    </main>
  <!-- FOOTER -->
    <footer>
      <p>Tèlefon: <?= $serverconfig['phone']; ?></p>
      <p>Correu: <?= $serverconfig['mail']; ?></p>
    </footer>

    <script>

      window.onscroll = function() {
        progressfunct();
        stickyfunct();
      }

      var sticky = navbar.offsetTop;

      var x = window.matchMedia("(max-width: 858px)")
      myFunction(x)
      x.addListener(myFunction)

    </script>

  </body>

</html>
