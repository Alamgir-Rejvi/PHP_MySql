<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" enctype="multipart/form-data">
        Name : <input type="text" name = "name"> <br> <br>
        Email : <input type="email" name = "email"> <br> <br>
        Phone : <input type="tel" name = "phone"><br> <br>
        Address : <textarea name="address" id="address"></textarea> <br> <br>
        Image : <input type="file" name = "photo"><br> <br>
        <input type="submit" name = "submit">
    </form>


    <?php

require_once 'baseClass.php';
require_once 'inheritedClass.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $file = $_FILES["photo"]['name'];
    $tmp_name = $_FILES["photo"]['tmp_name'];
    $img = "media/";

    move_uploaded_file($tmp_name,$img.$file);


    // validation
    $emailValid = preg_match('/^[a-zA-Z0-9._+-]+@[a-zA-Z]+\.[a-zA-Z]$/',$email);
    $phoneValid = preg_match('/^[0-9+]$/',$phone);


    if($emailValid && $phoneValid) {

        $data = new Extended ($name,$email,$phone);
        $data->store();
        echo "Form is submitted successfully";
    }else{
        echo "Invalid email or phone";
    }


    Extended ::show();

}

?>

</body>
</html>