<?php
    if (isset ($_POST['submit'])){
        $id = $_POST['Id'];
        $name = $_POST['Name'];

        if(preg_match("/^[0-9+]{3,14}$/",$id)){		
   
		$student=new Student($Id,$name);
		$student->save();
		echo "Success!";
	
    }else{
	   echo "Invalid ID";	 
    }

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
        ID:
        <input type="number" name = "Id">
        Name:
        <input type="text" name = "Name">
        <input type="submit" name = "submit" value = "Submit">
    </form>
</body>
</html>

