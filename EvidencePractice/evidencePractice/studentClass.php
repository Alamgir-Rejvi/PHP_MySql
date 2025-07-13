<?php

class Student
{
    public static string $file_path = "dataSave.txt";

    public string $id;
    public string $name;
    public string $email;
    public string $password;

    public string $idError = "";
    public string $nameError = "";
    public string $emailError = "";
    public string $passwordError = "";

    public function __construct(string $id, string $name, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function format(): string
    {
        return "{$this->id},{$this->name},{$this->email},{$this->password}" . PHP_EOL;
    }

    public function dataSave(): void
    {
        file_put_contents(self::$file_path, $this->format(), FILE_APPEND | LOCK_EX);
    }

    public static function display_onscreen(): void
    {
        if (!file_exists(self::$file_path)) {
            echo "<b>No data found.</b>";
            return;
        }

        $students = file(self::$file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        echo "<b>ID | Name | Email | Password</b><br/>";
        foreach ($students as $student) {
            [$id, $name, $email, $password] = explode(",", $student);
            echo htmlspecialchars("$id, $name, $email, $password") . "<br/>";
        }
    }
}

?>
