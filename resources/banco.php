
<?php

abstract class Banco
{

    public $servidor = 'mnihouze.com.br';

    public $usuario = 'mnihouze_usr_web';

    public $senha = '$ej9j6ua';

    public $nomeBanco = 'mnihouze_db_VEGAN';

    public $conexao = null;

    public $dataset = null;

    public $linhasAfetadas = -1;

    // metodos

    public function __construct()
    {

        $this->conecta();

        //echo 'construtor da classe banco ok';

    }

    public function __destruct()
    {

        if ($this->conexao != null) {

            mysqli_close($this->conexao);

        }

    }

    public function conecta()
    {

        $this->conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->nomeBanco) or die($this->trataErro(__FILE__, __FUNCTION__, mysqli_connect_errno(), mysqli_connect_error(), true));

        // mysql_select_db($this->nomeBanco) or die('erro');

        //Gravar e ler dados em utf8

        mysqli_query($this->conexao, "SET NAMES 'utf8'");

        mysqli_query($this->conexao, "SET character_set_connection=utf8");

        mysqli_query($this->conexao, "SET character_set_client=utf8");

        mysqli_query($this->conexao, "SET character_set_results=utf8");

    }

    public function inserir($objeto)
    {

        $sql = "INSERT INTO " . $objeto->tabela . " (";

        for ($i = 0; $i < count($objeto->camposValores); $i++) {

            $sql .= key($objeto->camposValores);

            if ($i < (count($objeto->camposValores) - 1)) {

                $sql .= ", ";

            } else {

                $sql .= ") ";

            }

            next($objeto->camposValores);

        }

        reset($objeto->camposValores); // poe ponteiro no primeiro registro novamente

        $sql .= "VALUES (";

        for ($i = 0; $i < count($objeto->camposValores); $i++) {

            // verifica se é numerico ou texto e trata para inserção

            $sql .= is_numeric($objeto->camposValores[key($objeto->camposValores)]) ?

            $objeto->camposValores[key($objeto->camposValores)] :

            "'" . $objeto->camposValores[key($objeto->camposValores)] . "'";

            if ($i < (count($objeto->camposValores) - 1)) {

                $sql .= ", ";

            } else {

                $sql .= ") ";

            }

            next($objeto->camposValores);

        }
      
        return $this->executaSQL($sql);

    } //rotina de insert

    public function atualizar($objeto)
    {

        $sql = "UPDATE $objeto->tabela SET ";
        $i = 0;
        foreach ($objeto->camposValores as $key => $value) {
            $sql .= $key . " = ";
            $sql .= is_numeric($value) ? $value : "'" . $value . "'";
            if ($i < (count($objeto->camposValores) - 1)) {

                $sql .= ", ";

            } else {

                $sql .= " ";

            }

            $i++;
        }

        $sql .= "WHERE " . $objeto->campoPk . " = ";
        $sql .= is_numeric($objeto->valorPk) ? $objeto->valorPk : "'" . $objeto->valorPk . "'";

        
        return $this->executaSQL($sql);

    } // rotina de update

    public function deletar($objeto)
    {

        $sql = "DELETE FROM " . $objeto->tabela;

        $sql .= " WHERE " . $objeto->campoPk . " = ";

        $sql .= is_numeric($objeto->valorPk) ? $objeto->valorPk : "'" . $objeto->valorPk . "'";

        return $this->executaSQL($sql);

    } //rotina de deletar

    public function selecionaTudo()
    {
        $sql = "SELECT * FROM " . $this->tabela;
        if (!empty($this->extrasSelect)) {
            $sql .= " " . $this->extrasSelect;
        }
        return $this->executaSQL($sql);
    }

    public function selecionaCampos($objeto)
    {
        $sql = "SELECT ";
        $i = 0;
        foreach ($objeto->camposValores as $key => $value) {
            $sql .= $key;
            if ($i < (count($objeto->camposValores) - 1)) {
                $sql .= ", ";
            } else {
                $sql .= " ";
            }
            $i++;
        }
        $sql .= " FROM " . $objeto->tabela;
        if (!empty($objeto->extrasSelect)) {
            $sql .= " " . $objeto->extrasSelect;
        }

        return $this->executaSQL($sql);
    }

    public function executaSQL($sql = null)
    {

        if (!empty($sql)) {

            $query = mysqli_query($this->conexao, $sql) or $this->trataErro(__FILE__, __FUNCTION__);

            $this->linhasAfetadas = mysqli_affected_rows($this->conexao);

            if (substr(trim(strtolower($sql)), 0, 6) == 'select') {

                $this->dataset = $query;

                return $query;

            } else {

                return $this->linhasAfetadas;

            }

        } else {

            $this->trataErro(__FILE__, __FUNCTION__, null, 'Comando sql não informado', false);

        }

    } // executa a query

    public function retornaDados($tipo = null)
    {

        switch (strtolower($tipo)) {

            case 'array':

                return mysqli_fetch_array($this->dataset);

                break;

            case 'assoc':

                return mysqli_fetch_assoc($this->dataset);

                break;

            case 'object':

                return mysqli_fetch_object($this->dataset);

                break;

            default:

                return mysqli_fetch_object($this->dataset);

                break;

        }

    }

    public function trataErro($arquivo = null, $rotina = null, $numErro = null, $msgErro = null, $exept = false)
    {

        if ($arquivo == null) {

            $arquivo = 'Nao informado';

        }

        if ($rotina == null) {

            $rotina = 'Nao informado';

        }

        if ($numErro == null) {

            $numErro = mysqli_connect_errno($this->conexao);

        }

        if ($msgErro == null) {

            $msgErro = mysqli_connect_error($this->conexao);

        }

        $resultado = 'Ocorreu um erro:

        <br><strong> Arquivo: </strong>' . $arquivo . '

        <br><strong> Rotina: </strong>' . $rotina . '

        <br><strong> Codigo: </strong>' . $numErro . '

        <br><strong> Erro: </strong>' . $msgErro;

        if ($exept == false) {

            echo ($resultado);

        } else {

            die($resultado);

        }

    }

}