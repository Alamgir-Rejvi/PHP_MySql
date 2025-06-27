    <!-- include and require function: to insert the content of one PHP file into another PHP file ,
    in the case of failure,
    @ Include in PHP will only generate an alert (E_WARNING), and the script will proceed. 
    @Require will produce a fatal error (E_COMPILE_ERROR) and interrupt the script.
    "include_once and require_once" function can be used here but if we use these , we can not copy twice in a file which is possible by  "include and require" function-->

    
    <!-- header and nav part -->
<?php include("inc/header_nav.php");  ?>
<?php include("inc/header_nav.php");  // ?>   


    <!-- body part -->


<?php include("inc/body.php"); ?>
       

    <!-- footer part -->

<?php include("inc/footer.php"); ?>     
        
        