<?php 

require("sistem/baglan.php");
date_default_timezone_set('Europe/Istanbul');
setlocale(LC_TIME,'turkish'); //turkceyi sec (sunucuda yüklü olması gerekir)

if(isset($_POST["baslik"]) && isset($_POST["icerik"]) && isset($_POST["etiketler"]) && isset($_POST["onay"]) && isset($_POST["anaresim"])){
    session_start();
    echo "post tespit edildi";
    $baslik = $_POST["baslik"];
    $icerik = $_POST["icerik"];
    $etiketler = $_POST["etiketler"];
    $onay = $_POST["onay"];
    $anaresim = $_POST["anaresim"];
    $tarih = iconv('latin5','utf-8',strftime('%e %B')); //kodun çalıştığı zamana ait;
    $yazar = $_SESSION["kullanici"];
    //echo $baslik + $icerik + $etiketler;
    $ekle = $db -> prepare("INSERT INTO yazilar SET baslik=?, icerik=?, etiketler=?, onay=?,anaresim=?, tarih=?, yazar=?");
    $ekle -> execute(array($baslik,$icerik,$etiketler,$onay,$anaresim,$tarih, $yazar));
                
                
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