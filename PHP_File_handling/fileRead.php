<?php
$myfile = fopen ("first.txt","r") or die ("unable to open file!");
echo fread ($myfile, filesize ("myfile.txt"));
fclose($myfile)
?>