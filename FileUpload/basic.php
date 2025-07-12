<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="inputedFile">Input File</label>
        <input type="file" name="inputedFile">
        <input type="submit" name="submit" value="Upload File">
    </form>

    <?php
    echo "<br>";
    echo "File Name : " . $_FILES['inputedFile']['name'] ."<br>";
    echo "File Size : " . $_FILES['inputedFile']['size'] ."<br>";
    echo "File Type : " . $_FILES['inputedFile']['type'] ."<br>";
    echo "File Tmp_name : " . $_FILES['inputedFile']['tmp_name']."<br>";
    echo "File Error : " . $_FILES['inputedFile']['error'];

    ?>
</body>
</html>