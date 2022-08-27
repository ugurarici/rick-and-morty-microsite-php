<?php
require_once  'data.php';

$name = $_POST["name"];
$description = $_POST["description"];
$voice_actor = $_POST["voice_actor"];
$id = $_POST['id'];
$oldImage = $characters[$id]['image'];

// Eğer dosya seçildiyse...
if (isset($_FILES['image'])) {
    // Yeni yüklenen dosyanın bilgilerini al
    $image = $_FILES['image'];

    // Eskiden eklenmiş bir dosya varsa...
    if ($oldImage) {
        // Eskisini sil
        unlink($oldImage);
    }

    // Yenisini yükle
    move_uploaded_file(
        $image['tmp_name'],
        __DIR__ . "/uploads/" . $image['name']
    );

    // Yenisinin yolu belirt
    $image = 'uploads/' . $image['name'];
} else {
    $image = $characters[$id]['image'];
}
// $data = file_get_contents('data.json');
// $characters = json_decode($data, true);

$characters[$id] = [
    "name" => $name,
    "description" => $description,
    "image" => $image,
    "voice_actor" => $voice_actor
];
$json_data = json_encode($characters, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json',$json_data);

header("Location:detail.php?id=".$id);
