<?php
//  $title isimli bir değişken tanımlanmadıysa
//      $title isimli bir değişkeni "Rick and Morty" olarak tanımla
if (!isset($title)) $title = "Rick and Morty";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css" />
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
            <?php foreach($characters as $index => $item): ?>
            <a href="detail.php?id=<?=$index?>"><?=$item['name']?></a>
            <?php endforeach; ?>
        </nav>
    </header>
    <main class="container">