<?php 
$lang = $_GET["lang"] ?? "en";
global $language;
require_once("../view/Language/lang.".$lang.".php");

$string = file_get_contents("./poems/poems.json");
$poems = json_decode($string);
$night = $poems->night;
$chapman = $poems->chapman;
$kubla = $poems->kubla;
$complim = $poems->compliment;
include($_SERVER['DOCUMENT_ROOT']."/content/header.php");
include($_SERVER['DOCUMENT_ROOT']."/content/".$lang."/poetry/poetry.html");
include($_SERVER['DOCUMENT_ROOT']."/content/footer.php");
?>
