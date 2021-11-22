<?php
 ini_set('display_errors', true);
  require_once __DIR__ . '/dbconnection.php';

  class storedata {
       
   public  $id ;
   public $bookname;
   public $author;
   public $publishdate;
   public $bookimage;
   public $data;
   public $conn;


        public function insertion()
        {
          $data = $_POST;
          $connection = new dbconnection();                                   
          $this->conn=$connection->connect();
          $this->id = $data['id'];
          $this->bookname = $data['bookname'];
          $this->author = $data['author'];
          $this->publishdate = $data['publishdate'];
          $this->bookimage = $data['bookimage'];
          $sql=$this->conn->prepare("INSERT INTO MYBOOK VALUES ('$this->id','$this->bookname','$this->author','$this->publishdate','$this->bookimage')");
          $sql->execute();
          header('LOCATION:index.php');
        }
      

    }

  
  $storedata = new storedata();
  $storedata->insertion();