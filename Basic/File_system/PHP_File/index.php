<?php

    require("dataStorage.txt");

    if (isset ($_POST['submit'])){
        
        $name = $_POST['n'];
        $id = $_POST['i'];
        $contact = $_POST['c'];
        $email = $_POST['e'];
        $pass = $_POST['p'];


        echo "$name . <br>";
        echo "$id . <br>";
        echo "$contact . <br>";
        echo "$email . <br>";
        echo "$pass . <br>";


       // EMAIL VALIDATION 
    
       if ((preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email))) {
        echo " ✅Email is Valid: ", $email;
        } else {
        echo "❌ Invalid Email: ", $email;
        }

        //PASSWORD STRING LENGTH


        if (strlen($pass) > 6) {
        echo "<p style='color:green'>Your password is <b>strong </b></p>";
        } else {
        echo "<p style='color:red'>Your password is weak.Please use more then 6 words</p>";
        }

        // data store in text file
        // $data = new File($name, $id,$contact, $email, $pass);
        // $data -> dataStore();
        // echo "Form Submit Successfully";


    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File system</title>
</head>
<body>
    <form action="#" method ="post">
        Name: <input type="text" name = "n"> <br><br>
        ID: <input type="number" name = "i"><br><br>
        Contact:<input type="tel" name = "c"><br><br>
        Email: <input type="email" name = "e"><br><br>
        Password:<input type="password" name = "p"><br><br>
        <input type="submit" name = "submit" value = "Submit">
    </form>
</body>
</html>

