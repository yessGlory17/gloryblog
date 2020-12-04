<?php 

require("sistem/baglan.php");

if(isset($_POST["id"])){
    
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
    $icerik = $_POST["icerik"];
    $etiketler = $_POST["etiketler"];
    $onay = "false";
    $anaresim = $_POST["anaresim"];
    $tarih = iconv('latin5','utf-8',strftime('%e %B')); //kodun çalıştığı zamana ait;

    $guncelle = $db -> prepare("UPDATE yazilar SET baslik=?, icerik=?, etiketler=?, onay=?, anaresim=?, tarih=? WHERE id=?");
    $guncelle -> execute(array($baslik,$icerik,$etiketler,$onay,$anaresim,$tarih,$id));

    if($guncelle-> rowCount()){
        $mesaj = "başarılı";
        echo json_encode($mesaj);
    }else{
        $mesaj = "başarısız";
        echo json_encode($mesaj);
    }

}
?>