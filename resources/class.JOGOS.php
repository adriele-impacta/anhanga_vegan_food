<?php
include_once("class.database.php");
class JOGOS
{
    var $CODIGO;
    var $DATA;
    var $DISPONIVEL;
    var $lista = array();
    var $database;
    function JOGOS()
    {

        $this->database = new Database();
    }
    function select($id)
    {
        $sql = "SELECT * FROM JOGOS WHERE CODIGO = $id;";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        $row = mysqli_fetch_object($result);

        $this->CODIGO = $row->CODIGO;
        $this->DATA = $row->DATA;
        $this->DISPONIVEL = $row->DISPONIVEL;
    }
    function delete($id)
    {
        $sql = "DELETE FROM JOGOS WHERE CODIGO = $id;";
        $result = $this->database->query($sql);
    }
    function insert()
    {
        $this->CODIGO = ""; // clear key for autoincrement

        $sql = "INSERT INTO JOGOS ( DATA,DISPONIVEL ) VALUES ( '$this->DATA','$this->DISPONIVEL' )";
        $result = $this->database->query($sql);
        $this->CODIGO = mysqli_insert_id($this->database->link);
    }
    function update($id)
    {
        $sql = " UPDATE JOGOS SET  DATA = '$this->DATA',DISPONIVEL = '$this->DISPONIVEL' WHERE CODIGO = $id ";
        $result = $this->database->query($sql);
    }
    function select_all()
    {
        $sql = 'SELECT * FROM JOGOS;';
        $result = $this->database->query($sql);
        $result = $this->database->result;
        while ($row = mysqli_fetch_object($result))
        {
            array_push($this->lista, $row);
        }
    }
    /* ####################################Outros######################################### */
    
    function select_last()
    {
        $sql = "SELECT AUTO_INCREMENT AS CODIGO FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'JOGOS';";
        $this->database->query($sql);
        $this->database->result;
        $row = mysqli_fetch_object($this->database->result);

        $this->CODIGO = $row->CODIGO;
    }
}