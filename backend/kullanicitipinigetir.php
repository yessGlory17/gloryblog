<?php 

require("sistem/baglan.php");
session_start(); 
if(isset($_SESSION["kullanici"])){
    
    $kullanici = $_SESSION["kullanici"];
    
    //Burada bir şarta göre sorgu çalışacak...
    $list = $db-> query("SELECT * from kullanicilar WHERE email='$kullanici'")->fetchAll(PDO::FETCH_ASSOC);

    if($list !== FALSE){
        //Kullanıcı bilgileri response olarak dönüyor.
        echo json_encode($list);
    }else{
        $err = "Kayıt Bulunamadı!";
        echo json_encode($err);
    }
    

}else{
    $mesaj = "hata!";
    echo json_encode($mesaj);
}


?>