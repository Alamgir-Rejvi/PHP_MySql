<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name, email, mobile, password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($connect,$sql);

    if($result){
        header ('location:display.php');
        // echo "Data is inserted successfully";
    }else{
        die(mysqli_error($connect));
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD_Operation</title>

  </head>
  <body>
    <div class="container my-5">
        <form method = "post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" placeholder = "Enter your name" class="form-control" name = "name" autocomplete = "on">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" placeholder = "Enter your email" class="form-control" name = "email" autocomplete = "on">
        </div>
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile</label>
            <input type="number" placeholder = "Enter your mobile" class="form-control" name = "mobile" autocomplete = "on">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" placeholder = "Enter your password" class="form-control" name = "password" autocomplete = "on">
        </div>

        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
</div>
  </body>
</html>