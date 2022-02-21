<?php
 session_start();
  $_SESSION;
    include("config.php");/* connect config.php */
    include("functions.php");/* connect functions.php */
    $user_data=check_login($con);
    if($_SERVER['REQUEST_METHOD']=="POS")
    {
        //something was posted
       $user_name=$_POST['user_name'];
       $email=$_POST['email'];
       $password=md5($_post['password']);
       $cpassword=md5($_post['cpassword']);
        if($password==$cpassword)
        {
            $user_id=random_num(20);
            $sql="INSERT INTO users(id,username,email,password) VALUES(?,?,?.?)";
            mysqli_query($sql);
            header("Location: login.php");
            die;

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
                    <input type="text" placeholder="Username" name="user_name">
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