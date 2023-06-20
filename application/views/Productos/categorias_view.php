<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h2>Categorias</h2>
    <table>
        <thead>
            <th>No.</th>
            <th>Nombre</th>
            <th>Status</th>
        </thead>
        <tbody>
            <?php 
                if($categorias != false){
                    $contador = 0;
                    foreach ($categorias->result() as $key => $categoria) {
                        ?>
    
                        <tr>
                            <td><?= ++$contador ?></td>
                            <td><?= $categoria->nombre ?></td>
                            <td><?= $categoria->activo ?></td>
                        </tr>
                        
                        <?php
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>