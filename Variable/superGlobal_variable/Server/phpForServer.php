<?php
echo "<pre>";
print_r($_SERVER); // this will show all server element
echo "</pre>";
echo $_SERVER["PHP_SELF"]; //this will show only path ( PHP_learning/server/test_server.php)
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"]; // C:/xampp/htdocs

?>