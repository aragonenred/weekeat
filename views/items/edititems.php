<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-items.php'); ?>

<main class="container relative">
    <div id="content">
        <form class="items-form" action="index.php?c=items&a=update_items" method="POST">
            <table id="tb-items" class="tb-items">
                
                <tr><th>Imagen</th><th>Item</th><th>Unidad Medida</th></tr>
                <?php foreach($data['items'] as $items){ ?>    
                    <tr>
                        <td><input type="text" value="<?php echo $items['id'];?>" name="id[]" class="id_item input_hidden" ><img src="img/<?php echo $items['image']; ?>" alt="" class="img-items"></td>
                        <td><input type="text" value="<?php echo $items['description'];  ?>" name="description[]"></td>
                        <td><select name="um[]" id="">
                                <option selected value="<?php echo $items['um'];  ?>"><?php echo $items['um'];  ?></option>
                                <option value="UN">UN</option>
                                <option value="GR">GR</option> 
                            </select>
                        </td>
                    </tr>
                <?php } ?> 
            </table>  
            <a href="#" class="btn" id="btn-addItem">Nuevo Ingrediente</a>
            <input type="submit" value="Guardar" class="btn btn-done"> 
        </form>
    </div>
    
    <div class="add-float" id="add-float" style="display:none">
       <?php include_once("views/items/newitem.php"); ?>  
    </div>   
  
</main>

<?php include_once "views/templates/footer.php"; ?>
</body>
</html>