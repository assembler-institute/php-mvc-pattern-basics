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

    <h2><?php echo $data['tituloC']; ?></h2>

    <a href="">Agregar</a>
    
    <table width="80%" border=5"">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>DNI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data['conductores'] as $dato) {
                    echo "<tr>";
                    echo "<td>".$dato['nombre']."</td>";
                    echo "<td>".$dato['apellido']."</td>";
                    echo "<td>".$dato['edad']."</td>";
                    echo "<td>".$dato['genero']."</td>";
                    echo "<td>".$dato['DNI']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>