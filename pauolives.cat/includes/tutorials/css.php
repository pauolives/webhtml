<button class="accordion">Pas 1</button>
<article class="panel">
  <p style="color: black;">Dintre l'arxiu index.css (../xampp/htdocs/core/css/index.css) copiarem aquest codi:</p>
  <div class="codebox" id="cb5boxcode">
    body {
      background: #008ef5;
      color: white;
      }
    button {
      background: black;
      color: white;
      font-size: 16px;
      border: none;
    }
  </div>
  <button id="cb5" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
</article>

<button class="accordion">Pas 2</button>
<article class="panel">
  <p >No hem fet grans canvis però podeu provar d'afegir coses i explorar que passa.</p>
  <p>També podeu provar de afegir css al document logged.php. (Creeu un document a la carpeta css amb extensió .css i dintre de logged.php li afegiu <xmp><link rel="stylesheet" href="http://localhost/core/css/nomarxiu.css"></xmp><a style="text-decoration: none;"> entre les etiquetes</a><xmp><head></head></xmp></p>
</article>