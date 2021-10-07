<?php include_once('views/templates/header.php'); ?>
<nav class="nav-header">
        <ul class= "container">
            <li><a href="#">Mi Alacena</a></li>
            <li><a href="#">Administrar Alacena</a></li>
            <li><a href="#">Lista de Compras</a></li>
        </ul>
</nav>

<main class="container">
    <div class="alacena">
        <table id="tb-items-alacena">
            <tr><th>Imagen</th><th>Item</th><th>Cantidad</th><th>Unidad Medida</th></tr>
            <?php foreach($data['items'] as $item){ ?>
            <tr>
                <td><img src="img/<?php echo $item['image']; ?>" alt="img.jpg"></td>
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