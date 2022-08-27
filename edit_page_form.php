<?php
require_once 'data.php';
$characterId = $_GET['id'];
$character = $characters[$characterId];
include "header.php";
?>
<!-- enctype = ENCode TYPE -->
<form action="edit_page.php" method="POST" enctype="multipart/form-data">
    Name:
    <input type="text" name="name" value="<?=$character['name']?>"> <br>
    Desc:
    <textarea name="description"  cols="30" rows="10"><?=$character['description']?></textarea> <br>
    Image:
    <input type="text" name="image" value="<?=$character['image']?>"> <br>
    <input type="file" name="image"> <br>
    Voice Aktor:
    <input type="text" name="voice_actor" value="<?=$character['voice_actor']?>">
    <br> <br>
    <input type="hidden" name="id" value="<?=$characterId?>">
    <button type="submit">Sayfayı Düzenle</button>
</form>
<?php include "footer.php"; ?>