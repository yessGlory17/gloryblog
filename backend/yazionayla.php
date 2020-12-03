<?php 

require("sistem/baglan.php");

if(isset($_POST["id"])){
    
    $id = $_POST['id'];

    $guncelle = $db -> exec("UPDATE yazilar SET onay='true'  WHERE id='$id'");


    if($guncelle>0){
        $mesaj = "başarılı";
        echo json_encode($mesaj);
    }else{
        $mesaj = "başarısız";
        echo json_encode($mesaj);
    }

}
?>