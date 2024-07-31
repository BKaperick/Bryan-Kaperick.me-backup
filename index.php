<?php
    global $language;
    $lang = $_GET["lang"] ?? "en";
    require_once("./view/Language/lang.".$lang.".php");
    include './content/mainpage.php';
?>
<style>
  <?php include "./style.css" ?>
</style>
