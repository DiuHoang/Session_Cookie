<?php
    session_start();
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
<?php
    if(isset($_SESSION["username"]) && isset($_SESSION["password"]) && isset($_SESSION["fullname"])){
       echo "Login thanh cong";
       echo "</br>";
       echo "Wellcome".$_SESSION["fullname"];
    }
?>
</body>
</html>