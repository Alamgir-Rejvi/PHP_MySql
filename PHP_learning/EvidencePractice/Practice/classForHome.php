<?php
class Student {

    public static $file_path = "data.txt";

    public $id, $name, $batch;

    // public static $file_path = "data.txt";

    public function __construct ($i, $n,$b) {
        $this->id = $i ; $this->name = $n ;$this->batch = $b;

    }
    public function display () {
        return $this->id . "," . $this->name . "," . $this->batch . PHP_EOL;
    
    }
    function dataStore (){
      file_put_contents(self:: $file_path,$this->display(), FILE_APPEND | LOCK_EX);
    }

    public static function display_onscreen(){
	   
	  $students=file(self::$file_path);
      
		echo "<b>ID | Name | Batch </b><br/>";
		foreach($students as $student){
				   list($id, $name , $batch)=explode(",",trim($student));
				   echo "$id, $name, $batch <br/>";
				   
	    }
  }
}

