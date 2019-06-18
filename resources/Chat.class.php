<?php
class Chat extends Base{

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

    public function recupera_msg(){
        $array = array();
        $this->selecionaAberto("SELECT id_pedido, COUNT(id) as total FROM vw_tbl_chat WHERE dt_visualizacao IS NULL GROUP BY id_pedido");
        if ($this->linhasAfetadas > 0) {
            while ($res = $this->retornaDados()) {
                array_push($array, get_object_vars($res));
            }
            return $array;
        }
    }
}