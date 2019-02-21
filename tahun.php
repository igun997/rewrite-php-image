<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//echo "contoh";
if(isset($_GET["id"])){
$get = file_get_contents($_SERVER['DOCUMENT_ROOT']."/sample/foto.jpg");
header('Content-Type: image/jpg');
echo $get;
}else{
echo "Masukkan Parameter ID";
}
?>
