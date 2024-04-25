<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        UserName : <input type="text" name="user"> <br>
        Password : <input type="password" name="pass"> <br>
        <button type="submit" name="submit">Login</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if($user === "admin" && $pass === "123456"){
                session_start();
                $_SESSION['user'] = $user;
                header("Location:laptop.php");
            }
        }
    ?>
</body>
</html>