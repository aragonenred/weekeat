<?php include_once('views/templates/header.php'); ?>
<main>
    <form action="" class="form-item container" method="POST" id="I_form">
        <div class="campo">
            <img src="img/Itemgenerico.png" alt="foto.jpg"> 
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
            <input class="btn btn-done" type="submit" value="Guardar">
        </div>
    </form>

</main>


</body>
</html>