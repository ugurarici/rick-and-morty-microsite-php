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
            <a href="detail_1.php">Rick Sanchez</a>
            <a href="detail_2.php">Morty Smith</a>
            <a href="detail_3.php">Jerry Smith</a>
            <a href="detail_4.php">Beth Smith</a>
            <a href="detail_5.php">Summer Smith</a>
            <a href="detail_6.php">Öylesine</a>
        </nav>
    </header>
    <main class="container">