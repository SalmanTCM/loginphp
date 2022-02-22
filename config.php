<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","password");
define("DBNAME","login");

$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
if(!$con){
    die("<script>alert('connection faild')</script>"); 
}
?>