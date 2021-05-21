<!DOCTYPE html>
<html>
<?php
require 'core/php/database.php';


function serverconfig() {

  $db = new Database();
  $serverconfig = $db->serversettings();
  return $serverconfig;
}

$serverconfig = serverconfig();


$tutorial = $_GET['tutorial'];

if ($tutorial == "preparacio") {
  $title = "Preparació";
} elseif ($tutorial == "html") {
  $title = "HTML";
} elseif ($tutorial == "css") {
  $title = "CSS";
} elseif ($tutorial == "php") {
  $title = "PHP";
} 

?>
  <head>
    <meta charset="utf-8"/>
    <title><?= $serverconfig['title']; ?> - Tutorial: <?=$title?></title>
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

  <body class="container tutorials">

  <!-- HEADER -->
    <header>
      <h1><?=$title;?></h1>
    </header>

  <!-- NAV -->
    <?php  include_once("../includes/nav.php"); ?>

  <!-- MAIN -->
    <main>
      <section class="tutorials">
        <?php 

        if ($tutorial == "preparacio") {
          include_once("../includes/tutorials/preparacio.php");
        } elseif ($tutorial == "html") {
          include_once("../includes/tutorials/html.php");
        } elseif ($tutorial == "css") {
          include_once("../includes/tutorials/css.php");
        } elseif ($tutorial == "php") {
          include_once("../includes/tutorials/php.php");
        } elseif (!isset($tutorial)) {
          header('Location: /404.php');
        } else {
          header('Location: /404.php');
        }

        ?>
      </section>
    </main>
  <!-- FOOTER -->
    <footer class="tutorials">
      <p>Pau Olives</p>
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

      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = 100 + "%";
          } 
        });
      }

      function copyCode(btnid) {
        var idbox = btnid + "boxcode"
        var elm = document.getElementById(idbox);

        if(document.body.createTextRange) {
          var range = document.body.createTextRange();
          range.moveToElementText(elm);
          range.select();
          document.execCommand("Copy");
        }
        else if(window.getSelection) {

          var selection = window.getSelection();
          var range = document.createRange();
          range.selectNodeContents(elm);
          selection.removeAllRanges();
          selection.addRange(range);
          document.execCommand("Copy");
        }
      }
    </script>

  </body>

</html>
