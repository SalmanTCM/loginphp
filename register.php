
<?php
 session_start();
//   $_SESSION;
    include("config.php");/* connect config.php */
    include("functions.php");/* connect functions.php */
    // $user_data=check_login($con);
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted

        
       $user_name=mysqli_real_escape_string($con, $_POST['username']); 
       $email=mysqli_real_escape_string($con, $_POST['email']);
       $password=md5(mysqli_real_escape_string($con, $_POST['password']));
       $cpassword=md5(mysqli_real_escape_string($con, $_POST['cpassword']));
        if($password==$cpassword)
        {
            $user_id=random_num(20);
            $stmt = $con->prepare("INSERT INTO users (user_name, email, passoward) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $user_name, $email, $password);


            //$sql=$con->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            //$sql->bind_param("sss", $user_name, $email, $password);
            // $sql->bindParam($user_id);
            // $sql->bindParam($username);
            // $sql->bindParam($email);
            // $sql->bindParam($password);
            $stmt->execute();
            // mysqli_query($sql);
           
            // header("Location: login.php");
            $stmt->close();
            $con->close();
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
     <div class="container" id="box">
         <form action="" class="login_email" method="post">
             <p>Register</p>
                <div class="input_group">
                    <input id="text" type="text" placeholder="Username" name="username">
                </div>
                <div class="input_group">
                    <input id="text" type="email" placeholder="email" name="email">
                </div>
                <div class="input_group">
                    <input id="text" type="password" placeholder="password" name="password">
                </div>
                <div class="input_group">
                    <input id="text" type="password" placeholder="confirm password" name="cpassword">
                </div>
                <div class="input_group buttons">
                    <div>
                    <button class="btn" name="submit" href="index.php"> Register</button>
                    </div>
                     <div>
                     <button class="btn" name="submit" > <a href="login.php">Sign in</a> </button>
                     </div>   
                </div>
                
         </form>
     </div>
</body>
</html>
