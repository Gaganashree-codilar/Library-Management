<html>
    <head>
        <title>library management system</title>
        <!-- <link rel="stylesheet" href="Index.css"> -->
    </head>
    <style>
    body{
    background-color:cornflowerblue;
    }
    h2{
        color:red;
    }
    .form{
    text-align: center;
}
    input{
    font-size :15px;
    width:30%;
    padding: 10px 20px;
    box-sizing: border-box;
}
.button{
    font-size:20px;
    
}
  </style>
    <body>
    <center><h2>Library management System</h2></center> 
        <form  class="form" action="storedata.php" method = "post">
            <div class="form1">
            <div>
                <label>ID</label>
                <input type = "text" name = "id">
            </div><br>
            <div>
                <label>Book Name</label>
                <input type = "text" name = "bookname">
            </div><br>
            <div>
                <label>Author</label>
                <input type = "text" name = "author">
            </div><br>
            <div>       
                <label>Published Date</label>
                <input type = "text" name = "publishdate">
            </div><br>
            <div>
                <label>Insert Image</label>
                <input type="file" name = "bookimage">
            </div><br>
            <div>
                <button class="button">Submit</button>
            </div>
</div>
        </form>

    </body>
</html>
    