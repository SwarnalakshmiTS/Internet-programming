<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width:100vw;
            height:100vh;
            margin:0px;
            padding:0px;
            background-color:skyblue;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        </style>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $servername="localhost";
        $username="root";
        $password="";
        $database="voting";

        $name=$_POST['c1'];
        $id=$_POST['c2'];
        $pass=$_POST['c3'];

        $con=mysqli_connect($servername,$username,$password,$database);
        $sql= "INSERT INTO `e-vote` (`name`, `id`, `password`) VALUES ('$name', '$id', '$pass')";
        $result=mysqli_query($con,$sql);

        if($result)
             echo "successfully inserted";
        else
             echo "not successfully inserted";
    }
    ?>
    <form action="/swarna/page1.php" method="POST">
        <label>name <label>
        <input type="text" name="c1"><br><br>
        <label>id <label>&nbsp;&nbsp;&nbsp;
        <input type="text" name="c2"><br><br>
        <label>password <label>
        <input type="text" name="c3"><br><br>&nbsp;&nbsp;&nbsp;
        <input type="submit" value="submit" onclick="create()">
</form>
<p id="query"></p>
<script>
    function create(){
    window.open("page2.html");    
    }
</script>  
</body>
</html>
