<?php 
require("sistem/baglan.php");



$list = $db-> query("SELECT * from yazilar WHERE onay='false' ")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($list);




?>