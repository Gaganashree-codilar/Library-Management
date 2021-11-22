<?php
 ini_set('display_errors', true);
  require_once __DIR__ . '/dbconnection.php';

  class deletedata {
        public function delete()
        {
          $connection = new dbconnection();                                   
          $this->conn=$connection->connect();
          $id = $_POST['id'];
          $sql=$this->conn->prepare("DELETE FROM MYBOOK WHERE id=$id");
          $sql->execute();
          header('LOCATION:index.php');
        }
      

    }
  $deletedata = new deletedata();
  $deletedata->delete();