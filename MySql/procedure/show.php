<?php 
    $sql_connect = mysqli_connect("localhost", "root", "","e_commerce");
?>
<style>
    table{
        margin: 30px auto;
        padding:10px;
        text-align: center;
    }
    table, th, td{
        border:1px solid black;
        border-collapse: collapse;
        padding:10px;
    }
</style>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <th>Price</th>
           
        </tr>

        <?php 
        $data = $sql_connect->query("SELECT * FROM productlist");
        while(list($id, $name,$price)= $data ->fetch_row()){
            echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <th>$price</th>
            </tr>";
        }
        ?>
    </table>
</body>