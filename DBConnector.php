<?php
define('DB_SERVER','localhost');//we use the local machine
define('DB_USER','root');//user is root
define('DB_PASS','');//data has not been set
define('DB_NAME','btc3205');//remember our database name

class DBConnector{
    public $conn;
    function_construct(){
        $this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die ("Error:" .mysqli_error());
        mysqli_select_db(DB_NAME,$this->conn);

    }
    public function closeDatabase(){
        mysqli_close($this->conn);
    }
}
?>