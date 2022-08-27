<?php
$name = $_POST["name"];
$description = $_POST["description"];
$image = $_POST["image"];
$voice_actor = $_POST["voice_actor"];
// $data = file_get_contents('data.json');
// $characters = json_decode($data, true);
require_once  'data.php';
$characters[] = [
    "name" => $name,
    "description" => $description,
    "image" => $image,
    "voice_actor" => $voice_actor
];
$json_data = json_encode($characters, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json',$json_data);
$new_item_index = count($characters) -1;
?>
<a href="detail.php?id=<?=$new_item_index?>"> <?=$name?>  </a>