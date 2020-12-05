<?php 
require("sistem/baglan.php");

session_start();
$yazar = $_SESSION["kullanici"];
$list = $db-> query("SELECT * from yazilar WHERE onay='true' AND yazar='$yazar'")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($list);





?>