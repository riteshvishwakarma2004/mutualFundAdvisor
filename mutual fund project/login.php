<?php
    if(isset($_POST["submit"])){
        $phone = $_POST["phone"];
    $password = $_POST["password"];

    include("database.php");
    $sql = "select password FROM register where phone = $phone";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) >0){
        $row = mysqli_fetch_assoc($result);
        if(strcmp($row["password"], $password) == 0){
            echo "you are logged in";
            session_start();
            $_SESSION["login"] = true;
            header('Location: index.php');
        }else{
            echo "wrong password";
        }
    }else{
        echo "no user found";
    }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <form action="login.php" method="post">
            Phone.no: <input type="text" name="phone"><br><br>
            Password : <input type="password" name="password"><br><br>
            <input name="submit" type="submit" value="Login">
        </form>
    </div>
    <button>
        <a href="register.php">REGISTER</a>
    </button>
</body>
</html>