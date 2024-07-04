<html>
<?php 
$lang = $_GET["lang"] ?? "en";
?>
<html lang="<?php echo $lang; ?>">

<html class="nojs" lang=$lang dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style>
  <?php include "style.css" ?>
</style>
<?php 

$language = $_GET["lang"] ?? "en";
require_once("./view/Language/lang.".$lang.".php");
readfile("./content/".$lang."/mainpage.html")
?>
<title><?php echo $language["SITE_TITLE"]; ?></title>
<body> test body </body>
<div class="demo-page-title"><?php echo $language["POETRY_TITLE"]; ?></div>

</html>
