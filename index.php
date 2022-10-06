<?php

    require_once("config/database.php");
    require_once("controllers/Conductores.php");
    require_once("controllers/Vehiculos.php");

    $control = new VehiculosController();
    $control->index();

    $control2 = new ConductoresController();
    $control2->index();

?>