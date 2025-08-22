<!-- this part is not mendatory for get , becouse get display input information in url -->

<?php
echo "<pre>";
print_r($_GET); // for getting value from form in array format
echo "</pre>";

// for single output
echo $_GET["name"]."<br>"; // Alamgir Rejvi 
echo $_GET["id"];
echo "<br>";


?>