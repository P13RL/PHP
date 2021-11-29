<?php

class Settings{
    private $voci = 1;
    private $temaScuro = false;
    private $hardDelete = false;
    private $nomeTema="default";
    private $typeSettings = 'zero';
    const VIEW = "view.php";
    const FORM = "form.php";
    const PAGE = "page.php";

    public function __construct(){
        if(!isset($_SESSION['impostazioni'])){
            $this->save();
        }
    }

    public function load(){
        $tmp = unserialize($_SESSION['impostazioni']);
        $this->voci = $tmp->voci;
        $this->temaScuro = $tmp->temaScuro;
        $this->hardDelete= $tmp->hardDelete;
        $this->nomeTema = $tmp->nomeTema;
        $this->typeSettings = $tmp-> typeSettings;
    }

    public function getVoci(){
        return $this-> voci;
    }

    public function getTema(){
        return $this->temaScuro;
    }
    public function getTemaLabel(){
        return($this->temaScuro) ? "chiaro":"Scuro";
    }
    public function getDelete(){
        return $this-> hardDelete;
    }
    public function getDeleteLabel(){
        return($this->hardDelete) ? "Soft":"Hard";
    }
    public function getNomeTema(){
        return $this->nomeTema;
    }
    public function getTypeSettings(){
        return $this->typeSettings;
    }

    public static function getUrlView(){
        return self::VIEW;
    }
    public static function getUrlForm(){
        return self::FORM;
    }
    public static function getUrlPage(){
        return self::PAGE;
    }

    public function update($settings){
        if(isset($settings['default'])){
            if($settings['default'] == 'one'){
                $this->nomeTema = "Tema1";
                $this->voci = 2;
                $this->hardDelete = false;
                $this-> temaScuro = false;
                $this->typeSettings = 'one';
            }
            if($settings['default'] == 'two'){
                $this->nomeTema = "Tema2";
                $this->voci = 5;
                $this->hardDelete = true;
                $this-> temaScuro = true;
                $this->typeSettings = 'two';
            }
            if($settings['default']=='three'){
                $this->nomeTema = "Tema3";
                $this->voci = 8;
                $this->hardDelete = true;
                $this-> temaScuro = false;
                $this->typeSettings = 'three';
            }
            if($settings['default'] == 'zero'){
                $this->voci = $settings['numero'];
                if($settings['tema'] == 'scuro'){
                    $this->temaScuro = false;
                }
                else  $this->temaScuro = true;

                if($settings['delete'] == 'hard'){
                    $this->hardDelete = false;
                }
                else  $this->hardDelete = true;

                
                $this->nomeTema = $settings['nomeTema'];
                $this->typeSettings = 'zero';
            }
            $this->save();
        }
        
       
    }
    public function save(){
        $_SESSION['impostazioni'] = serialize($this);
    }

    public function getDefault(){
        return $this->typeSettings;
    }
    
    public function typeOfTema(){
        if($this->temaScuro) return "bg-light";
        else return "bg-dark";
    }
}
?>