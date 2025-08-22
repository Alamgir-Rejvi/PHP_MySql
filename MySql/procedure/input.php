<?php 
    $sql_connect = mysqli_connect("localhost", "root", "", "e_commerce");

    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
       
        $sql = "INSERT INTO productlist (id, name, price) VALUES ('$id', '$name', '$price'";

        if (mysqli_query($sql_connect, $sql) == TRUE) {
            echo "DATA IN";
            header('Location: show.php');
        } else {
            echo "Data Not Inserted";
        }
    }
?>


<style>
    form{
        padding: 10px;
        border:1px solid black;
        width: 25%;
        display: flex;
        flex-direction: column;
        margin:30px auto;

    }
    label{
        /* width: 100px; */
        display: inline-block;
    }
    input{
        padding: 10px;
    }
</style>
<body>
    <form action=""method="post">
        <label for="">ID</label>
        <input type="number" name="id">
        <br>
        <br>
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Price</label>
        <input type="number" name ="price"><br>
        <br>
        <input type="submit" value="Insert" name="submit">
        <br>
        <br>
        <input type="submit" value = "Show Value" name="value">
    </form>
</body>