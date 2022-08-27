<?php
require_once  'data.php';
$id = $_GET['id'];
unset($characters[$id]);
$json_data = json_encode($characters, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json',$json_data);
header("Location:index.php");
