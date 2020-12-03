<?php 

require("sistem/baglan.php");

if ($_POST){ // Sayfada post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $username = $_POST['email'];
    $password = $_POST['sifre'];

    $tip = "editor";
    $onay = "false";
    if($username <> "" && $password <> ""){
        
        $kayitkontrol = $db -> prepare("SELECT * FROM kullanicilar WHERE email=? ");
        $kayitkontrol -> execute(array($username));
        

        
        //Sorgu kontrolü
        if($kayitkontrol-> rowCount()){
            
            echo "Bu e-mail adresine kayıtlı kullanıcı var!";

              
        }else{
            //print_r($kontrol -> errorInfo());
            $kayit = $db -> prepare("INSERT INTO kullanicilar SET email=?, sifre=?, tip=?, onay=?");
            $kayit -> execute(array($username, $password, $tip, $onay));
            if($kayit -> rowCount()){
                echo "Kayıt Başarılı";
                
            }else{
                echo "Kayıt olunamadı!";
            }
            
        }
        
    }
} 




?>