
<?php
class TipoPagamento extends Base{
    public function __construct($campos=array()){
        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_tbl_tipo_pagamento"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id" => null,
                "tipo_pagamento" => null,
                "dt_criacao" => null,
                "criado_por" => null,
                "dt_delete" => null,
                "deletado_por" => null              
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }
}