<?php 
require("sistem/baglan.php");



$list = $db-> query("SELECT * from kullanicilar  WHERE onay='true' ")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($list);




?>