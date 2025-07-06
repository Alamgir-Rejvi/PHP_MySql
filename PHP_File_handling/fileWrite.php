<?php

$myfile = fopen("first.txt", "w") or die ("unable to open file!");
$text = "This is my new file";
fwrite ($myfile,$text);
$text = "this is another line";
fwrite($myfile,$text);
fclose ($myfile);
?>