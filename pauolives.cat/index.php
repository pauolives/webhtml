<!DOCTYPE html>
<html>
<?php

require 'core/php/database.php';

$title = "Inici";

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
    <meta name="description" content="2dRAM 2021 HTML CSS JS PHP M8 Tutorials Hosting Web Design" />
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
    	<section id="services" style="padding-left: 200px;">
    		<h2>Qui som?</h2>
    		<p>Som una petita empresa dedicada a disenyar webs desde 0 a gust dels nostres clients.</p>
    	</section>
		<section class="color" id="services">
			<h2 class="textcenter">Els nostres serveis</h2>
			<section class="container2">
				<article class="info">
					<h2><i class="fa fa-paint-brush" aria-hidden="true"></i></h2>
					<p>Disseny web</p>
				</article>
				<article class="info">
					<h2><i class="fa fa-code" aria-hidden="true"></i></h2>
					<p>Desenvolupament web</p>
				</article>
				<article class="info">
					<h2><i class="fa fa-server" aria-hidden="true"></i></h2>
					<p>Hosting (Pròximament)</p>
				</article>
			</section>
		</section>

      <section id="findus">
        <h2 class="textcenter">On pots trobar-nos?</h2>
        <article>
          <iframe height="538" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5086.82550143!2d1.8274700000000177!3d41.73657731416703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36f09ad185d8d287!2zSW5zdGl0dXRvIHDDumJsaWNvIExhY2V0YW5pYSwgTWFucmVzYSwgU3BhaW4=!5e0!3m2!1sen!2sau!4v1471218824160" style="max-width: 100%; width: 100%; border: none; padding: 0px; margin: 0px; height: 538px;">
          </iframe>
        </article>
      </section>

      <section class="color" id="contactus">
        <h2 class="textcenter">Contacta'ns</h2>
        <article class="contact">
          <form>
            <div class="row">
              <div class="col-25">
                <label for="fname">Nom</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Nom..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Cognom</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Cognom..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Correu</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="elteucorreu@exemple.cat..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Assumpte</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Escriu-nos alguna cosa.." style="height:200px"></textarea>
              </div>
            </div>
            <div class="row">
              <input type="submit" value="Enviar">
            </div>
          </form>
        </article>
      </section>

    </main>
  <!-- FOOTER -->
    <footer>
      <p>CONTACTE</p>
      <br>
      <p>Tèlefon: <?= $serverconfig['phone']; ?></p>
      <br>
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
