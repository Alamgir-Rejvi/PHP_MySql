<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email and Phone Validation</title>
</head>
<body>
    <form action="#" method ="post">
        <legend><b>Student Registration Form</b></legend>
        Name : <input type="text" name ="name"> <br>
        Email : <input type="text" name = "email"> <br>
        Phone : <input type="number" name = "phone"> <br>
        <input type="submit" name ="submit" value ="Submit">
    </form>

    <?php

    require 'student.php';


    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        //email and phone validation


        $emailValid = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$/',$email);
        $phoneValid = preg_match('/^\+?[0-9]{7,11}$/',$phone);
        
        if ($emailValid && $phoneValid) {
            $data = new Student($name,$email,$phone);
            $data->store();
            echo "Form is submitted successfully";
        }else{
            echo "Your email or phone is invalid";
        }
    }
    Student :: show();
    ?>
</body>
</html>