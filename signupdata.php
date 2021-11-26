<?php
 ini_set('display_errors', true);
  require_once __DIR__ . '/dbconnection.php';

  class signupdata {
       
   public $firstname ;
   public $lastname;
   public $email;
   public $profile;
   public $password;
   public $data;
   public $connection;
  

        public function signup()
        {
          $data = $_POST;
          $connection = new dbconnection();                                   
          $this->conn=$connection->connect();
          $this->firstname = $data['firstname'];
          $this->lastname = $data['lastname'];
          $this->email = $data['email'];
         // $this->profile = $data['profile'];
          $this->password = $data['password'];
          $sql=$this->conn->prepare("SELECT count(*) from USERS where email= '$this->email'");
          $sql->execute();
          if(!$sql->fetchColumn()){
         $sql=("INSERT INTO USERS VALUES ('$this->firstname','$this->lastname','$this->email','$this->profile','$this->password')");
         // $sql->execute();
        // $con=$this->conn;
         if($this->conn->exec($sql)==TRUE)
         {
          header('Location:signin.php');
         }
         else {
           echo "Failed";
         }
        }
        else{
          echo " Already registerd";     
           }
         }
     }

  
  $signupdata = new signupdata();
  $signupdata->signup();