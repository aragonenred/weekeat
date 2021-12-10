<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-cupboard.php'); ?>

<main class="container relative">
    <div id="content">
        <form action="index.php?c=Cupboard&a=update" method="POST" class="alacena-form">
            <table id="tb-items-alacena" class="tb-items-alacena">
                <tr><th></th><th></th><th>Cantidad</th><th><i class="fas fa-ruler-combined"></i></th></tr>
                <?php foreach($data['cupboard'] as $key=>$item){ ?>
                <tr>
                    <td><input type="text" value="<?php echo $item['id_item'];?>" name="id[]" class="id_item input_hidden" ><img src="img/<?php echo $item['image']; ?>" alt="img.jpg" class="img-items"></td>
                    <td><?php echo $item['description']; ?></td>
                    <td><input type="number" value="<?php echo $item['quantity']; ?>" name="quantity[]"  width="5"> </td>
                    <td><?php echo $item['um']; ?></td>
                    <td><input type="text" name="ItemNew[]" value="0" hidden></td> 
                </tr> 
                <?php  } ?>
            </table>  
            <a href="#" class="btn" id="btn-addItem">Agregar Item</a> 
            <input type="submit" value="Guardar" class="btn btn-done">
        </form>   
    </div>

    <div class="add-float" id="add-float" style="display:none">
        <form class="alacena-form">
            <table id="tb-items-float" class="tb-items-alacena">
                <tr><th></th><th></th><th>Cantidad</th><th><i class="fas fa-ruler-combined"></i></th><th><i class="far fa-plus-square"></i></th></tr>
                <?php foreach($data['items'] as $items){ ?>    
                    <tr>
                        <td><input type="text" value="<?php echo $items['id'];?>" name="id[]" class="id_item input_hidden" ><img src="img/<?php echo $items['image']; ?>" alt="" class="img-items"></td>
                        <td><?php echo $items['description'];  ?></td>
                        <td><input type="text" value="" name="quantity[]" ></td>
                        <td><?php echo $items['um'];  ?></td>
                        <td><input type="checkbox" name=""></td>
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