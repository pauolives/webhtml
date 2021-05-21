

<nav id="navbar">
  <div id="progressbar"></div>
  <input type="checkbox" id="check" onClick="checkedbtn()"><label for="check" class="icon"><i class="fa fa-bars"></i></label>
  <label class="logo"><?= $serverconfig['title']; ?></label>
  <ul>
    <li class="dropdown"><a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>class="active"<?php   }  ?> href="/index.php" class="dropbtn">Inici &#9662;</a>
      <ul class="dropdown-content">
        <li><a href="index.php#services">Serveis</a></li>
        <li><a href="index.php#findus">Troba'ns</a></li>
        <li><a href="index.php#contactus">Contacta'ns</a></li>
      </ul>
    </li>
    <li><a <?php if($_SERVER['SCRIPT_NAME']=="/services.php") { ?>class="active"<?php   }  ?> href="/services.php">Serveis</a></li>
    <li><a <?php if($_SERVER['SCRIPT_NAME']=="/tutorials.php") { ?>class="active"<?php   }  ?> href="/tutorials.php">Tutorials</a></li>
  </ul>
</nav>
