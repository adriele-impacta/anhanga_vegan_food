<?php
class PedidosView extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_pedido"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id_pedido" => null,
                "dt_pedido" => null,
                "dt_entrega" => null,
                "id_cliente" => null,
                "nome_completo" => null,
                "tipo_pagamento" => null,
                "status_pedido" => null,
                "endereco" => null
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }

}