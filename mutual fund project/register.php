<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        include("database.php");
        $sql = "INSERT into register(name,email,phone,password)
                VALUES('$username','$email','$phone','$password')";

        try{
            mysqli_query($conn,$sql);
            echo "you are registered";
        }catch(mysqli_sql_exception){
            echo "could not register you";
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <div class="register-box">
        <form action="register.php" method="post">
            Name: <input type="text" name="username" ><br><br>
            Phone.no: <input type="text" name="phone" ><br><br>
            Email.id: <input type="text" name="email" ><br><br>
            Password : <input type="password" name="password" ><br><br>
            <input name="submit" type="submit" value="Register">
        </form>
    </div>

    <button>
        <a href="login.php">LOGIN</a>
    </button>
</body>
</html>