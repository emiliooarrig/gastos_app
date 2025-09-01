<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agregar.css">
    <title> Ingresar un gasto </title>
</head>
<body>
    
<div class="contenedor">
    <form action="agregar_gasto.php" method="post" class="formulario">
        <div class="pregunta__form">
            <label for="gasto"> Gasto </label>
            <input type="text" class="input__form" name="gasto" required>
        </div>

         <div class="pregunta__form">
            <label for="gasto"> Monto </label>
            <input type="number" class="input__form" name="monto" required>
        </div>

        <button type="submit" class="btn btn-submit"> Ingresar gasto </button>
    </form>
</div>
</body>
</html>