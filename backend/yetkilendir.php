<?php 

require("sistem/baglan.php");

if(isset($_POST["id"])){
    
    $id = $_POST['id'];
    $yeniyetki = $_POST['tip'];
    $guncelle = $db -> exec("UPDATE kullanicilar SET tip='$yeniyetki'  WHERE id='$id'");


    if($guncelle>0){
        $mesaj = "başarılı";
        echo json_encode($mesaj);
    }else{
        $mesaj = "başarısız";
        echo json_encode($mesaj);
    }

}
?>