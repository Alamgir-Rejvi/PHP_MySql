<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
    


    <table class="table">
    <thead>
        <tr>
        <th scope="col">Sl_no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Password</th>
        <th scope="col">Operation</th>
        </tr>
    </thead>
 
    <?php
    $sql = "select * from `crud`";
    $result = mysqli_query($connect,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];

            echo ' <tr>
      <th scope="row">'.$id. '</th>
      <td>'.$name. '</td>
      <td>'.$email. '</td>
      <td> '.$mobile. '</td>
      <td> '.$password.'</td>

    <td>
        <button class = "btn btn-primary"><a href="" class = "text-light">Update</a></button>
        <button class = "btn btn-danger"><a href="" class = "text-light">Delete</a></button>
        </td>
    </tr>';
        }
    }
    ?>

    
 
  
        </table>
    </div>
</body>
</html>