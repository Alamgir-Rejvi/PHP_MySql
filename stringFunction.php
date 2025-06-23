<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // string function : strlen() , substr (string , start , length) , strtoupper() , str_replace(search, replace , subject,count), strrev(),



    // strlen
    echo strlen ("Bangladesh"); // it will conut the number of element (letter,number or space);
    echo "<br>";



    // str_word_count : it will count the number of word;
    function name() { 
        return str_word_count ("This is string word count");
    };
    echo name();
    echo "<br>";

    echo str_word_count("This is a string word count"); // without function;
    echo "<br>";



    // strtoupper
    echo strtoupper ("alamgir rejvi");
    echo "<br>";
    


    // strtolower
    echo strtolower ("ALAMGIR REJVI");
    echo "<br>";



    // strrev
    echo strrev ("ALAMGIR REJVI");
    echo "<br>";



    // stting replace function
    echo str_replace ("Hi", " hello " , "Hi , This is the function replace");
    echo "<br>";



    // substr 
    $name = "IDB scholarship programme";
    echo substr ($name ,4,11);
    echo "<br>";
    ?>

</body>
</html>