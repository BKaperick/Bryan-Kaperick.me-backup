<?php 
$lang = $_GET["lang"] ?? "en";
global $language;
require_once("../view/Language/lang.".$lang.".php");

include($_SERVER['DOCUMENT_ROOT']."/content/header.php");
include($_SERVER['DOCUMENT_ROOT']."/content/".$lang."/contact/contact.html");
include($_SERVER['DOCUMENT_ROOT']."/content/footer.php");
?>

