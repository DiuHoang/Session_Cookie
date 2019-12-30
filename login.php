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

<form method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name = "login" value="Submit">
        <?php
        require "db.php";
        $sql = "SELECT * from user";
        $result = $db->query($sql)->fetch_all();

        if(isset($_POST["login"])){
           $check = false;
           for($i=0; $i < count($result); $i++){
                if($result[$i][1] == $_POST["username"] && $result[$i][2] == $_POST["password"]){
                    $check = true;
                    $_SESSION["username"] = $result[$i][1];
                    $_SESSION["password"] = $result[$i][2];
                    $_SESSION["fullname"] = $result[$i][3];
                }
           }
           if($check == true){
                header("location: profile.php");
           }
           else{
            echo "Login that bai";
           }
        }
    ?>
    </form>
</body>
</html>