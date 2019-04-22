<?php

ini_set('max_execution_time', 300);

class Database
{
    var $host;
    var $password;
    var $user;
    var $database;
    var $link;
    var $query;
    var $result;
    var $rows;
    var $last_id;
    function Database()
    {
        $this->host = "75.126.14.21";
        $this->password = "5sMkW9UpldPd";
        $this->user = "hologate_master";
        $this->database = "hologate_principal";
        $this->rows = 0;
        
    }
    function OpenLink()
    {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->database, 3306);
        //$this->link->set_charset("utf8");
    }
    function CloseDB()
    {
        $this->link->close();
    }
    function FreeResult()
    {
        $this->result->close();
    }
    function getLista()
    {
        $lista = array();
        while ($obj = $this->result->fetch_object())
        {
            array_push($lista, $obj);
        }
        $this->FreeResult();
        $this->CloseDB();

        return $lista;
    }
    function getListaArray()
    {

        $lista = array();
        while ($obj = $this->result->fetch_array())
        {
            array_push($lista, $obj);
        }
        $this->FreeResult();
        $this->CloseDB();

        return $lista;
    }
    function getListaAssoc()
    {

        $lista = array();
        while ($obj = $this->result->fetch_assoc())
        {
            array_push($lista, $obj);
        }
        $this->FreeResult();
        $this->CloseDB();

        return $lista;
    }
    function getObject()
    {
        $object = $this->result->fetch_object();
        $this->FreeResult();
        $this->CloseDB();
        return $object;
    }
    
       function getObjectArray()
    {
        $object = $this->result->fetch_array();
        $this->FreeResult();
        $this->CloseDB();
        return $object;
    }
    
    function Query($query)
    {
        $this->OpenLink();
        $this->query = $query;
        $this->result = $this->link->query($query);
        $this->rows = $this->link->affected_rows;
        $this->last_id = mysqli_insert_id($this->link);
    }
}