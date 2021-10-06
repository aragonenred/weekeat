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
            <tr><td><img src="img/arroz.jpg" alt="img.jpg"></td><td>Arroz</td><td>1</td><td>UN</td></tr>
            <tr><td><img src="img/tallarin.jpg" alt="img.jpg"></td><td>Fideo Tallarin</td><td>2</td><td>UN</td></tr>
            <tr><td><img src="img/puretomate.jpg" alt="img.jpg"></td><td>Pure de Tomate</td><td>1</td><td>UN</td></tr>
            <tr><td><img src="img/manteca.png" alt="img.jpg"></td><td>Manteca</td><td>1</td><td>UN</td></tr>
            <tr><td><img src="img/itemgenerico.png" alt="img.jpg"></td><td>Matecocido</td><td>1</td><td>UN</td></tr>
        </table>   
    </div>
</main>
    
</body>
</html>