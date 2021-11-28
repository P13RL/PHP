<?php
class Connessione{
    CONST db = "primodb";
    CONST db_user="root";
    CONST db_password ="";
    CONST db_host="localhost";
    private $db_connection;
    public function __construct()
    {
        $this->db_connection = new mysqli(self::db_host, self::db_user, self::db_password, self::db);
        if($this->db_connection->connect_error)
            die("Si è verificato un errore nella connessione con il database");
    }

    public function query($sql){
        return $this->db_connection->query($sql);
    }
}

