<?php
class Extended extends Base {
    public $address, $image;

    public static $file_path = "database.txt";

    public function __construct($n,$e,$p,$a,$i) {
        parent ::__construct($n,$e,$p);
        $this->address = $a;
        $this->image = $i;
    }

    public function output() {
        return parent :: output() ."|" . $this->address . "|" . $this->image .PHP_EOL;
    }

    public function save () {
        
        file_put_contents(self :: $file_path,FILE_APPEND | LOCK_EX);
    }
    public static function show() {
        $studentdatas = file(self::$file_path, FILE_APPEND);
        echo "Form is submitted successfully";
        echo "<table>";
        echo "<tr>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Address </th>
                <th> Image </th>
        ";


        foreach($studentdatas as $studentdata) {
            list ($name, $email, $phone, $address, $image) = explode("|", trim($studentdata));
            echo "<tr>
                    <td>" . htmlspecialchars($name) . "<td
                    <td>" . htmlspecialchars($email) . "</td>;
                    <td>" . htmlspecialchars($phone). "</td>;
                    <td>" . htmlspecialchars($address). "</td>;
                    <td><img src='media/" . htmlspecialchars($image) . "' width='100'\"></td>
        
                  </tr>";
        }
        echo "</table>";
    }
    
}

?>`