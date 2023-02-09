<?php
require_once("model/model.php");
class modeloControler{
    private $model;

    public function __construct(){
        $this->model= new Modelo();
    }
    static function index(){
        $producto= new Modelo();
        $dato = $producto->mostrar("producto");

        require_once("view/index.php");
    }

}