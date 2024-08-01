<?php 
$lang = $_GET["lang"] ?? "en";
include($_SERVER['DOCUMENT_ROOT']."/content/header.php");
include($_SERVER['DOCUMENT_ROOT']."/content/".$lang."/contact/contact.html");
include($_SERVER['DOCUMENT_ROOT']."/content/footer.php");
?>

