<?php

class Adm extends Base
{
    public function __construct($campos = array())
    {
        parent::__construct(); // chama construtor da classe banco
        $this->tabela = "vw_tbl_adm"; // nome da tabela
        if (sizeof($campos) <= 0) {
            $this->camposValores = array(
                "id" => null,
                "nome_completo" => null,
               
            );
        } else {
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }

    public function logado($id_adm)
    {
        if (!empty($id_adm)) {

            $this->extrasSelect = "WHERE id = $id_adm;";
            $this->selecionaCampos($this);

            $res = $this->retornaDados();
            $this->nome_completo = $res->nome_completo;
        }
    }
}
