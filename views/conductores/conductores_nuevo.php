<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tituloC']; ?></title>
</head>
<body>

    <h2><?php echo $data['tituloC']; ?></h2>

    <form id="nuevo" name="nuevo" method="post" action="index.php?c=conductores&a=guarda">
        <label for="nombre">Nombre</label><br />
        <input type="text" id="nombre" name="nombre" />
        <br />

        <label for="apellido">Apellido</label><br />
        <input type="text" id="apellido" name="apellido" />
        <br />

        <label for="edad">Edad</label><br />
        <input type="text" id="edad" name="edad" />
        <br />

        <label for="genero">Genero</label><br />
        <input type="text" id="genero" name="genero" />
        <br />

        <label for="DNI">DNI</label><br />
        <input type="text" id="DNI" name="DNI" />
        <br /><br />

        <button id="guardar" name="guardar" type="submit">Guardar</button>
    </form>
    
</body>
</html>