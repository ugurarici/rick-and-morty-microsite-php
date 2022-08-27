<?php
$name = $_POST["name"];
$description = $_POST["description"];
$voice_actor = $_POST["voice_actor"];
$fileName = $_FILES['image']['name'];
$uploadedFilePath = $_FILES['image']['tmp_name'];
move_uploaded_file(
    $uploadedFilePath,
    __DIR__ . "/uploads/" . $fileName
);
// $data = file_get_contents('data.json');
// $characters = json_decode($data, true);
require_once  'data.php';
$characters[] = [
    "name" => $name,
    "description" => $description,
    "image" => "uploads/" . $fileName,
    "voice_actor" => $voice_actor
];
$json_data = json_encode($characters, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json',$json_data);
$new_item_index = count($characters) -1;

header("Location:detail.php?id=".$new_item_index);
