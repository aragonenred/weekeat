
    <form action="index.php?c=items&a=insert_item" class="form-item container" method="POST" id="I_form">
        <div class="campo">
            <img src="img/Itemgenerico.png" alt="foto.jpg"> 
        </div>        
        <div class="campo">
            <input type="text" placeholder="Nombre del Ingrediente" id="I_name" name="I_name">
        </div>
        <div class="campo">
            <label for="um">Unidad de Medida:</label>
            <select  id="I_um" name="I_um">
                <option value="UN">Unidad</option>
                <option value="GR">Gramos</option>
            </select>
        </div>
        <div class="campo">
            <input class="btn btn-done" type="submit" value="Guardar">
        </div>
    </form>
