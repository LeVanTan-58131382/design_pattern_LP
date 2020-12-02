<?php
/*
* Mysql database class - only one connection alowed
*/
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "";
	private $_database = "blog";

	/*
	Get an instance of the Database
	@return Instance
    */
    //Cách duy nhất để tạo một thể hiện từ lớp là sử dụng một phương thức tĩnh - static chỉ tạo đối tượng nếu nó chưa được tạo.
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}

    // Constructor - Một phương thức khởi tạo private được sử dụng để
    // ngăn chặn việc tạo trực tiếp các đối tượng từ lớp.
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}

	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }

	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}

    $db = Database::getInstance();
    $mysqli = $db->getConnection(); 
    $sql_query = "SELECT * FROM members";
    $result = $mysqli->query($sql_query);
    
    foreach ($result as $row) {
        echo $row["name"] . "_";
    }
        //$db = new Database(); => false

/**
 * Vì sao nên sử dụng singleton trong kết nối cơ sở dữ liệu:
 *  -   Việc thiết lập kết nối với cơ sở dữ liệu tốn nhiều thời gian và làm chậm ứng dụng của chúng ta.
 *      Vì thế nó chỉ nên được thực hiện một lần.
 *  Vì vậy, ta nên hạn chế số lượng đối tượng mà chúng ta tạo từ lớp Database chỉ còn một.
 * 
 * Lợi ích: 
 * -    Vì chúng ta sử dụng một lớp để kiểm tra xem một kết nối đã tồn tại trước khi nó thiết lập một kết nối mới, nên  thực sự không quan trọng bao nhiêu lần chúng ta tạo một đối tượng mới ngoài lớp, chúng ta vẫn nhận được cùng một kết nối.
 */