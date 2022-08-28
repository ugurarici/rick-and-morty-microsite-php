<?php

//  bu dosyada kullanıcıdan gelen talebe göre içerik kutusundaki paragragların
//  metin boyutuna etki edecek tercihimizi cookie olarak yazacağız

$choice = $_GET['size'];
$options = ["normal", "big", "bigger"];

if (in_array($choice, $options)) {
    switch ($choice) {
        case 'normal':
            setcookie('fontsize', "1", time() - 1);
            break;

        case 'big':
            setcookie('fontsize', "1.5");
            break;

        case 'bigger':
            setcookie('fontsize', "2");
            break;
    }
}

header("Location: index.php");
