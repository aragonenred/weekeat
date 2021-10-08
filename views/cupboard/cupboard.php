<?php include_once('views/templates/header.php'); ?>


<main class="container">
    <div class="alacena">
        <table class="tb-items-alacena" id="tb-items-alacena ">
            <tr><th>Imagen</th><th>Item</th><th>Cantidad</th><th>Unidad Medida</th></tr>
            <?php foreach($data['items'] as $item){ ?>
            <tr>
                <td><img src="img/<?php echo $item['image']; ?>" alt="img.jpg" class="img-items"></td>
                <td><?php echo $item['description']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td><?php echo $item['um']; ?></td>
            </tr> 
            <?php } ?>
           

        </table>   
    </div>
 
       
</main> 
    
</body>
</html>