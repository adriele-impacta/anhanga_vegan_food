<?php
require_once 'banco.php';

abstract class Base extends Banco
{
    public $tabela = '';
    public $camposValores = array();
    public $campoPk = null;
    public $valorPk = null;
    public $extrasSelect = '';
   
    //metodos
    public function addCampo($campo = null, $valor = null)
    {
        if (!empty($campo)) {
            $this->camposValores[$campo] = $valor;
        }
    }

    public function delCampo($campo = null)
    {
        if (array_key_exists($campo, $this->camposValores)) {
            unset($this->camposValores[$campo]);
        }
    }

    public function setValor($campo = null, $valor = null)
    {
        if(!empty($campo) && !empty($valor)){
            $this->camposValores[$campo] = $valor;
        }
    }

    public function getValor($campo = null){
        if(!empty($campo) && array_key_exists($campo, $this->camposValores)){
            return $this->camposValores($campo);
        }
        else{
            return false;
        }
    }

}
//Classe base para criacao de outras