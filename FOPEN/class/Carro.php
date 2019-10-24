<?php

 class Carro{

    private $idcarro;
    private $marcacarro;
    private $corcarro;

    public function getIdcarro(){
        return $this->idcarro;
    }
    public function getMarcacarro(){
        return $this->marcacarro;
    }
    public function getCorcarro(){
        return $this->corcarro;
    }
    public function setIdcarro($idcarro){
        $this->idcarro = $idcarro;
    }
    public function setMarcacarro($marcacarro){
        $this->marcacarro = $marcacarro;
    }
    public function setCorcarro($corcarro){
        $this->corcarro = $corcarro;
    }

    public function setData($data){

        $this->setIdcarro($data['idcarro']);
        $this->setMarcacarro($date['marcacarro']);
        $this->setCorcarro($date['corcarro']);
    }

    public function insert(){
        $sql = new Sql();

        $result = $sql->select("CALL sp_carro_insert (:MARCA,:COR)", array(
            ':MARCA' => $this->getMarcacarro(),
            ':COR' => $this->getCorcarro()
        ));

        if (count($result) > 0){

            $this->setData($result[0]);
        }
    }

    public function __toString(){

        return json_encode(array(
            "idcarro" => $this->getIdcarro(),
            "marcacarro" => $this->getMarcacarro(),
            "corcarro" => $this->getCorcarro()
        ));
    }

    public function __construct($marcacarro = "", $corcarro = ""){
          
        $this->setMarcacarro($marcacarro);
        $this->setCorcarro($corcarro);
    }
 }


?>