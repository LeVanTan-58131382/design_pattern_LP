<?php
class DatabaseSingleton {
	private $_connection;
	private static $_instance; 
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "";
	private $_database = "blog";

	public static function getInstance() {
		if(!self::$_instance) { 
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}

	public function getConnection() {
		return $this->_connection;
	}
}

// Connect db without a singleton.
class ConnectDbWOSingleton {
    private $_connection;
    
    private $_host = "localhost";
	private $_username = "root";
	private $_password = "";
	private $_database = "blog";
     
    // Public constructor.
    public function __construct()
    {
        $this->_connection = new mysqli($this->_host, $this->_username, 
        $this->_password, $this->_database);
    }
     
    public function getConnection()
    {
        return $this->_connection;
    }
  }

    $db_1 = DatabaseSingleton::getInstance();
    $mysqli_1 = $db_1->getConnection(); 

    $db_2 = DatabaseSingleton::getInstance();
    $mysqli_2 = $db_2->getConnection(); 

    $db_3 = DatabaseSingleton::getInstance();
    $mysqli_3 = $db_3->getConnection(); 

    var_dump($mysqli_1);
    var_dump($mysqli_2);
    var_dump($mysqli_3);

    $instance = new ConnectDbWOSingleton();
    $conn = $instance->getConnection();
    var_dump($conn);
    
    $instance = new ConnectDbWOSingleton();
    $conn = $instance->getConnection();
    var_dump($conn);
    
    $instance = new ConnectDbWOSingleton();
    $conn = $instance->getConnection();
    var_dump($conn);