<?php 


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
     <div class="container" id="box">
         <form action="" method="post" class="login_email" >
             <p>Log in</p>
                <div class="input_group">
                    <input id="text" type="email" placeholder="Email">
                </div>
                <div class="input_group">
                    <input  id="text" type="password" placeholder="password">
                </div>
                <div class="input_group buttons">
                <div>
                    <button class="btn" name="submit" href="index.php"> Sign In</button>
                    </div>
                     <div>
                     <button class="btn" name="submit"> <a href="register.php">Register</a> </button>
                     </div>  
                </div>
                
         </form>
     </div>
</body>
</html>