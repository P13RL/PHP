<?php

class Connection{
    CONST db = "primodb";
    CONST db_host = "localhost";
    CONST db_pw ="";
    CONST db_user="root";
    private $db_connection;
    function __construct(){
        $this->db_connection = new mysqli(self::db_host, self::db_user, self::db_pw, self::db);

        if($this->db_connection->connect_error)
            die("Si è verificato un errore nella connessione con il server");
    }

    function query($sql){
        return $this->db_connection->query($sql);
    }
}