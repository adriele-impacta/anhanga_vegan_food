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

    public function relatorio_produtos()
    {
        $array_produtos = array();
        $this->selecionaAberto("SELECT COUNT(nome_produto) as total, nome_produto FROM vw_lista_pedido GROUP BY nome_produto;");
            if ($this->linhasAfetadas > 0) {
                while ($res = $this->retornaDados()) {
                    array_push($array_produtos, get_object_vars($res));
                }
                return $array_produtos;
            }
    }

    
}