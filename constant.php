<h3>constat</h3>
<!-- const declaration method: define()  function and const keyword -->

<?php
define("welcome", "You are welcome to PHP"); // define() function to create a constant
echo welcome;
echo"<br>";


define ("name", ["Mohammad","Alamgir", "Rejvi"]); // array
echo name[1],"<br>"; // Alamgir
echo name[1][4]."<br>"; // g



define("GREETING", "Welcome to W3Schools.com!");

function myTest() { // const with function
  echo GREETING;
}

myTest();


const identy = "Alamgir"; // const keyword
echo identy;
echo "<br>";



?>