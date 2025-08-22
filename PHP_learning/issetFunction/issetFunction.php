<h3>isset(): This function checks if a variable is set and is not NULL. <br> if variable is not set or null it will input "false" otherwise true</h3>


<?php
 //  with variable declaration 
$num = "34";
if (isset($num)) {

    $r = $num + 5;
    var_dump ($r);
} else {
    echo "false";
};

// without variable declaration/ with null
$number =null;
if (isset($number)) {
    echo "value is not assigned";
    // $result = $number + 5;
    // var_dump ($result);
} else {
    echo "value is assigned";
    // echo "false";
}
echo "<br>";


// with not(!) sign

if (!isset($n)) {
    $n = 5;
    $result = $n + 5;
    var_dump ($result);
} else {
    echo "false";
}
echo "<br>";




// if (isset($_GET['page'])) {
//   $page = $_GET['page'];
//   echo $page;
// } else {
//   $page = 'home';
//   echo $page;
// }
// echo "<br>";


// To Check If a Form Field Was Submitted

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  echo "field is submitted";
  // Process the email
} else {
    echo "field should be submitted";
}

?>