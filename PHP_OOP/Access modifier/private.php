<?php
// private
class Per {
    private $name;
    public function priv () {
        return " My name is Mohammad Alamgir Rejvi";
    }

    
    public function convert () {
        return $this -> priv();
    }
}
$show = new Per();

// echo $show -> priv(); // output : fatal error
echo $show -> convert();
?>

