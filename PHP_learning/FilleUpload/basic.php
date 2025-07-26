<?php
if(isset($_POST['btnsubmit'])){
  echo "Filename: " . $_FILES['myfile']['name']."<br>";
  echo "Type : " . $_FILES['myfile']['type'] ."<br>";
   echo "Size : " . $_FILES['myfile']['size'] ."<br>";
   echo "Temp name: " . $_FILES['myfile']['tmp_name'] ."<br>";
   echo "Error : " . $_FILES['myfile']['error'] . "<br>";


  $tmp_name=$_FILES["myfile"]["tmp_name"];
  $name=$_FILES['myfile']['name'];
  
	  // copy($tmp_name,"image/".$name);
    move_uploaded_file("$temp_name","myfile/.$name");
    
	  
}
?>


<body>
<div style=" width:500px; margin:10px auto">
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<input type="file" name="myfile"><br><br>0
<input type="submit" name="btnsubmit"><br>
</fieldset>
</form>



<?php
if(isset($_POST['btnsubmit'])){

  echo "<img src='image/$name' width='300px'>";
}

?>
</div>

</body>