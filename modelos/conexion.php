<?php

class Conexion{

    //método
    public static function conectar(){

        $cnn = new PDO("mysql:host=localhost;dbname=inventario","root","");
        $cnn->exec("set names utf8");

        return $cnn;

    }

}