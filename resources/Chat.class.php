<?php
class ListaPedidoView extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_tbl_chat"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id_pedido" => null,
                "mensagem" => null,
                "dt_mensagem" => null,
                "dt_visualizacao" => null,
                "usuario" => null
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }

    public function recupera_msg($id_pedido){
        $array = array();
        $this->selecionaAberto("SELECT * FROM vw_tbl_chat WHERE id_pedido = $id_pedido AND dt_visualizacao = '';");
        if ($this->linhasAfetadas > 0) {
            while ($res = $this->retornaDados()) {
                array_push($array, get_object_vars($res));
            }
            return $array;
        }
    }

    
}