<?php
class connectionClass extends mysqli{
    public $host="localhost",$dbname="webcam",$dbpass="",$dbuser="root";
    public $con;
    
    public function __construct() {
        $this->con= $this->connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
        if(!$this->con){
            echo "<h1>Error while connecting to database</h1>";
        }
        }
}
