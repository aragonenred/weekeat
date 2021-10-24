<?php include_once('../includes/header.php'); ?>

<main>
    <form action="" method="POST" id="">
        <input type="text" id="R_name" placeholder="Nombre de la receta">
        <textarea name="" id="" cols="30" rows="10" placeholder="Descripcion de la receta"></textarea>
        
        <div class="R_items">
            <legend>Ingredientes:</legend>
            <div>
                <select name="items" id="">
                    <option value="">Arroz</option>
                    <option value="">Pure</option>
                </select>
                <input type="number" placeholder="Cantidad">

                <select name="um" id="I_um">
                    <option value="UN">Unidad</option>
                    <option value="GR">Gramos</option>
                </select>
                <button>+</button>
            </div>
            <button>Agregar</button>
        </div>
      

    </form>
</main>


<?php include_once "views/templates/footer.php"; ?>   
</body>
</html>