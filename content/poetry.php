<?php
$lang = $_GET["lang"] ?? "en";
global $language;
require_once("../view/Language/lang.".$lang.".php");

$string = file_get_contents("./poems/poems.json");
$p = json_decode($string);

include($_SERVER['DOCUMENT_ROOT']."/content/header.php");
include($_SERVER['DOCUMENT_ROOT']."/content/".$lang."/poetry/poetry.html");
?>

<p><details>
  <summary><h1 id="les-oeuvres-qui-minspirent">
  <?=$language['Works that inspire me'];?>
</h1>
</summary>

<p><em><?=$p->night->title;?></em> &ndash; <?=$p->night->author;?></p>
<blockquote>
<?=$p->night->body;?>
</blockquote>

<p><em><?=$p->chapman->title;?></em> &ndash; <?=$p->chapman->author;?></p>
<blockquote>
<p><?=$p->chapman->body;?></p>
</blockquote>

<p><em><?=$p->kubla->title;?></em> &ndash; <?=$p->kubla->author;?><br>
<em><?=$p->kubla->subtitle;?></em></p>
<blockquote>
<?=$p->kubla->body;?>
</blockquote>

<p><em><?=$p->complim->title;?></em> &ndash; <?=$p->complim->author;?></p>
<blockquote>
<?=$p->complim->body;?>
</blockquote>

</details>
<details>
  <summary><h1 id="my-works"><?=$language['My works'];?></h1>
</summary>
<p><em><?=$p->daisy->title;?></em> &ndash; <?=$language[$p->daisy->month];?> <?=$p->daisy->year;?></p>
        <blockquote>
        <?=$p->daisy->body;?>
        </blockquote>

<p><em><?=$p->asif->title;?></em> &ndash; <?=$language[$p->asif->month];?> <?=$p->asif->year;?></p>
        <blockquote>
        <?=$p->asif->body;?>
        </blockquote>

<p><em><?=$p->untitled_jun24->title;?></em> &ndash; <?=$language[$p->untitled_jun24->month];?> <?=$p->untitled_jun24->year;?></p>
        <blockquote>
        <?=$p->untitled_jun24->body;?>
        </blockquote>

<p><em><?=$p->float->title;?></em> &ndash; <?=$language[$p->float->month];?> <?=$p->float->year;?></p>
        <blockquote>
        <?=$p->float->body;?>
        </blockquote>

<p><em><?=$p->decline->title;?></em> &ndash; <?=$language[$p->decline->month];?> <?=$p->decline->year;?></p>
        <blockquote>
        <?=$p->decline->body;?>
        </blockquote>

<p><em><?=$p->triad->title;?></em> &ndash; <?=$language[$p->triad->month];?> <?=$p->triad->year;?></p>
        <blockquote>
        <?=$p->triad->body;?>
        </blockquote>

<p><em><?=$p->moroccan->title;?></em> &ndash; <?=$language[$p->moroccan->month];?> <?=$p->moroccan->year;?></p>
        <blockquote>
        <?=$p->moroccan->body;?>
        </blockquote>

<p><em><?=$p->watch->title;?></em> &ndash; <?=$language[$p->watch->month];?> <?=$p->watch->year;?></p>
        <blockquote>
        <?=$p->watch->body;?>
        </blockquote>

<p><em><?=$p->untitled_apr24->title;?></em> &ndash; <?=$language[$p->untitled_apr24->month];?> <?=$p->untitled_apr24->year;?></p>
        <blockquote>
        <?=$p->untitled_apr24->body;?>
        </blockquote>

<p><em><?=$p->doghouse->title;?></em> &ndash; <?=$language[$p->doghouse->month];?> <?=$p->doghouse->year;?></p>
        <blockquote>
        <?=$p->doghouse->body;?>
        </blockquote>

<p><em><?=$p->mardi->title;?></em> &ndash; <?=$language[$p->mardi->month];?> <?=$p->mardi->year;?></p>
        <blockquote>
        <?=$p->mardi->body;?>
        </blockquote>

<p><em><?=$p->tower->title;?></em> &ndash; <?=$language[$p->tower->month];?> <?=$p->tower->year;?></p>
        <blockquote>
        <?=$p->tower->body;?>
        </blockquote>

<p><em><?=$p->dark->title;?></em> &ndash; <?=$language[$p->dark->month];?> <?=$p->dark->year;?></p>
        <blockquote>
        <?=$p->dark->body;?>
        </blockquote>

<p><em><?=$p->place->title;?></em> &ndash; <?=$language[$p->place->month];?> <?=$p->place->year;?></p>
        <blockquote>
        <?=$p->place->body;?>
        </blockquote>

<details>
  <summary><h3 id="2023-20-poèmes">2023 (20 <?=$language['poem'];?>s)</h3>
</summary>

<p><em><?=$p->monorhyme3->title;?></em> &ndash; <?=$language[$p->monorhyme3->month];?> <?=$p->monorhyme3->year;?></p>
        <blockquote>
        <?=$p->monorhyme3->body;?>
        </blockquote>

<p><em><?=$p->monorhyme2->title;?></em> &ndash; <?=$language[$p->monorhyme2->month];?> <?=$p->monorhyme2->year;?></p>
        <blockquote>
        <?=$p->monorhyme2->body;?>
        </blockquote>

<p><em><?=$p->monorhyme1->title;?></em> &ndash; <?=$language[$p->monorhyme1->month];?> <?=$p->monorhyme1->year;?></p>
        <blockquote>
        <?=$p->monorhyme1->body;?>
        </blockquote>

<p><em><?=$p->sami->title;?></em> &ndash; <?=$language[$p->sami->month];?> <?=$p->sami->year;?></p>
        <blockquote>
        <?=$p->sami->body;?>
        </blockquote>

<p><em><?=$p->chicory->title;?></em> &ndash; <?=$language[$p->chicory->month];?> <?=$p->chicory->year;?></p>
        <blockquote>
        <?=$p->chicory->body;?>
        </blockquote>

<p><em><?=$p->couples->title;?></em> &ndash; <?=$language[$p->couples->month];?> <?=$p->couples->year;?></p>
        <blockquote>
        <?=$p->couples->body;?>
        </blockquote>

<p><em><?=$p->limp->title;?></em> &ndash; <?=$language[$p->limp->month];?> <?=$p->limp->year;?></p>
        <blockquote>
        <?=$p->limp->body;?>
        </blockquote>

<p><em><?=$p->september->title;?></em> &ndash; <?=$language[$p->september->month];?> <?=$p->september->year;?></p>
        <blockquote>
        <?=$p->september->body;?>
        </blockquote>

<p><em><?=$p->apparently->title;?></em> &ndash; <?=$language[$p->apparently->month];?> <?=$p->apparently->year;?></p>
        <blockquote>
        <?=$p->apparently->body;?>
        </blockquote>

<p><em><?=$p->cripples->title;?></em> &ndash; <?=$language[$p->cripples->month];?> <?=$p->cripples->year;?></p>
        <blockquote>
        <?=$p->cripples->body;?>
        </blockquote>

<p><em><?=$p->crossing->title;?></em> &ndash; <?=$language[$p->crossing->month];?> <?=$p->crossing->year;?></p>
        <blockquote>
        <?=$p->crossing->body;?>
        </blockquote>

<p><em><?=$p->untitledpt2->title;?></em> &ndash; <?=$language[$p->untitledpt2->month];?> <?=$p->untitledpt2->year;?></p>
        <blockquote>
        <?=$p->untitledpt2->body;?>
        </blockquote>

<p><em><?=$p->sharptremor->title;?></em> &ndash; <?=$language[$p->sharptremor->month];?> <?=$p->sharptremor->year;?></p>
        <blockquote>
        <?=$p->sharptremor->body;?>
        </blockquote>

<p><em><?=$p->whalebone->title;?></em> &ndash; <?=$language[$p->whalebone->month];?> <?=$p->whalebone->year;?></p>
        <blockquote>
        <?=$p->whalebone->body;?>
        </blockquote>

<p><em><?=$p->lapins->title;?></em> &ndash; <?=$language[$p->lapins->month];?> <?=$p->lapins->year;?></p>
        <blockquote>
        <?=$p->lapins->body;?>
        </blockquote>

<p><em><?=$p->oozing->title;?></em> &ndash; <?=$language[$p->oozing->month];?> <?=$p->oozing->year;?></p>
        <blockquote>
        <?=$p->oozing->body;?>
        </blockquote>

<p><em><?=$p->bruges->title;?></em> &ndash; <?=$language[$p->bruges->month];?> <?=$p->bruges->year;?></p>
        <blockquote>
        <?=$p->bruges->body;?>
        </blockquote>

<p><em><?=$p->untitled_night->title;?></em> &ndash; <?=$language[$p->untitled_night->month];?> <?=$p->untitled_night->year;?></p>
        <blockquote>
        <?=$p->untitled_night->body;?>
        </blockquote>

</details>

<details>
  <summary><h3 id="2020---2022-3-poèmes">2020 - 2022 (3 <?=$language['poem'];?>s)</h3>
</summary>

<p><em><?=$p->kansas_4->title;?></em> &ndash; <?=$language[$p->kansas_4->month];?> <?=$p->kansas_4->year;?></p>
        <blockquote>
        <?=$p->kansas_4->body;?>
        </blockquote>

<p><em><?=$p->slippery_1->title;?></em> &ndash; <?=$language[$p->slippery_1->month];?> <?=$p->slippery_1->year;?></p>
        <blockquote>
        <?=$p->slippery_1->body;?>
        </blockquote>

<p><em><?=$p->fierce->title;?></em> &ndash; <?=$language[$p->fierce->month];?> <?=$p->fierce->year;?></p>
        <blockquote>
        <?=$p->fierce->body;?>
        </blockquote>

</details>
</details>

<?php
include($_SERVER['DOCUMENT_ROOT']."/content/footer.php");
?>
