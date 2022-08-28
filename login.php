<?php
$message= null;
$users = [
    "yunusemre" => "sevgi",
    "erayaydin" => "parolamıbilmiyorum"
];
if (
    isset($_POST['username']) &&
    isset($_POST['password'])
) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (
        isset($users[$username]) &&
        $users[$username] == $password
    ) {
        $message = 'BAŞARILI';
    }else {
        $message = 'KULLANICI ADI YA DA PAROLA YANLIŞ';
    }
}else {
    $message= 'LÜTFEN GEREKLİ BİLGİLERİ GÖNDERİN';
}

$title = 'LOGIN';
include 'data.php';
include 'header.php'; ?>

<h2><?=$message?></h2>
<form method="POST">
    Username: <input type="text" name="username"> <br>
    Password: <input type="password" name="password">

    <br><br>
    <button type="submit">Giriş Yap</button>
</form>


<?php include 'footer.php' ?>
