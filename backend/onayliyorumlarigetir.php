<?php 
require("sistem/baglan.php");



$list = $db-> query("SELECT * from yorumlar WHERE onay='true' ")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($list);




?>