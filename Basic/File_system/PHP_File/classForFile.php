<?php
  class File{
    public $name, $id, $contact , $email, $pass;

    public static $file_path = "dataStorage.txt";


    function __construct($n,$i,$c,$e,$p){
      $this->name =$n;  $this->id =$i; $this->contact =$c; $this->email =$e; $this->pass=$p;
    }

    function show (){
      return $this->name. "," . $this->id . "," . $this->contact . "," . $this->email . "," .$this->pass .PHP_EOL;
    }

    function dataStore (){
      file_put_contents(self:: $file_path,$this->show(), FILE_APPEND);
    }


    public static function display_onscreen(){
	   
	  $students=file(self::$file_path);
      //The file() reads a file into an array.
		
		echo "<b>Name | ID | Contact | Email | Password f</b><br/>";
		foreach($students as $student){
				   list($name, $id, $contact , $email, $pass)=explode(",",trim($student));
				   echo "$name, $id, $contact , $email, $pass<br/>";
				   
	    }
  }

}

      // $data = new File($name, $id,$contact, $email, $pass);
      // $data -> dataStore();
      // echo "Form Submit Successfully";
?>