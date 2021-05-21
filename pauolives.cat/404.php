<?php

	$serverulr = $_SERVER['HTTP_HOST'].'/';
	$searchedurl = $_SERVER['REQUEST_URI'];

?>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Projecte Web</title>
    <meta name="author" content="Pau Olives" />
    <meta name="description" content="Proves 2020" />
    <meta name="keywords" content="html, proves, css" />
    <link rel="icon" type="image/jpg" href="favicon.jpg"/>
    <link rel="stylesheet" href="core/css/404.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script type="text/javascript" src="core/js/404.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>

  <body>
    
    <p id="hora"></p>

    <script>
    	var myVar = setInterval(myTimer ,1000);
    	function myTimer() {
    	  var d = new Date();
    	  document.getElementById("hora").innerHTML = d.toLocaleTimeString();
    	}
    </script>

    <main class="main">
      <section id="terminal">
        <header>
          <button class="Toolbar__button Toolbar__button--exit">&#10005;</button>
          <button class="Toolbar__button">&#9472;</button>
          <button class="Toolbar__button">&#9723;</button>
  	  		<p class="user">root@404-NotFound:~</p>
  	  	</header>
  	  	<article>
          <span id="typed" style="white-space:pre-line;"></span>
          <script>
            setTimeout(function() {
  				    window.location.href = "/index.php";
  		      }, 12500);

            var typed = new Typed('#typed',{
            		  strings:['<span class="Prompt__user">root@404-NotFound:</span><span class="Prompt__location">~</span><span class="Prompt__dollar">$</span> find <?=$serverulr?> -iname <?=$searchedurl?>^1000\n `Unable to find <?=$searchedurl?>`^1000\n <span class="Prompt__user">root@404-NotFound:</span><span class="Prompt__location">~</span><span class="Prompt__dollar">$</span> python3 redirect.py^1000\n `Seràs rediregit en:`^1000\n `5`^1000\n `4`^1000\n `3`^1000\n `2`^1000\n `1`'],
                      backSpeed: 0,
                      typeSpeed: 20,
                      loop: false
            });
          </script>
  			</article>
		  </section>
    </main>
  </body>
</html>