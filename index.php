<html>
<?php 
$lang = $_GET["lang"] ?? "en";
?>
<html lang="<?php echo $lang; ?>">

<head>
<title>PHP Test</title>
</head>
<body>
<?php 

$language = $_GET["lang"] ?? "en";
echo "<p>Hello World, $language is my language</p>"; 
require_once("./view/Language/lang.".$lang.".php");
readfile("./content/en/mainpage.html")
?>
<div class="demo-page-title"><?php echo $language["POETRY_TITLE"]; ?></div>

</body>
</html>
