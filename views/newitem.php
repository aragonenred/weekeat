<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>

<main>
    <form action="" class="form-item container">
        <div class="campo">
            <img src="../img/Itemgenerico.png" alt="foto.jpg"> 
        </div>        
        <div class="campo">
            <input type="text" placeholder="Nombre del Ingrediente" id="I_name">
        </div>
        <div class="campo">
            <label for="um">Unidad de Medida:</label>
            <select name="um" id="I_um">
                <option value="UN">Unidad</option>
                <option value="GR">Gramos</option>
            </select>
        </div>
        <div class="campo">
            <input class="btn-done" type="submit" value="Guardar">
        </div>
    </form>

</main>


</body>
</html>