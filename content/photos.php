<?php 
$lang = $_GET["lang"] ?? "en";

$string = file_get_contents("./photos/photos.json");
$p = json_decode($string);

include($_SERVER['DOCUMENT_ROOT']."/content/header.php");
include($_SERVER['DOCUMENT_ROOT']."/content/".$lang."/photos/photos.html");
include($_SERVER['DOCUMENT_ROOT']."/content/footer.php");
?>