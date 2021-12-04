<?php
class Gestione{
    private $db_connection;
    CONST INDEX = "index.php";
    CONST FORM = "form.php";
    CONST RIFORNIMENTO = "rifornimento.php";
    CONST RIFORNIMENTO_SINGOLO = "rifornisci.php";
    public function __construct(){
        $this->db_connection = new Connessione();
    }

    public function add($value){
        /** @noinspection SqlNoDataSourceInspection */
        $sql = "INSERT INTO articoli_sportivi(nomeArticolo, quantitaArticolo, prezzo) 
                VALUES('".$value['nomeArticolo']."', '".$value['quantitaArticolo']."', '".$value['prezzoArticolo']."')";
        $this->db_connection->query($sql);
    }

    public function getLista(){
        $sql = "SELECT * FROM articoli_sportivi";
        $list = $this->db_connection->query($sql);
        return $list;
    }

    public function rimuoviUnita($id){
        $sql = "SELECT * FROM articoli_sportivi WHERE id = '$id'";
        $art = $this->db_connection->query($sql)->fetch_assoc();
        if(intval($art['quantitaArticolo'])>0) {
            $art['quantitaArticolo'] = intval($art['quantitaArticolo']) - 1;
            $sql = "UPDATE articoli_sportivi SET quantitaArticolo = '". $art['quantitaArticolo'] ."' WHERE id='$id'";
            $this->db_connection->query($sql);

        }
        else
            echo "<div class='bg-danger text-center text-white'> Prodotto non disponibile! </div>";
    }

    public function eliminaProdotto($id){
        $sql = "DELETE FROM articoli_sportivi WHERE id='$id'";
        $this->db_connection->query($sql);
        echo "<div class='bg-danger text-center text-white'> Prodotto eliminato correttamente! </div>";
    }

    public function getArticolo($id){
        $sql = "SELECT * FROM articoli_sportivi WHERE id='$id'";
        return $this->db_connection->query($sql);
    }
    public function updateArticolo($value){
        $sql = "UPDATE articoli_sportivi SET quantitaArticolo = '".$value['quantitaArticolo']."'";
        $this->db_connection->query($sql);
    }
    //metodi statici

    public static function urlIndex(){
        return self::INDEX;
    }

    public static function urlForm(){
        return self::FORM;
    }

    public static function urlModificaUnita($id){
        return self::INDEX ."?modifica=".$id;
    }

    public static function urlEliminaArticolo($id){
        return self::INDEX."?elimina=".$id;
    }

    public static function urlRifornisci($id){
        return self::RIFORNIMENTO_SINGOLO."?rifornimento=".$id;
    }
}
