<button class="accordion">Pas 1</button>
<article class="panel">
  <p style="color: black;">Dintre l'arxiu index.php (../xampp/htdocs/index.php) copiarem aquest codi:</p>
  <div class="codebox" id="cb4boxcode">
    <xmp>
      <head>
        <title> Tutorial 1 </title>
        <link rel="stylesheet" href="http://localhost/core/css/index.css">
      </head>

      <body>
        <h1>INICIA SESSIÓ</h1>  
        <form method="POST">
          <div id="login">
            Usuari <input name="UserL" type="user">
            Contrasenya <input name="PassL" type="password">
          </div>

          <button name="login-btn"/>Conectar-me</button>

        </form>

        <h1>REGISTRAT</h1>
        <form method="POST">
          <div id="register">
            Email <input name="EmailR" type="email">
            Usuari <input name="UserR" type="user">
            Contrasenya <input name="PassR" type="password">
          </div>

          <button name="register-btn"/>Registrar-me</button>

        </form> 
      </body>
    </xmp>
  </div>
  <button id="cb4" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
</article>

<button class="accordion">Pas 2</button>
<article class="panel">
  <p style="color: black;">Dintre l'arxiu logged.php (../xampp/htdocs/logged.php) copiarem aquest codi:</p>
  <div class="codebox" id="cb10boxcode">
    <xmp>
      <head>
        <title> Tutorial 1 - Logged</title>
      </head>

      <body>

        <h1>HAS INICIAT SESSIÓ CORRECTAMENT</h1>  
        <a href="/logout.php">Tancar sessió</a>
      </body>
    </xmp>
  </div>
  <button id="cb10" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
</article>

<button class="accordion">Pas 3</button>
<article class="panel">
  <p style="color: black;">Ara només tenim el codi amb html, sense cap funcionalitat demoment i sense cap estil.</p>
  <p style="color: black">Seguidament procedirem a afegir-li css.</p>
</article>
