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

    <a href="index.php?c=vehiculos&a=nuevo">Agregar</a>

    <table width="80%" border="5">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Placa</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data['vehiculos'] as $dato) {
                    echo "<tr>";
                    echo "<td>".$dato['marca']."</td>";
                    echo "<td>".$dato['modelo']."</td>";
                    echo "<td>".$dato['anio']."</td>";
                    echo "<td>".$dato['color']."</td>";
                    echo "<td>".$dato['placa']."</td>";
                    echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato['id']."'>Modificar</a></td>";
                    echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato['id']."'>Eliminar</a></td>";
                    echo "</tr>"; 
                }
            ?>
        </tbody>
    </table>

    <a href="index.php?">Atras</a>
    
</body>
</html>