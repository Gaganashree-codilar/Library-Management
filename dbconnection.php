<?php

class dbConnection
{
    
    public $servername;

    public $username;

    public $password;

    public  $databasename;



    public function connect()
    {

        $this->servername = "localhost";
        $this->username = "gagana";
        $this->password = "P4ssw0rd@";
        $this->databasename = "library";

        try {
            $connect = new PDO("mysql:host=$this->servername;dbname=$this->databasename", $this->username, $this->password);
            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            

            //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connect;
    }
}

$connection = new dbConnection();

$connection->connect();
