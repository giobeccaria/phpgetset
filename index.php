<?php

class Alumno
{
    private $_nombre;
    private $_apellido;
    private $_fechaNacimiento;
    private $_colegio;
    private $_direccionColegio;
 
    public function __construct()
    {
        $this->_nombre = "Dato no disponible.";
        $this->_apellido = "Dato no disponible.";
        $this->_fechaNacimiento = "Dato no disponible.";
        $this->_colegio = "Dato no disponible";
        $this->_direccionColegio = "Dato no disponible.";
    }
 
    public function getNombre()
    {
        return $this->_nombre;
    }

    public function setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->_apellido;
    }

    public function setApellido($apellido)
    {
        $this->_apellido = $apellido;
    }

    public function getFechaNacimiento()
    {
        return $this->_fechaNacimiento;
    }

    public function setFechaNacimiento($fechanacimiento)
    {
        $this->_fechaNacimiento = $fechanacimiento;
    }

    public function getColegio()
    {
        return $this->_colegio;
    }

    public function setColegio($colegio)
    {
        $this->_colegio = $colegio;
    }
 
    public function getDireccionColegio()
    {
        return $this->_direccionColegio;
    }

    public function setDireccionColegio($direccioncolegio)
    {
        $this->_direccionColegio = $direccioncolegio;
    }
}
 
$objAlumno = new Alumno();

$objAlumno->setNombre('Juan');
$objAlumno->setApellido('Perez');
$objAlumno->setFechaNacimiento('20 de enero de 2002');
$objAlumno->setColegio('Harwood School');
$objAlumno->setDireccionColegio('Siracusa 2380, Carrasco, Montevideo, Uruguay');
 
echo '<b>Nombre:</b> ' . $objAlumno->getNombre() . '<br>';
echo '<b>Apellido:</b> ' . $objAlumno->getApellido() . '<br>';
echo '<b>Fecha de Nacimiento:</b> ' . $objAlumno->getFechaNacimiento() . '<br>';
echo '<b>Colegio:</b> ' . $objAlumno->getColegio() . '<br>';
echo '<b>Dirección:</b> ' . $objAlumno->getDireccionColegio() . '<br>';