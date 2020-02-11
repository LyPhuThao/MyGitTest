<?php

class Dbh {
    private $serName = "localhost";
    private $user = "LyPhuThao";
    private $pass = "Asdfght5";
    private $db = "mydatabase";
    private $charset = "utf8mb4";

    public function connect() {
        try {
            $dsn = "mysql:host=". $this->serName . ";dbname=". $this->db.";charset=".$this->charset;
            $conn = new PDO($dsn, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conn;
                                  
              }
               catch (PDOException $e)
                    { 
                        echo "Connection failed:".$e->getMessage();

                          }
                   }
        }
  // file  này kết nối thành công nha!       
?>