<?php
class Pedidos extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_tbl_pedido"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id" => null,
                "id_status_pedido" => null,
                "dt_delete" => null 
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }

}