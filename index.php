<?php

    require_once("config/config.php");
    require_once("core/routes.php");
    require_once("config/database.php");
    require_once("controllers/Conductores.php");
    require_once("controllers/Vehiculos.php");

    // $control = new VehiculosController();
    // $control->index();

    // $control2 = new ConductoresController();
    // $control2->index();

    if (isset($_GET['c'])) {
        $controlador = cargarControlador($_GET['c']);

        if (isset($_GET['a'])) {
                if(isset($_GET['id'])) {
                    cargarAccion($controlador, $_GET['a'], $_GET['id']);
                } else {
                    cargarAccion($controlador, $_GET['a']);
                }
        } else {
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }

    } else {
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        $accionTmp = ACCION_PRINCIPAL;
        $controlador->$accionTmp();
    }

    if (isset($_GET['c'])) {
        $controlador = cargarControlador2($_GET['c']);

        if (isset($_GET['a'])) {
                if(isset($_GET['id'])) {
                    cargarAccion($controlador, $_GET['a'], $_GET['id']);
                } else {
                    cargarAccion($controlador, $_GET['a']);
                }
        } else {
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }

    } else {
        $controlador = cargarControlador(CONTROLADOR_SECUNDARIO);
        $accionTmp = ACCION_PRINCIPAL;
        $controlador->$accionTmp();
    }

?>