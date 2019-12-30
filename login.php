<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password']; 
    if($username == "admin" && $password == "123" ){
        echo "<script> alert(' dang nhap thanh cong'); </script>";
    }
    else if($username == "" && $password == "" ){
        echo "<script> alert(' Vui long nhap day du thong tin'); </script>";
    }
    else{
        echo "<script> alert(' Username or Password wrong'); </script>";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="profile.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button name="login" type="submit">Login</button>
    </form>
</body>
</html>