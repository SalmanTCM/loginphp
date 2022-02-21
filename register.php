<?php
    include 'config.php';

    if(isset($_post['submit'])){
        $username=$_post['username'];
        $username=$_post['email'];
        $username=md5($_post['password']);
        $username=md5($_post['cpassword']);
        if($password==$cpassword)
        {
            $sql="INSERT INTO users(id,username,email,password)
            VALUES(?,?,?.?)";
            $result=mysqli_quary($conn,$sql);
            if(!$result)
            {
                echo "<script>alert('connection faild')</script>";
            }
            else
              echo "<script>alert('cpassword is not matched')</script>";

           
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
</head>
<body>
     <div class="container">
         <form action="" class="login_email">
             <p>Register</p>
                <div class="input_group">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input_group">
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="input_group">
                    <input type="password" placeholder="password" name="password">
                </div>
                <div class="input_group">
                    <input type="password" placeholder="confirm password" name="cpassword">
                </div>
                <div class="input_group">
                    <button class="btn" name="submit"> Register</button>
                </div>
                <a href="index.php">Login</a>
         </form>
     </div>
</body>
</html>