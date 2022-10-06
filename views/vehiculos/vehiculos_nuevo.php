<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['titulo']; ?></title>
</head>
<body>

    <h2><?php echo $data['titulo']; ?></h2>

    <form id="nuevo" name="nuevo" method="post" action="index.php?c=vehiculos&a=guarda">
        <label for="marca">Marca</label><br />
        <input type="text" id="marca" name="marca" />
        <br />

        <label for="modelo">Modelo</label><br />
        <input type="text" id="modelo" name="modelo" />
        <br />

        <label for="anio">Año</label><br />
        <input type="text" id="anio" name="anio" />
        <br />

        <label for="color">Color</label><br />
        <input type="text" id="color" name="color" />
        <br />

        <label for="placa">Placa</label><br />
        <input type="text" id="placa" name="placa" />
        <br /><br />

        <button id="guardar" name="guardar" type="submit">Guardar</button>
    </form>
    
</body>
</html>