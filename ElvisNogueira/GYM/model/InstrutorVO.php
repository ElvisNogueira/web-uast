<?php
include_once "UsuarioVO.php";

class InstrutorVO extends UsuarioVO {
    private $id, $cref;

    /**
     * InstrutorVO constructor.
     * @param $id
     * @param $cref
     */
    public function __construct($id, $cref)
    {
        $this->id = $id;
        $this->cref = $cref;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCref()
    {
        return $this->cref;
    }

    /**
     * @param mixed $cref
     */
    public function setCref($cref)
    {
        $this->cref = $cref;
    }



}