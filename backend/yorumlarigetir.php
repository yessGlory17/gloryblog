<?php 
require("sistem/baglan.php");


if ($_POST){ // Sayfada post olup olmadığını kontrol ediyoruz.

    $gonderiid = $_POST["gonderiid"];

    
    $list = $db-> query("SELECT * from yorumlar WHERE gonderiid=$gonderiid")->fetchAll(PDO::FETCH_ASSOC);
    //print_r($this->pdo->errorInfo(),true);
    echo json_encode($list);
        
    
} 



?>