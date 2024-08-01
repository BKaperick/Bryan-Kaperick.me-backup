<html>
<?php 
$lang = $_GET["lang"] ?? "en";
$language_toggle = array(
    'en'=>'fr', 
    'fr'=>'en');
?>

<link rel="stylesheet" href="../../../style.css">

<html lang="<?php echo $lang; ?>">
<html class="nojs" lang=$lang dir="ltr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<head>
<link rel="alternate" type="application/rss+xml" title="RSS" href="https://bryan-kaperick.me/en/index.xml">
<meta name="description" content="  Daily data point In Slovakia in 2005, the deaths from cardiovascular diseases per 100,000 people in, males aged over 85 years (Cardiovascular diseases has the following …">
<meta name="created" content="2021-10-24T18:44:04+0200">
<meta name="modified" content="2023-07-30T15:34:43+0200">


<meta property="og:site_name" content="Bryan Kaperick&#39;s Website">
<meta property="og:title" content="Welcome">
<meta property="og:url" content="https://bryan-kaperick.me/en/">
<meta property="og:type" content="website">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="canonical" href="https://bryan-kaperick.me/en/">

<link rel="alternate" hreflang="fr" href="content/fr/mainpage.html">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">



<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url" : "https://bryan-kaperick.me/en/",
    "name": "Welcome",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://bryan-kaperick.me/"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Bryan Kaperick's Website",
      "url": "https://bryan-kaperick.me/"
    }
  }
</script>

</head>

<body class="list-page front">
<div class="page layout__page layout__sidebar-second">
<header class="header layout__header">
<a href="./mainpage.html" title="Home" rel="home" class="header__logo"><img src="/static/logo.png" alt="Home" class="header__logo-image"></a>
<h1 class="header__site-name">
<a href="/content/mainpage.php" title="Home" class="header__site-link" rel="home"><span><?php echo $language['SITE_TITLE'] ?></span></a>
</h1>
<div class="region header__region">
<h2 class="visually-hidden">Language selector</h2>
<nav class="language-selector layout__language-selector">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="language-icon" width="24" height="24" viewBox="0 0 961 1113">
<path d="M848 3a17654 17654 0 00-349 118l-39 13-6 2-171-60-173-62c-2 0-2 6-2 118v119l-50 16-53 19c-5 3-5-19-5 343 0 335 0 336 2 339l6 5a92499 92499 0 00459-150l12-4 10 3 467 148 4 2V302l-45-15-45-14-1-132c0-124-1-132-2-134-4-7-9-8-19-5zm-4 145l-1 117-178-57-178-57L843 30l1 118zM458 481l-1 319-216 72-216 72V305l215-72 217-72 1 320zm262-131c17 4 30 9 30 9 1 0 20 67 42 149l57 203 15 56-64-19a2060 2060 0 01-24-84 2094 2094 0 00-130-40l-15 33-14 34-64-18 22-55 55-136 46-112c10-24 13-30 14-30l31 10z"/>
<path d="M257 360l-35 9c-23 7-25 7-34 7a72 72 0 01-20-3c-1 1 2 11 5 18 4 8 13 17 23 21 6 3 7 3 18 3 19 0 37-6 52-17 12-8 16-18 15-29-2-11-8-13-24-9zM335 413l-35 16c-13 7-23 12-28 13l-38 12a1636 1636 0 01-106 32c-19 3-17 2-17 9l2 8c2 4 9 10 14 12 12 6 42 3 51-6 2-2 3-3 3-7v-6l31-10 40-11a515 515 0 0148-13l-48 96c-10 19-23 40-45 71l-52 71-55 64-7 8h4c7 0 17-2 20-4a929 929 0 00149-179l23 17c26 20 30 23 51 35 25 14 39 21 56 27 8 2 12 3 13 1 1-4-6-30-9-33l-26-12-47-20-40-17-16-7 10-17c22-35 34-56 53-95l20-40 1-10v-11h-3l-17 6zM716 451l-23 56-23 55 86 26a4814 4814 0 00-40-137zM680 972a460 460 0 0026 44 422 422 0 01-319 66 517 517 0 01-175-66c-7-3-14-2-17 4-2 3-2 9 0 12s24 16 46 27a536 536 0 00222 53c36 1 39 0 68-4a480 480 0 00181-65l8-5 12 21 13 19 7-19 17-48 10-32-99-7z"/>
</svg>
<ul class="navbar">

<li><a rel="alternate" lang="<?=$language_toggle[$lang]?>" hreflang="<?=$language_toggle[$lang]?>" href="?lang=<?=$language_toggle[$lang];?>"><?=$language['LANGUAGE_TOGGLE'];?></a></li>

</ul>
</nav>
</div>
</header>

<nav class="main-menu layout__navigation">
<h2 class="visually-hidden">Main menu</h2>
<ul class="navbar">

<li><a href="/" class="active" aria-current="page">Home</a></li>
<li><a href="/content/poetry.php">Poetry</a></li>
<li><a href="/content/contact.php">Contact</a></li>
<li><a href="/content/photos.php">Photos</a></li>
<li><a href="/content/bio.php">Bio</a></li>
<li><a href="/content/blog-post.php">Blog Posts</a></li>
</ul>

</nav>
