<?php
class Login extends Base
{
    public function __construct($campos = array())
    {
        parent::__construct(); // chama construtor da classe banco
        $this->tabela = "vw_tbl_usuario_adm"; // nome da tabela
        if (sizeof($campos) <= 0) {
            $this->camposValores = array(
                "id_adm" => null,
                "login" => null,
                "senha" => null,
                "dt_criacao" => null,
                "criado_por" => null,
                "dt_delete" => null,
                "deletado_por" => null,
            );
        } else {
            $this->camposValores = $campos;
        }
        $this->campoPk = "id_adm";
    }

    public function login($usuario, $senha)
    {
        if (!empty($usuario) && !empty($senha)) {

            $this->extrasSelect = "WHERE login ='$usuario' AND senha = '$senha';";
            $this->selecionaCampos($this);
            if ($this->linhasAfetadas == 1) {
                $res = $this->retornaDados();
                $this->id_adm = $res->id_adm;
                $this->login = $res->login;
            }
        }
    }
}
