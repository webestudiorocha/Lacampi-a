<?php

namespace Clases;

class Portfolio
{

    //Atributos
    public $id;
    public $cod;
    public $titulo;
    public $desarrollo;
    public $categoria;
    public $keywords;
    public $description;
    public $fecha;
    private $con;

    //Metodos
    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function add()
    {
        $sql   = "INSERT INTO `portfolio`(`cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES ('{$this->cod}', '{$this->titulo}', '{$this->desarrollo}', '{$this->categoria}', '{$this->keywords}', '{$this->description}', '{$this->fecha}')";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function edit()
    {
        $sql   = "UPDATE `portfolio` SET cod = '{$this->cod}', titulo = '{$this->titulo}', desarrollo = '{$this->desarrollo}', categoria = '{$this->categoria}', keywords = '{$this->keywords}', description = '{$this->description}', fecha = '{$this->fecha}' WHERE `id`='{$this->id}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function delete()
    {
        $sql   = "DELETE FROM `portfolio` WHERE `cod`  = '{$this->cod}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function view()
    {
        $sql   = "SELECT * FROM `portfolio` WHERE cod = '{$this->cod}' ORDER BY id DESC";
        $portfolio = $this->con->sqlReturn($sql);
        $row   = mysqli_fetch_assoc($portfolio);
        return $row;
    }

    function list($filter) {
        $array = array();
        if (is_array($filter)) {
            $filterSql = "WHERE ";
            $filterSql .= implode(" AND ", $filter);
        } else {
            $filterSql = '';
        }

        $sql   = "SELECT * FROM `portfolio` $filterSql  ORDER BY id DESC";
        $portfolio = $this->con->sqlReturn($sql);

        if ($portfolio) {
            while ($row = mysqli_fetch_assoc($portfolio)) {
                $array[] = $row;
            }
            return $array;
        }
    }
}
