<html>
   <head>
            <!-- <link rel="stylesheet" href="Index.css"> -->
            
</head>
<style>
    body{
    background-color:cornflowerblue;
    }
    h2{
        color:red;
    }
    input{
    
    font-size :15px;
    width:20%;
    padding: 10px 20px;
    box-sizing: border-box;
}
.button{
    font-size:20px;
    
}
 
    </style>
    <body>
    <center><h2>Library management System</h2></center> 
        <form class ="form"action = "" method = "GET">
            <input type = "number" name = "key">
            <button class="button"> verify</button>
        </form>
    </body>
</html>
<?php

 $verify = $_GET;
 
 $key = $verify['key'];

 if($key == "1234")
 {
    header('Location: insert.php');
  
 }else{
    header('Loaction: pininsert.php');
 }

?>
