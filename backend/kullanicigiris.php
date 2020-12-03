<?php 

require("sistem/baglan.php");

if($_POST){
    //echo "test";

    session_start();
    $username = $_POST["email"];
    $password = $_POST["sifre"];
    $kullanicial = $db -> prepare("SELECT * FROM kullanicilar WHERE email=? AND sifre=?");
    $kullanicial -> execute(array($username,$password));
    $kullanici_var_mi = $kullanicial->rowCount();
    if($kullanici_var_mi>0){
        $_SESSION["oturum"] = true;
        $_SESSION["kullanici"] = "Ozgur";
        //echo $_SESSION["kullanici"];
        //echo "Başarıyla giriş yapıldı.";
        //echo true;
        //$mesaj = "Başarıyla giriş yapıldı!";
        $mesaj = true;
        echo json_encode($mesaj);
         
        
        
        
        

    }else{

       //echo "E-mail adresi veya şifre hatalı!";
       //$mesaj = "E-mail adresi veya şifre hatalı!";
       $mesaj = false;
       echo json_encode($mesaj);
       
    }

}


?>