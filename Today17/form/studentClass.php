<?php
class Student {
    private $file;

    public function __construct() {
        $this->file = "data.txt";
    }

    public function validate($name, $email, $phone) {
        $errors = [];

        if (empty($name)) {
            $errors[] = "Name is required.";
        }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Valid email is required.";
        }
        if (empty($phone) || !preg_match('/^[0-9]{10,15}$/', $phone)) {
            $errors[] = "Valid phone number is required (10-15 digits).";
        }

        return $errors;
    }

    public function saveData($name, $email, $phone) {
        $dataLine = $name . "|" . $email . "|" . $phone . PHP_EOL;
        file_put_contents($this->file, $dataLine, FILE_APPEND);
    }

    public function readData() {
        $dataList = [];

        if (file_exists($this->file)) {
            $lines = file($this->file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($lines as $line) {
                $dataList[] = explode('|', $line);
            }
        }

        return $dataList;
    }
}
?>