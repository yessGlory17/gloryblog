<?php 
require("sistem/baglan.php");
//echo "bekliyor";
if($_POST){
    //echo "hi";
    $gelenid = $_POST["id"];
    $list = $db-> query("SELECT * from yazilar WHERE id=$gelenid")->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($list);
    


    
}


?>