<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<style>
    form{
        border:1px solid slateblue;
        width: 25%;
        padding: 5px;
    }
    div{
         display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }
</style>
<body>
    <div>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <br>
        <br>
        <input type="submit" value="Upload File">
    </form>
    </div>

    <?php 

        echo "<br>";
        echo "FileName: " . $_FILES["myfile"]['name'] . "<br>";
        echo "Type: ". $_FILES["myfile"]['type'] . "<br>";
        echo "Size: " . $_FILES["myfile"]['size']. "<br>";
        echo "Temp Name: ". $_FILES['myfile']['tmp_name']. "<br>";
        echo "Error: " .$_FILES['myfile']['error']. "<br>";
    
    
    ?>
</body>
</html>
=======
<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authentication required.';
    exit;
} else {
    echo "Welcome, {$_SERVER['PHP_AUTH_USER']}.";
}

?>
>>>>>>> 12cf755e18b0c2ea5b75052333ecf41f452f3a7c
