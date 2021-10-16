<?php include_once('views/templates/header.php'); ?>

<main class="container alacena">
    <div id="alacena-content">
        <form action="index.php?c=cupboard&a=update" method="POST" class="alacena-form">
            <table id="tb-items-alacena" class="tb-items-alacena">
                <tr><th>Imagen</th><th>Item</th><th>Cantidad</th><th>Unidad Medida</th></tr>
                <?php foreach($data['cupboard'] as $item){ ?>
                <tr>
                    <td><input type="text" value="<?php echo $item['id_item'];?>" name="id[]" class="id_item input_hidden" ><img src="img/<?php echo $item['image']; ?>" alt="img.jpg" class="img-items"></td>
                    <td><?php echo $item['description']; ?></td>
                    <td><input type="text" value="<?php echo $item['quantity']; ?>" name="quantity[]" width="5"> </td>
                    <td><?php echo $item['um']; ?></td>
                </tr> 
                <?php } ?>
            </table>  
            <a href="#" class="btn" id="btn-addItem">Agregar Item</a> 
            <input type="submit" value="Guardar" class="btn btn-done">
        </form>   
    </div>

    <div class="alacena-add-float" id="alacena-add-float" style="display:none">
        <form class="alacena-form">
            <table id="tb-items-float" class="tb-items-alacena">
                <tr><th>Imagen</th><th>Item</th><th>Cantidad</th><th>Unidad Medida</th></tr>
                <?php foreach($data['items'] as $items){ ?>    
                    <tr>
                        <td><input type="text" value="<?php echo $items['id'];?>" name="id[]" class="id_item input_hidden" ><img src="img/<?php echo $items['image']; ?>" alt="" class="img-items"></td>
                        <td><?php echo $items['description'];  ?></td>
                        <td><input type="text"></td>
                        <td><?php echo $items['um'];  ?></td>
                        <td><input type="checkbox"></td>
                    </tr>
                <?php } ?> 
            </table>  
            <a href="#" class="btn" id="btn-addItem-float">Agregar Item</a> 
        </form>   
    </div>   
</main> 

<?php include_once "views/templates/footer.php"; ?>
</body>
</html>