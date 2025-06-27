<?php

// global keyword 
$name = "Alamgir";
function set (){
    global $name; // using "global" keyword;
    echo $name;
}
set ();
echo "<br>";


// syntax
$Name = "Rejvi";
function see(){
    echo $GLOBALS["Name"]; // using syntax "$GLOBALS["Name"]
    
}
see ();