<?php namespace Clases;

class Conexion
{
    //private $datos = array("host"=> "localhost","user"=> "root","pass"=> "","db"  => "pintureria_ariel");
    //private $datos = array("host"=> "162.144.180.63","user"=> "estudfh2_ariel","pass"=> "faAr2010","db"  => "estudfh2_ariel");
    private $datos = array("host"=> "localhost","user"=> "c1501033_sitio","pass"=> "faAr2010","db"  => "c1501033_sitio");
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
        mysqli_set_charset($this->con,'utf8');

    }

    public function con()
    {
        $conexion = mysqli_connect($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
        mysqli_set_charset($conexion,'utf8');
        return $conexion;
    }

    public function backup()
    {
        return $this->datos;
    }

    public function sql($query)
    {
        $this->con->query($query);
    }

    public function sqlReturn($query)
    {
        $dato = $this->con->query($query);
        return $dato;
    }
}
