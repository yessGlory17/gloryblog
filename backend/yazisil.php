<?php 

require("sistem/baglan.php");
echo json_encode($_POST["id"]);
if(isset($_POST["id"]) && isset($_POST["tablo"])){
    $gelenid = $_POST["id"];
    
    $gelentablo = $_POST["tablo"];
    echo json_encode($gelentablo); 
    $sil = $db -> prepare("DELETE FROM yazilar  WHERE id=?");
    $sil -> execute(array($gelenid));

    //header( "refresh:5;url=gruplistesi.php" );
    if($sil -> rowCount()){
        $mesaj = "basarili";
        echo json_encode($gelentablo);
        
        
    }else{
        $mesaj = "basarisiz";
        echo json_encode($gelentablo);
        
    }
}




?>