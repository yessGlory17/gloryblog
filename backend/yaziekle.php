<?php 

require("sistem/baglan.php");


if(isset($_POST["baslik"]) && isset($_POST["icerik"]) && isset($_POST["etiketler"]) && isset($_POST["onay"])){

    echo "post tespit edildi";
    $baslik = $_POST["baslik"];
    $icerik = $_POST["icerik"];
    $etiketler = $_POST["etiketler"];
    $onay = $_POST["onay"];
    $anaresim = $_POST["anaresim"];
    
    
    //echo $baslik + $icerik + $etiketler;
    $ekle = $db -> prepare("INSERT INTO yazilar SET baslik=?, icerik=?, etiketler=?, onay=?,anaresim=?");
    $ekle -> execute(array($baslik,$icerik,$etiketler,$onay,$anaresim));
                
                
    if($ekle -> rowCount()){
        //echo $ekle -> rowCount();
        $res = "Veri Eklendi!";
        echo $res;
        //echo json_encode($res);
    } else{
        $error = "Hata var!";
        echo json_encode($error);
    }


}



?>