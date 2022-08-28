<?php
//  $title isimli bir değişken tanımlanmadıysa
//      $title isimli bir değişkeni "Rick and Morty" olarak tanımla
if (!isset($title)) $title = "Rick and Morty";

if (!isset($characters)) $characters = [];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css" />
    <?php if (isset($_COOKIE['fontsize'])) : ?>
        <style>
            main p {
                font-size: <?= $_COOKIE['fontsize'] ?>em;
            }
        </style>
    <?php endif; ?>
</head>

<body>
    <header>
        <img src="Rick_and_Morty.svg" alt="Rick and Morty logo" width="300" />
        <nav>
            <a href="index.php">Anasayfa</a>
            <!--
            foreach(... as $character) deseydik detail.php'deki
            $character değişkeninin değerini bozmuş olacaktık.
            O yüzden $item kullandık.
            -->
            <?php foreach ($characters as $index => $item) : ?>
                <a href="detail.php?id=<?= $index ?>">
                    <?= $item['name'] ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>
    <main class="container">
        <div style="text-align: right;">
            <a href="setfontsize.php?size=normal">Normal</a>
            <a href="setfontsize.php?size=big" style="font-size: 1.5em">Big</a>
            <a href="setfontsize.php?size=bigger" style="font-size: 2em">Bigger</a>
        </div>