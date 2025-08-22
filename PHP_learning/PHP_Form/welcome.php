<!-- Welcome   <?php 
echo $_POST['name'] ?> 
<br>
Your email is : <?php echo $_POST['email'] ?> -->

<?php
    echo "<pre>";
    // print_r($_POST); // $_POST for output in other file used with 'method="post"'
    // print_r($_GET); // $_GET for output in other file used with 'method="get"'
    print_r($_REQUEST); // $_REQEST for output in other file that can be used both method
    echo "</pre>";
?>
