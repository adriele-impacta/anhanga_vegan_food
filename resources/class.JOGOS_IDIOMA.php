<?php

class JOGOS_IDIOMA
{

    var $CODIGO;
    var $COD_JOGOS;
    var $NOME;
    var $TEXTO;
    var $IMG_QUAD;
    var $IMG_TOPO;
    var $IDIOMA;
    var $SEO_TITLE;
    var $SEO_DESCRIPTION;
    var $SEO_KEYWORDS;
    var $SEO_SLUG;
    var $SEO_ROBOTS;
    var $OG_TITLE;
    var $OG_SITENAME;
    var $OG_DESCRIPTION;
    var $OG_IMAGE;
    var $lista = array();
    var $database;

    function __construct()
    {
        $this->database = new Database();
    }

    function select($id)
    {

        $sql = "SELECT * FROM JOGOS_IDIOMA WHERE CODIGO = $id;";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        $row = mysqli_fetch_object($result);


        $this->CODIGO = $row->CODIGO;

        $this->COD_JOGOS = $row->COD_JOGOS;

        $this->NOME = $row->NOME;

        $this->TEXTO = $row->TEXTO;

        $this->IMG_QUAD = $row->IMG_QUAD;

        $this->IMG_TOPO = $row->IMG_TOPO;

        $this->IDIOMA = $row->IDIOMA;

        $this->SEO_TITLE = $row->SEO_TITLE;

        $this->SEO_DESCRIPTION = $row->SEO_DESCRIPTION;

        $this->SEO_KEYWORDS = $row->SEO_KEYWORDS;

        $this->SEO_SLUG = $row->SEO_SLUG;

        $this->SEO_ROBOTS = $row->SEO_ROBOTS;

        $this->OG_TITLE = $row->OG_TITLE;

        $this->OG_SITENAME = $row->OG_SITENAME;

        $this->OG_DESCRIPTION = $row->OG_DESCRIPTION;

        $this->OG_IMAGE = $row->OG_IMAGE;
    }

    function delete($id)
    {
        $sql = "DELETE FROM JOGOS_IDIOMA WHERE CODIGO = $id;";
        $result = $this->database->query($sql);
    }

    function delete_relacao($id)
    {
        $sql = "DELETE FROM JOGOS_IDIOMA WHERE COD_JOGOS = $id;";
        $this->database->query($sql);
    }

    function insert()
    {
        $this->CODIGO = ""; // clear key for autoincrement

        $sql = "INSERT INTO JOGOS_IDIOMA ( COD_JOGOS,NOME,TEXTO,IMG_QUAD,IMG_TOPO,IDIOMA,SEO_TITLE,SEO_DESCRIPTION,SEO_KEYWORDS,SEO_SLUG,SEO_ROBOTS,OG_TITLE,OG_SITENAME,OG_DESCRIPTION,OG_IMAGE ) VALUES ( '$this->COD_JOGOS','$this->NOME','$this->TEXTO','$this->IMG_QUAD','$this->IMG_TOPO','$this->IDIOMA','$this->SEO_TITLE','$this->SEO_DESCRIPTION','$this->SEO_KEYWORDS','$this->SEO_SLUG','$this->SEO_ROBOTS','$this->OG_TITLE','$this->OG_SITENAME','$this->OG_DESCRIPTION','$this->OG_IMAGE' )";
        $result = $this->database->query($sql);
        $this->CODIGO = mysqli_insert_id($this->database->link);
    }

    function update($id)
    {
        $sql = " UPDATE JOGOS_IDIOMA SET  COD_JOGOS = '$this->COD_JOGOS',NOME = '$this->NOME',TEXTO = '$this->TEXTO',IMG_QUAD = '$this->IMG_QUAD',IMG_TOPO = '$this->IMG_TOPO',IDIOMA = '$this->IDIOMA',SEO_TITLE = '$this->SEO_TITLE',SEO_DESCRIPTION = '$this->SEO_DESCRIPTION',SEO_KEYWORDS = '$this->SEO_KEYWORDS',SEO_SLUG = '$this->SEO_SLUG',SEO_ROBOTS = '$this->SEO_ROBOTS',OG_TITLE = '$this->OG_TITLE',OG_SITENAME = '$this->OG_SITENAME',OG_DESCRIPTION = '$this->OG_DESCRIPTION',OG_IMAGE = '$this->OG_IMAGE' WHERE CODIGO = $id ";
        $result = $this->database->query($sql);
    }

    function update_by_jogo($id, $idioma)
    {
        $sql = " UPDATE JOGOS_IDIOMA SET COD_JOGOS = '$this->COD_JOGOS',NOME = '$this->NOME',TEXTO = '$this->TEXTO',IMG_QUAD = '$this->IMG_QUAD',IMG_TOPO = '$this->IMG_TOPO',IDIOMA = '$this->IDIOMA',SEO_TITLE = '$this->SEO_TITLE',SEO_DESCRIPTION = '$this->SEO_DESCRIPTION',SEO_KEYWORDS = '$this->SEO_KEYWORDS',SEO_SLUG = '$this->SEO_SLUG',SEO_ROBOTS = '$this->SEO_ROBOTS',OG_TITLE = '$this->OG_TITLE',OG_SITENAME = '$this->OG_SITENAME',OG_DESCRIPTION = '$this->OG_DESCRIPTION',OG_IMAGE = '$this->OG_IMAGE' WHERE COD_JOGOS  = $id AND IDIOMA = $idioma; ";
        $this->database->query($sql);
    }

    function select_all()
    {
        $sql = 'SELECT * FROM JOGOS_IDIOMA;';
        $result = $this->database->query($sql);
        $result = $this->database->result;
        while($row = mysqli_fetch_object($result))
        {
            array_push($this->lista, $row);
        }
    }

    /* ####################################Outros######################################### */

    function select_cod_jogo($id)
    {

        $sql = "SELECT * FROM JOGOS_IDIOMA WHERE COD_JOGOS = $id;";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        while($row = mysqli_fetch_object($result))
        {
            array_push($this->lista, $row);
        }
    }

}
