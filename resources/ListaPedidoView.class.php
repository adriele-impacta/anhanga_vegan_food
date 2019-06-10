<?php
class ListaPedidoView extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_lista_pedido"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id_pedido" => null,
                "nome_produto" => null,
                "promocao" => null,
                "valor" => null,
                "obs" => null
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }

    public function relatorio_produtos($mes = null, $ano = null)
    {
        $array_produtos = array();

        $filtro_mes = '';
        $filtro_ano = '';

        if($mes){
            $filtro_mes = " WHERE MONTH(b.dt_entrega) = $mes ";
        }
        if($ano){
            $filtro_ano = "AND YEAR(b.dt_entrega) = $ano";
        }

        $this->selecionaAberto("SELECT COUNT(nome_produto) as total, nome_produto FROM vw_lista_pedido as a INNER JOIN vw_pedido as b ON a.id_pedido = b.id_pedido $filtro_mes $filtro_ano GROUP BY nome_produto ORDER BY total DESC;");
            if ($this->linhasAfetadas > 0) {
                while ($res = $this->retornaDados()) {
                    array_push($array_produtos, get_object_vars($res));
                }
                return $array_produtos;
            }
    }

    
}