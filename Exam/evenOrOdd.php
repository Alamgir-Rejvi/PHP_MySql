<form method  = "post">
    <input type="number" name  ="num" placeholder = "Input number" require>;
    <input type="submit" value ="Submit">
</form>

<?php
if ($_POST) {
    $input = (int) $_POST['num'];

    if($input % 2 === 0){
        echo $input. " is an Even Number";
    }else{
        echo $input . " is an Odd Number";
    }
}
?>