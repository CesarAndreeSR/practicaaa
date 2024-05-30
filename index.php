<?php

//controlador
require_once "controlador/plantilla-controlador.php";
require_once "controlador/categorias-controller.php";

//modelo
require_once "modelos/categorias-model.php";

//instanciar
$plantilla = new ControladorPlantilla();
$plantilla -> controladorPlantilla();