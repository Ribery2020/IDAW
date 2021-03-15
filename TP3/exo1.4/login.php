<?php
session_start();
header('Content-type:text/html;charset=utf-8');
if(isset($_SESSION['username']) && $_SESSION['username']==='Ribery'){
    exit("already login");
}

if(isset($_POST['submit'])){
    if(isset($_POST['username'] ) && isset($_POST['password']) && $_POST['username']==='Ribery' && $_POST['password']==='123456'){
        $_SESSION['username']=$_POST['username'];
        header('Location:skip.php?url=index.php&info= login sucessfully');
    }else{
        header('Location:skip.php?url=index.php&info= Login failed');

    }
}
?>



<!DOCTYPE html>
<html lang ="zh-CN">
<head>
<meta charset="utf-8"/>
<title>login</title>
</head>

<body>
<form method="post" action="login.php">
name:<input type ="text" name ="username"/>
password:<input type = "password" name="password"/>
<input type="submit" name="submit" value = "submit"/>
</form>
</body>
</html>