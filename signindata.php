<?php
session_start();
 ini_set('display_errors', true);
 require_once __DIR__ . '/dbconnection.php';
 $connection = new dbConnection();                                   
 $conn=$connection->connect();

 if(isset($_POST['login']))
 {
 $_SESSION['author'] = $_POST['email'];
 
  if(empty($_POST['email']) || empty($_POST['password']))
  {
     // $message = '<label> all fields are required</label> ';
     echo " All fields are required";
  }
  else
  {
      $querry = "select * from USERS where email = :email AND password = :password";//$_post['username'] or $_post['password']
      $statement = $conn->prepare($querry);
      $statement->execute(
          array(
              'email' => $_POST['email'],
              'password' => $_POST['password']

          )
          );
          $count = $statement->rowCount();
          if($count > 0)
          {
              session_start();
              $_SESSION['email']=$_POST['email'];
              $_SESSION['password']=$_POST['password'];
              header('Location:index.php');
          }
          else
          {
             // $message = '<label>wrong data</label>';
             echo "Invalid Data";          }
  }
 }


?>
