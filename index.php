<?php
 session_start();
  $_SESSION;
    include("config.php");/* connect config.php */
    include("functions.php");/* connect functions.php */
    $user_data=check_login($con);
    if($_SERVER['REQUEST_METHOD']=="POS")
    {
        //something was posted
        $_POST[''];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>login</title>
</head>
<body>
     <!-- <div class="container">
         <form action="" method="post" class="login_email">
             <p>Log in</p>
                <div class="input_group">
                    <input type="email" placeholder="Email">
                </div>
                <div class="input_group">
                    <input type="password" placeholder="password">
                </div>
                <div class="input_group">
                    <button>LOGIN</button>
                </div>
                <a href="register.php">register here</a>
         </form>
     </div> -->
</body>
</html>