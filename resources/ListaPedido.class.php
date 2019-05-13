<?php
class ListaPedido extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_tbl_lista_pedido"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id" => null,
                "id_pedido" => null,
                "id_produto" => null
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }
}