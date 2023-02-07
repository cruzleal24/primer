<?php
require_once("model/index-model.php");
class modelController{
    private $model;
    public function __construct(){
        $this->model= new Modelo();
    }
    static function index(){
        $producto =  new Modelo();
        $dato     =  $producto->mostrar("producto","1");

        require_once("view/index.php");
    }
}