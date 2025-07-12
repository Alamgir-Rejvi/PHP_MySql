<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    if (isset($_POST['submit'])) {
        $name = $_FILES['inputedFile']['name'];
        $tmpFile = $_FILES['inputedFile']['tmp_name'];
        $size = $_FILES['inputedFile']['size'];


        copy($tmpFile,"media/".$name);

    echo "<br>";
    echo "File Name : " . $_FILES['inputedFile']['name'] ."<br>";
    echo "File Size : " . $_FILES['inputedFile']['size'] ."<br>";
    echo "File Type : " . $_FILES['inputedFile']['type'] ."<br>";
    echo "File Tmp_name : " . $_FILES['inputedFile']['tmp_name']."<br>";
    echo "File Error : " . $_FILES['inputedFile']['error'];

    }
    ?>


<body>
    <form action="#" method ="post" enctype="multipart/form-data">
        <label for="inputedFile">Input File</label> <br> <br>
        <input type="file" name = "inputedFile"> <br> <br>
        <input type="submit" name = "submit" value ="Upload File">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        echo "<img src='media/$name' width = '300px'>";
    }
    
    ?>
   
</body>
</html>