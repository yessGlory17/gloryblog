<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="blog";

try{
    $db = new PDO("mysql:hos=localhost;dbname=blog;","root","");
    //echo "Bağlandı";
}catch( PDOexception $hata ){
    echo $hata -> getMessage();
}

?>