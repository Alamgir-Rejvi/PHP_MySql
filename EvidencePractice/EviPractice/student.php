<?php
class Student{
    public $name,$email,$phone;

    public static $file_path = "data.txt";

    public function __construct($n,$e,$p){
        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;
    }

    public function format(){
        return $this->name . "," . $this->email . "," . $this->phone . PHP_EOL;
    }

    public function store() {
        file_put_contents(self ::$file_path, $this->format(),FILE_APPEND | LOCK_EX);
    }

    public static function show (){
        $students = file(self :: $file_path);
        echo "Student Information";
        echo "<table>";
        echo "<tr>
            <th> Name </th>
            <th> Email </th>
            <th> Phone </th>
        </tr>
        ";

        foreach($students as $student) {
            list($name,$email, $phone) = explode("|",trim($student));
            echo "<tr>
                   <td>" . htmlspecialchars($name) . "</td>
                   <td>" . htmlspecialchars($email) . "</td>
                   <td>" . htmlspecialchars($phone) . "</td>
               </tr>";
        }
        echo "</table>";
    }
}

?>