<button class="accordion">Xampp</button>
<article class="panel">
  <p>Quan instal·lem el xampp ens hem d'assegurar que els següents components estan seleccionats:</p>
  <img src="../../core/img/tut1.png"/>
  <p>Quan tinguem el xampp instal·lat l'iniciarem i engegarem els següents serveis:</p>
  <img src="../../core/img/tut2.png"/>
</article>

<button class="accordion">Estructura de carpetes i arxius</button>
<article class="panel">
  <p style="color: black;">Haurem de crear la següent estructura:</p>
  <img src="../../core/img/tut3.png"/>
</article>

<button class="accordion">Base de dades</button>
<article class="panel">
  <p style="color: black;">Ara prepararem la base de dades. Anirem al nostre navegador i escriurem <a href="http://localhost/phpmyadmin" style="color: black;text-decoration: underline;" target="_blank">localhost/phpmyadmin</a></p>
  <p style="color: black;">Crearem una nova base de dades amb el nom que vulguem i llavors al apartat d'SQL enganxarem el següent codi i l'executarem:</p>
  <div class="codebox" id="cb3boxcode">
    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";




    CREATE TABLE `users` (
      `id` int(10) UNSIGNED NOT NULL,
      `username` varchar(10) CHARACTER SET utf8 NOT NULL,
      `password` varchar(200) CHARACTER SET utf8 NOT NULL,
      `email` varchar(250) CHARACTER SET utf8 NOT NULL,
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


    ALTER TABLE `users`
      ADD PRIMARY KEY (`id`);


    ALTER TABLE `users`
      MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
   </div>
   <button id="cb3" onclick="copyCode(this.id)" class="tbutton tbutton2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
</article>
