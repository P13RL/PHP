<?php
class Gestione{
    private $db_connection;
    public function __construct(){
        $this->db_connection = new Connessione();
    }

    public function add($value){
        $sql = "INSERT INTO articoli_sportivi(nomeArticolo, quantitaArticolo, prezzo) 
                VALUES('".$value['nomeArticolo']."', '".$value['quantitaArticolo']."', '".$value['prezzoArticolo']."')";
        $this->db_connection->query($sql);
    }
}
