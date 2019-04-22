<?php
require_once('Base.class.php');

class Produtos extends Base{

    public function __construct($campos=array()){

        parent::__construct(); // chama construtor da classe banco

        $this->tabela = "vw_tbl_produto"; // nome da tabela
        if(sizeof($campos) <= 0){
            $this->camposValores = array(
                "id" => null,
                "id_categoria" => null,
                "nome_produto" => null,
                "descricao_produto" => null,
                "valor" => null,
                "promocao" => null,
                "imagem" => null,
                "dt_criacao" => null,
                "criado_por" => null,
             //   "dt_ult_atualizacao" => null,
             //   "atualizado_por" => null,
                "dt_delete" => null,
                "deletado_por" => null              
            );
        }
        else{
            $this->camposValores = $campos;
        }
        $this->campoPk = "id";
    }

    public function deleteItem($id = null, $confirm = null){
        
            if (!empty($id) && $confirm == true){
                $this->delCampo('id_categoria');
                $this->delCampo('nome_produto');
                $this->delCampo('descricao_produto');
                $this->delCampo('valor');
                $this->delCampo('promocao');
                $this->delCampo('imagem');
                $this->delCampo('dt_criacao');
                $this->delCampo('criado_por');
                
                $this->setValor('dt_delete', date('Y-m-d H:i:s'));
                $this->setValor('deletado_por', '1');
                $this->valorPk = $id;
                $this->atualizar($this);
                if($this->linhasAfetadas != -1){
                    header('Location: http://www.example.com/');
                }
            }
        }//Delete page


}