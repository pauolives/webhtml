<?php

class Database
{
	private $host = 'localhost';
	private $db_user = 'html';
	private $db_pass = 'mko0=OKM';
	private $db_name = 'htmlsintesi';

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

 // SERVER SETTINGS

    public function serversettings() {
    	try {
    		$sql = "SELECT * FROM config";
    		$stmt = $this->conn->prepare($sql);
    		$stmt->execute();
    		$serverconf = $stmt->fetch(PDO::FETCH_ASSOC);
			return $serverconf;

    	} catch(PDOException $e) {
    		echo $e->getMessage();
    	}
    }
}

?>
