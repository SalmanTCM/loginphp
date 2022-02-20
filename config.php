<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","password");
define("DBNAME","login");

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
if(!$conn){
    die("<script>alert('connection faild')</script>"); 
}
?>