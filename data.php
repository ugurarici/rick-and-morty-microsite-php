<?php
// Önceden sabit bir diziydi:
// $characters = [ [...], [...], [...] ]
$data = file_get_contents('data.json');
$characters = json_decode($data, true);
// Artık dosyadan okunarak bu dizi oluşturuluyor;
// $characters = ...
// Sonucunda yine aynı şekilde [ [...], [...], [...] ]
// değerine sahip oluyor.

// tek seferlik olacak şekilde array içerisinde bulunan datalarımı json dosyasına aktardım.
//$json_data = json_encode($characters, JSON_PRETTY_PRINT);
//echo '<pre>';
//$result = file_put_contents('data.json',$json_data);
//var_dump($result);
//echo '</pre>';
//exit;


