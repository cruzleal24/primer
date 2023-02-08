<?php

class Modelo{
    private $Modelo;
    private $db;
    private $persona;

    public function __construct(){
        $this-> Modelo= array();
        $this-> db= new PDO('mysql:host=localhost, dbname= mvc',"root","");
    }

    public function insertar($tabla, $dato){
        $consulta= "insert into ".$tabla." values (null,".$dato.")";
        $resultado= $this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function mostrar($tabla, $condicion){
        $consulta="select * from ".$tabla." where ".$condicion;
        $resultado=$this->db->query($consulta);
        while($fila= $resultado->FETCHALL(PDO::FETCH_ASSOC)){
            $this->persona[]=$fila;
        }
        return $this->persona;
    }
    public function actualizar($tabla, $dato, $condicion){
        $consulta= "update ".$tabla." set ".$dato." where ".$condicion;
        $resultado= $this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminar( $tabla, $condicion){
        $consulta= "delete from ".$tabla." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
}