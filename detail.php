<?php
require_once "data.php";
// detail.php?id=1 için:
// $characterId = 1;
$characterId = $_GET['id'];
// $character = [...]
$character = $characters[$characterId];
// Rick Sanchez - Rick and Morty
$title = $character['name'] . " - Rick and Morty";
include "header.php";
?>
    <h1><?=$character['name']?></h1>
    <img src="<?=$character['image']?>" height="250" alt="<?=$character['name']?>" />
    <p>
        <?=$character['description']?>
    </p>
    <p>Bu karakteri <?=$character['voice_actor']?> seslendirmektedir.</p>
    <hr />
    <a href="index.php">Geri Dön</a>
<?php
include "footer.php";
?>