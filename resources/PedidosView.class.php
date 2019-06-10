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

    public function select_meses_anos()
    {
        $mes_ano = array();
            $this->extrasSelect = "WHERE status_pedido != 'Cancelado' GROUP BY MONTH(dt_entrega), YEAR(dt_entrega);";
            $this->selecionaCampos($this);
            if ($this->linhasAfetadas > 0) {
                while ($res = $this->retornaDados()) {
                   // print_r($res);
                    array_push($mes_ano, get_object_vars($res));
                }
                return $mes_ano;
            
                // print_r($mes_ano);
            }
    }

    public function relatorio_tipo_pagamento($mes = null, $ano = null)
    {
        $total_tipo_pagamento = array();

        $filtro_mes = '';
        $filtro_ano = '';

        if($mes){
            $filtro_mes = " AND MONTH(dt_entrega) = $mes ";
        }
        if($ano){
            $filtro_ano = "AND YEAR(dt_entrega) = $ano";
        }
        

        $this->selecionaAberto("SELECT COUNT(id_pedido) as total, tipo_pagamento FROM vw_pedido WHERE status_pedido != 'Cancelado' $filtro_mes $filtro_ano GROUP BY tipo_pagamento;");
            if ($this->linhasAfetadas > 0) {
                while ($res = $this->retornaDados()) {
                    array_push($total_tipo_pagamento, get_object_vars($res));
                }
                return $total_tipo_pagamento;
            }
    }

    public function lista_todos(){
        $array = array();
        $this->selecionaAberto("SELECT * FROM vw_pedido ORDER BY id_pedido desc;");
        if ($this->linhasAfetadas > 0) {
            while ($res = $this->retornaDados()) {
                array_push($array, get_object_vars($res));
            }
            return $array;
        }
    }

}