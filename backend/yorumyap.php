<?php 

require("sistem/baglan.php");

if ($_POST){ // Sayfada post olup olmadığını kontrol ediyoruz.

        $yorum = $_POST["yorum"];
        $gonderiid = $_POST["gonderiid"];
        $kullanici = $_POST["kullanici"];
        $onay = "false";
   
        
        $yorumyap = $db -> prepare("INSERT INTO yorumlar SET  gonderiid=?, kullanici=?, yorum=?,onay=?");
        $yorumyap -> execute(array($gonderiid, $kullanici,$yorum,  $onay));

        if($yorumyap -> rowCount()){
            echo "Kayıt Başarılı";
                
        }else{
            echo "Kayıt olunamadı!";
        }
            
        
} 




?>