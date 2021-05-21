<button class="accordion">Pas 1</button>
<article class="panel">
  <p>Dintre l'arxiu database.php (../xampp/htdocs/core/php/database.php) escriurem < seguit de ?php i en una altre linia ?></p>
  <p>Entre les dues linies que hem escrit copiarem el següent codi:</p>
    
  <div class="codebox" id="cb1boxcode">
    class Database
    {
      private $host = 'localhost';
      private $db_user = 'root';
      private $db_pass = '1234';
      private $db_name = 'TutorialM8';

      private $conn;

      public function __construct() { 
          try { 
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->db_user, $this->db_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
            
          } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
        }

     // RUN QUERY

      public function runQuery($sql)  {
            $stmt = $this->conn->prepare($sql);
            return $stmt;
        }

     // REDIRECT    

      public function redirect($url) {
            header("Location: $url");
            exit;
        }

     //CREATE USER

        public function Register($EmailR, $UserR, $PassR) {
          try {
              $sql = "INSERT INTO users(email, password, username, ip) VALUES (:email, :password, :username)";
              $PassE = password_hash($PassR, PASSWORD_BCRYPT);
              $stmt = $this->conn->prepare($sql);
              $stmt->bindparam(":email", $EmailR);
              $stmt->bindparam(":password", $PassE);
              $stmt->bindparam(":username", $UserR);
              $stmt->execute();
            return $stmt;
          
          } catch(PDOException $e) {
                echo $e->getMessage();
            }
      }

     // LOG IN

      public function login($UserL, $PassL) {
        try {
          $sql = "SELECT id, username, email, password FROM users WHERE username=:username";
                $stmt = $this->conn->prepare($sql);
          $stmt->execute(array(':username'=>$UserL));
                  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
                  if($stmt->rowCount() == 1) {
                      if(password_verify($PassL, $userRow['password'])) {
                          $_SESSION['user_session'] = $userRow['id'];
                          return true;
                      } else {
                          return false;
                        }
                  }
            }
              catch(PDOException $e) {
                  echo $e->getMessage();
              }
        }

     // IS LOGGED

        public function logged() {
            if(isset($_SESSION['user_session'])) {
                return true;
            }
        }
  </div>
  <button id="cb1" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
  <p>Un cop tingueu el codi veureu que hi han linies comentades fent referencia a que fa cada apartat.</p>
  <p>Per configurar-ho haureu de canviar el valor de les variables $db_pass que per defecte no n'hi ha i $db_name amb el nom de la base de dades que heu creat anteriorment.</p>
</article>

<button class="accordion">Pas 2</button>
<article class="panel">
  <p>Dintre l'arxiu index.php (../xampp/htdocs/index.php) al principi del arxiu escriurem < seguit de ?php i en una altre linia ?></p>
  <p>Després copiarem aquest codi entre les dues linies:</p>
  <div class="codebox" id="cb2boxcode">
    session_start();
    if (isset($_SESSION['user_session'])) header("Location: /logged.php");


    require 'core/php/database.php';

    $errormsg = "";
    $reglog = new Database();


    //LOG-IN

     if(isset($_POST['login-btn'])){

      $UserL = strip_tags($_POST['UserL']);
      $PassL = strip_tags($_POST['PassL']);
     
      if($reglog->login($UserL,$PassL)){
        $reglog->redirect('/logged.php');
      } else {
        $errormsg = "Nom d'usuari o contrasenya incorrectes";
      }
    }


    //REGISTER

    if(isset($_POST['register-btn'])){

      $EmailR = strip_tags($_POST['EmailR']);
      $UserR = strip_tags($_POST['UserR']);
      $PassR = strip_tags($_POST['PassR']);
      $ipaddress = $reglog->getUserIpAddr();

      if($EmailR==''){
        $errormsg = "Introdueix un email";
      }
      if($UserR==''){
        $errormsg = "Introdueix un nom d'usuari";
      }
      if($PassR==''){
        $errormsg = "Introdueix una contrasenya";
      }

      try{
        $stmt = $reglog->runQuery("SELECT username, email FROM users WHERE username=:username OR email=:email");
        $stmt->execute(array(':username'=>$UserR, ':email'=>$EmailR));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['username']==$UserR) {
          $errormsg = "Aquest usuari ja existeix";
        } else if($row['email']==$EmailR) {
          $errormsg = "Aquest email ja esta en ús";
        } else {
          if($reglog->Register($EmailR, $UserR, $PassR, $ipaddress)){
            $reglog->redirect('index.php?registered');
          }
        }

      }
      catch(PDOException $e) {
          echo $e->getMessage();
         }
    }
  </div>
  <button id="cb2" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
  <p>Això ens permetrà que al omplir els camps i pitjar el botó funcioni en comptes de no fer res com pasava anteriorment.</p>
</article>

<button class="accordion">Pas 3</button>
<article class="panel">
  <p>Dintre l'arxiu logout.php (../xampp/htdocs/logout.php) al principi del arxiu escriurem < seguit de ?php i en una altre linia ?></p>
  <p>Després copiarem aquest codi entre les dues linies:</p>
  <div class="codebox" id="cb8boxcode">
    session_start();

    session_unset();

    session_destroy();

    header("Location: /");
  </div>
  <button id="cb8" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
  <p>Això ens permetrà tancar sessió més endevant</p>
</article>

<button class="accordion">Pas 4</button>
<article class="panel">
  <p>Dintre l'arxiu logged.php (../xampp/htdocs/logged.php) al principi del arxiu escriurem < seguit de ?php i en una altre linia ?></p>
  <p>Després copiarem aquest codi entre les dues linies:</p>
  <div class="codebox" id="cb9boxcode">
    session_start();
    $user_session = $_SESSION['user_session'];


    require 'core/php/database.php';

    $session = new Database();
     if(!$session->logged()) {$session->redirect('index.php');}
  </div>
  <button id="cb9" onclick="copyCode(this.id)" class="button button2">Copiar <i class="fa fa-clipboard" style="border: none;"></i></button>
  <p>Aquest codi ens permetrà tenir sessió iniciada i si intentem entrar a <a href="http://localhost/logged.php" style="text-decoration: underline;">localhost/logged.php</a> sense iniciar sessió ens enviarà a <a href="http://localhost/logged.php" style="text-decoration: underline;">localhost/index.php</a></p>
</article>