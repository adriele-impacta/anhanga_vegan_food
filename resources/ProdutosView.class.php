<?php


class ProdutosView extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_produto"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id" => null,
                "nome_produto" => null,
                "nome_categoria" => null,
                "dia_semana" => null            
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }
}