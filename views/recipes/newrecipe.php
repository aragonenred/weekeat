<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-recipes.php'); ?>

<main>
  <div id="content" class="recipe_detail new_recipe container">
    <form action="index.php?c=recipes&a=insert_recipe" method="POST" id="R_form">
        <div class="recipe_detail_header">
            <input style="min-width: 100%" type="text" name="title" id="" placeholder="Nombre de la receta">
        </div>
        <div class="recipe_image">
            <img src="img/recipegenerico.png" alt="" id="recipe_image">
        </div>

        <h4>Pasos de preparación</h4>
        <div class="recipe_detail_steps">      
            <div>
                <Label for="step-1" >Paso 1:</Label>  
                <textarea style="min-width: 100%" name="step[]" cols="30" rows="3" placeholder="1. Pasos para preparación"></textarea>
            </div>
            <div>
                <Label for="step-1" >Paso 2:</Label>  
                <textarea style="min-width: 100%" name="step[]" cols="30" rows="3" placeholder="1. Pasos para preparación"></textarea>
            </div>
        </div>
        <a href="#" class="btn" id="btn-add-step">Agregar Pasos</a> 

        <h4>Ingredientes</h4>
        <div class="recipe_detail_items">  
            <div class="item">
                <select name="" id="" style="width:100%">
                    <option value="1">Ingrediente 1</option>
                    <option value="2">Ingrediente 2</option>
                </select>
                <input type="number" id="cantidad" style="width:5rem">
                <a href="#" class="btn-add" id="btn-add-item"><i class="fas fa-plus-square" ></i></a>
            </div>    
            
            <table id="tb-items-alacena" class="tb-items-alacena">       
                <tr><th></th><th></th><th></th><th></th></tr>    
                    <tr>
                        <td><input type="text" value="1" name="item_id[]" class="id_item input_hidden" ><img src="img/itemgenerico.png" alt="" class="img-items"></td>
                        <td><input class="input-item-blocked w-100" type="text" readonly name="" id="" value ="Manteca"></td>
                        <td><input class="input-item-blocked" type="text" readonly name="item_quantity[]" id="" value="100"> GR</td>
                    </tr>
                    <tr>
                        <td><input type="text" value="2" name="item_id[]" class="id_item input_hidden" ><img src="img/itemgenerico.png" alt="" class="img-items"></td>
                        <td><input class="input-item-blocked w-100" type="text" readonly name="" id="" value ="Carne"></td>
                        <td><input class="input-item-blocked" type="text" readonly name="item_quantity[]" id="" value="500"> GR</td>
                    </tr>
            </table>  
        </div>
        <input type="submit" value="Guardar" class="btn">
    </form>
    
 
</main>


<?php include_once "views/templates/footer.php"; ?>   
</body>
</html>