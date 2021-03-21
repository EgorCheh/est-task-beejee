<?php
class Model_Main extends Model
{
    private $database;
    function __construct()
    {

        $db = new SQLite3("task.db");
        $this->database = $db;
        $sql = "CREATE TABLE IF NOT EXISTS Tasks (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(255),
        task VARCHAR(255),
        email VARCHAR(255),
        edit INTEGER NOT NULL DEFAULT  0,
        done INTEGER NOT NULL DEFAULT  0
    );";
        $result = $db->exec($sql);
    }

    function add_task($name, $email, $task)
    {
        $db = $this->database;
        $sql = "INSERT INTO Tasks (name, email, task) VALUES ('$name','$email','$task')";
        $result = $db->exec($sql);
    }
    function get_data()
    {
        $db = new SQLite3("task.db");
        $result = $db->query('SELECT * FROM Tasks');
        while ($item = $result->fetchArray()) {
            $data[] = $item;
        }

        return $data;
    }
}
