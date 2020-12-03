<?php 
require("sistem/baglan.php");



$list = $db-> query("SELECT * from kullanicilar  WHERE onay='false' ")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($list);




?>