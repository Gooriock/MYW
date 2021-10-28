<?php


class Dica{
    private $id_Dica;
    private $tipoResiduo;
    private $descricao;
    private $dataPosragem;


public function setId_DIca($valor){
    $this->id_Dica = $valor;
}
public function setTipoResiduo($valor){
    $this->tipoResiduo = $valor;
}
public function getId_Dica() {
	return $this->id_Dica;
}
public function getTipoResiduo() {
	return $this->tipoResiduo;
}

}

