<?php
$a = " This is preg match match  is Is Example";
$p = "/is/i";

echo preg_match_all($p,$a); // output will be 1 (if match) or 0 (if not match);
?>