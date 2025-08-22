<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

if(isset($_POST['submit'])) {
    $name = $_FILES['inputedFile']['name'];
    $tmp_name = $_FILES['inputedFile']['tmp_name'];
    $media = "media/";

    move_uploaded_file($tmp_name,$media.$name);
    // copy($tmpFile,"media/".$name);
   }
?>


<body>
    <form action="#" method = "post" enctype = "multipart/form-data">
        <label for="inputedFile">Input File</label> <br> <br>
        <input type="file" name="inputedFile" id="inputedFile"> <br> <br>
        <input type="submit" name = "submit" value = "Upload File">
    </form>

    <?php
    if(isset($_POST['submit']))
        echo "<br>";
        echo "<img src='media/$name' width='400px' >";
    
    ?>
</body>
</html>



