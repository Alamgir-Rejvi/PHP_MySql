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
    $size = $_FILES['inputedFile']['size'];

    $kb = $size/1024;


    if ($kb > 300){
        echo "This is large file";
    } else {
        move_uploaded_file($tmp_name, "media/.$name");
        echo "file is uploaded successfully";
    }

    echo "<br>";
    echo "File Name : " . $_FILES['inputedFile']['name'] ."<br>";
    echo "File Size : " . $_FILES['inputedFile']['size'] ."<br>";
    echo "File Type : " . $_FILES['inputedFile']['type'] ."<br>";
    echo "File Tmp_name : " . $_FILES['inputedFile']['tmp_name']."<br>";
    echo "File Error : " . $_FILES['inputedFile']['error'];

}

?>
<body>
    <form action="#" method = "post" enctype = "multipart/form-data">
        <label for="inputedFile">Input File</label> <br> <br>
        <input type="file" name = "inputedFile" id = "inputedFile"> <br> <br>
        <input type="submit" name = "submit" value ="Upload File"> <br> <br>
    </form>


    <?php
    if(isset($_POST['submit'])) {
        echo "<br>";
        echo "<img src ='media/.$name' width = '400px'>";
        
    }
    ?>

</body>
</html>