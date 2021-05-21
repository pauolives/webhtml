<!DOCTYPE html>
<html>
<?php
require 'core/php/database.php';

$title = "Serveis";

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
    <main >

      <section id="services">
        <h2 class="textcenter">Servei hosting (Pròximament)</h2>
        <section class="container2">
          <article class="columns">
            <ul class="price">
              <li class="header">Basic</li>
              <li class="grey">-- / any</li>
              <li>1 vCore</li>
              <li>2 GB</li>
              <li>40 GB SSD NVMe</li>
              <li>250 Mb/s ilimitat</li>
              <li class="grey"><a class="button">Comprar</a></li>
            </ul>
          </article>

          <article class="columns">
            <ul class="price">
              <li class="header">Pro</li>
              <li class="grey">-- / any</li>
              <li>2 vCore</li>
              <li>4 GB</li>
              <li>120 GB SSD NVMe</li>
              <li>500 Mb/s ilimitat</li>
              <li class="grey"><a class="button">Comprar</a></li>
            </ul>
          </article>

          <article class="columns">
            <ul class="price">
              <li class="header">Premium</li>
              <li class="grey">-- / any</li>
              <li>8 vCore</li>
              <li>16 GB</li>
              <li>512 GB SSD NVMe</li>
              <li>2 Gb/s ilimitat</li>
              <li class="grey"><a class="button">Comprar</a></li>
            </ul>
          </article>
        </section>
      </section>

      <section class="color">
        <h2 class="textcenter">Desenvolupament web</h2>
        <section class="container2">
          <article class="columns">
            <ul class="price">
              <li class="header">Basic</li>
              <li class="grey">100€ IVA incl.</li>
              <li>Diseny visual basic</li>
              <li>10 pàgines</li>
              <li>Diseny adaptatiu</li>
              <li>20 paraules CEO</li>
              <li>Sense base de dade</li>
              <li>Sense CMS</li>
              <li class="grey"><a class="button">Comprar</a></li>
            </ul>
          </article>

          <article class="columns">
            <ul class="price">
              <li class="header">Pro</li>
              <li class="grey">249€ IVA incl.</li>
              <li>10-20 pàgines</li>
              <li>Diseny visual atractiu</li>
              <li>Diseny adaptatiu</li>
              <li>40 paraules CEO</li>
              <li>Base de dades bàsica</li>
              <li>CMS estandar</li>
              <li class="grey"><a class="button">Comprar</a></li>
            </ul>
          </article>

          <article class="columns">
            <ul class="price">
              <li class="header">Premium</li>
              <li class="grey">499€ IVA incl.</li>
              <li>10-40 pàgines</li>
              <li>Diseny visual avançat</li>
              <li>Diseny adaptatiu</li>
              <li>80 paraules CEO</li>
              <li>Base de dades avançada</li>
              <li>CMS avançat</li>
              <li class="grey"><a class="button">Comprar</a></li>
            </ul>
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
