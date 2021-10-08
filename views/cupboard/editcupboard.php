<?php include_once('views/templates/header.php'); ?>

<main class="container alacena">
    <div>
        <form action="index.php?c=cupboard&a=update" method="POST" class="alacena-form">
            <table id="tb-items-alacena" class="tb-items-alacena">
                <tr><th>Imagen</th><th>Item</th><th>Cantidad</th><th>Unidad Medida</th></tr>
                <?php foreach($data['cupboard'] as $item){ ?>
                <tr>
                    <td> <input type="text" hidden value="<?php echo $item['id_item'];?>" name="id[]"> <img src="img/<?php echo $item['image']; ?>" alt="img.jpg" class="img-items"></td>
                    <td><?php echo $item['description']; ?></td>
                    <td><input type="text" value="<?php echo $item['quantity']; ?>" name="quantity[]" width="5"> </td>
                    <td><?php echo $item['um']; ?></td>
                </tr> 
                <?php } ?>
            </table>  
            <a href="#" class="btn">Agregar Item</a> 
            <input type="submit" value="Guardar" class="btn btn-done">
        </form>   
    </div>

    <div class="alacena-add-float" style="display:none">
        <form class="alacena-form">
            <table id="tb-items-alacena" class="tb-items-alacena">
                <tr><th>Imagen</th><th>Item</th><th>Cantidad</th><th>Unidad Medida</th></tr>
                <?php foreach($data['items'] as $items){ ?>    
                    <tr>
                        <td><img src="img/<?php echo $items['image']; ?>" alt="" class="img-items"></td>
                        <td><?php echo $items['description'];  ?></td>
                        <td><input type="text"></td>
                        <td><?php echo $items['um'];  ?></td>
                        <td><input type="checkbox"></td>
                    </tr>
                <?php } ?> 
            </table>  
            <a href="#" class="btn">Agregar Item</a> 
        </form>   
    </div>   
</main> 
    
</body>
</html>