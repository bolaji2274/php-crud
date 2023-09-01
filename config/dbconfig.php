<?php 

    class dbconfig {
        public $connection;
        public function db_connect(){
            $this->connection = mysqli_connect('localhost','jago','adekunle','crud');
            if(mysqli_connect_error())
            {
                die ("Connection Failed");
            }
        }
    }

    $db = new dbconfig();

    echo $db->db_connect();
?>