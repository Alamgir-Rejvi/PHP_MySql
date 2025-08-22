<?php
if (isset($_POST['submit'])) {

    // Access using correct input name
    $name = $_FILES['inputedFile']['name'];
    $tmp_file = $_FILES['inputedFile']['tmp_name'];
    $size = $_FILES['inputedFile']['size'];
    $type = $_FILES['inputedFile']['type'];
    $error = $_FILES['inputedFile']['error'];

    // Ensure media folder exists
    if (!is_dir('media')) {
        mkdir('media', 0777, true);
    }

    // Correct copy usage: copy(source, destination)
    if (move_uploaded_file($tmp_file, "media/" . $name)) {
        $upload_status = "File uploaded successfully.";
    } else {
        $upload_status = "File upload failed.";
    }

    echo "File Name : " . $name . "<br>";
    echo "File Size : " . $size . "<br>";
    echo "File Type : " . $type . "<br>";
    echo "File Tmp_name : " . $tmp_file . "<br>";
    echo "File Error : " . $error . "<br>";
    echo $upload_status . "<br>";

    // Store the uploaded filename for displaying the image below
    $uploaded_file_name = $name;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Demo</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label for="file">Upload file</label><br><br>
        <input type="file" name="inputedFile" id="file"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($uploaded_file_name)) {
        // Display the uploaded image if it's an image type
        $image_mime_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

        if (in_array($type, $image_mime_types)) {
            echo "<br><img src='media/$uploaded_file_name' width='300px'>";
        } else {
            echo "<br>Uploaded file is not displayed because it is not an image.";
        }
    }
    ?>
</body>
</html>
