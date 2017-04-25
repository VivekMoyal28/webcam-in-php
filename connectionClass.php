<?php
class connectionClass {
    private $host="localhost",$dbname="test",$dbpass="",$dbuser="root";
    public $con;
    
    public function __construct() {
        $this->con=  mysqli_connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
        if($this->con){}
        else{
//            echo "<h1>Error while connecting to database</h1>";
        }
    }
}
