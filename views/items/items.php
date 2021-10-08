<?php include_once('views/templates/header.php'); ?>

<main class="container">
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
        <a href="#" class="btn">Agregar a Mi Alacena</a> 
    </form>
</main>

    
</body>
</html>