<?php
require_once "data.php";
include "header.php";
?>
<form
        action="add_page.php"
        method="POST"
        enctype="multipart/form-data"
>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"> <br>
    Desc:
    <textarea name="description"  cols="30" rows="10"></textarea> <br>
    Image:
    <input type="file" name="image"> <br>
    Voice Aktor:
    <input type="text" name="voice_actor">
    <br> <br>
<button type="submit">Yeni Sayfa Ekle</button>
</form>
<?php include "footer.php"; ?>
