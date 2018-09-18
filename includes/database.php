<?php
      require("database_golfballs.php");

      class DB {
            private $connection;
            private static $_instance;
            private $dbhost = "localhost";
            private $dbuser = "root";
            private $dbpass = "";
            private $dbname = "sportsshop";

            // Get an instance of the database
            public static function getInstance(){
                  if(!self::$_instance) {
                        self::$_instance = new self();
                  }
                  return self::$_instance;
            }
            // Constructor
            private function __construct() {
                  $this->connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);
            }
            // Prevent duplication of connection
            private function __clone(){}

            // Get the connection
            public function getConnection(){
                  return $this->connection;
            }

            public function getGolfballs($sql) {
                  $statement = $this->connection->prepare($sql);
                  $statement->execute();
                  while ($row = $statement->fetch()) {
                        $dataSet[] = new Golfballs($row);
                  }
                  if (!empty($dataSet)) {
                        return $dataSet;
                  } else {
                        return null;
                  }
            }
      }

      $db = DB::getInstance();
      $conn = $db->getConnection();
?>
