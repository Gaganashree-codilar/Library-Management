<?php  require_once __DIR__ .('/sessionCheck.php'); ?>
<html>
    <head>
        <title>Library Management system</title>
        <!-- <link rel="stylesheet"  type="text/css" media="all" href="Index.css"> -->
    </head>
    <style>
    body{
    background-color:cornflowerblue;
    }
    h1{
        color:red;
    }
    .image{
    width : 100pt;
    }
    table {
    border-collapse: collapse;
    width: 100%;
    border: 0.2px solid black;
    margin-top: 40pt;
}
th{
    color:white;
}
th,
td {
    text-align: left;
    padding: 8px;
    border: 0.1px solid black;
    }
.form{
    text-align: center;
}
input[type=text]{
    width:50%;
    padding: 14px 20px;
    box-sizing: border-box;
}
.button{
    font-size:20px;
    
}

    </style>
    <body class="body">
       
        <center><h1>Library management System</h1></center>
        <form class ="form" action="pininsert.php" method="GET">
            <center><button class="button">Add Book</button></center><br>
        </form><br>
        <form action="logout.php" method="Post">
<center><button class= "button" value="logout" name="logout">Logout</button></center>
</form>
        <div>
            <table>
                <tr>
                    <th>Book Id</th>
                    <th>Book Name</th>
                    <th>author</th>
                    <th>Publish Date</th>
                    <th>Book Image</th>
                </tr>

                <?php
               
                ini_set('display_errors', true);
                
                require_once __DIR__ . '/dbconnection.php';
                $connection = new dbConnection();                                   
                $conn=$connection->connect();
                $query = $conn->prepare("SELECT * FROM MYBOOK Where author='$_SESSION[email]'");
                $query->execute();
                $row = $query->fetchAll();
                foreach($row as $rowdata)
                {?>
                 <tr>
                    <td> <?php echo $rowdata['id']; ?></td>
                    <td> <?php echo $rowdata['bookname']; ?></td>
                    <td> <?php echo $rowdata['author']; ?></td>
                    <td> <?php echo $rowdata['publishdate']; ?></td>  
                    <td> <img src="./images/<?php echo $rowdata['bookimage'];?>"class="image"> </td>
                    <td> <form action = "deletedata.php" method= "POST"><button value ="<?php echo $rowdata['id'];?>" name='id'>Delete</button></td>
                    </tr>   
             
                <?php }?>
            </table>
        </div>
    </body>
</html>