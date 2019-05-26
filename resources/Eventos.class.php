
<?php
class Eventos extends Base{
    public function __construct($campos=array()){
        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_tbl_eventos"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id" => null,
                "nome_evento" => null,
                "descricao_evento" => null,
                "link_evento" => null,
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