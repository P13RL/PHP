<?php

class Gestione{
    CONST FORM = "form.php";
    CONST enti = ['CARITAS' => 'CARITAS', 'UNICEF'=>'UNICEF', 'EMERGENCY'=>'EMERGENCY'];
    CONST ELENCO = "elenco.php";
    CONST DETTAGLIO = "dettaglio.php";
    CONST FILTRODONAZIONI = "filtroDonazioni.php";
    CONST DONAZIONIMAGGIORI = "donazioniMaggiori.php";
    private $db_connection;
    function __construct(){
        $this->db_connection = new Connection();
    }

    public function add($val){
        $temp = strtotime($val['anno']);
        $year = date('Y', $temp);
        $sql = "INSERT INTO raccolta_fondi(importo, ente, anno, note) VALUES ('".$val['importo']."', '".$val['ente']."', '$year', '".$val['note']."')";

        $this->db_connection->query($sql);
    }

    public function getLista(){
        $sql = "SELECT * FROM raccolta_fondi";
        return $this->db_connection->query($sql);
    }
    public function getDonazione($id){
        $sql = "SELECT * FROM raccolta_fondi WHERE id = '$id'";
        return $this->db_connection->query($sql);
    }

    public function update($id, $val){
        $sql = "UPDATE raccolta_fondi SET ente = '". $val['ente'] ."' WHERE id = '$id' ";
        $this->db_connection->query($sql);
    }
    public function getListaFiltro($val){
        $sql = "SELECT * FROM raccolta_fondi WHERE ente='".$val['ente']."'";
        return $this->db_connection->query($sql);
    }



    //metodi statici

    public static function urlForm(){
        return self::FORM;
    }

    public static function urlElenco(){
        return self::ELENCO;
    }

    public static function urlDettaglio($id){
        return self::DETTAGLIO ."?dettagli=". $id;
    }

}