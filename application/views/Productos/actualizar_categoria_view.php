<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Categoria</title>
</head>
<body>
    <form action="./insertarCategoria" method="post">
        <label for="">Nombre de la Categoria</label>
        <input type="text" name="nombre" id="nombre" placehoder="nombre" value="<?=$categoria->nombre?>">
        <label for="">Status</label>
        <input type="text" name="status" id="status" placehoder="status" value="<?=$categoria->activo?>">
        <button  type="submit">Enviar</button>
    </form>
</body>
</html>