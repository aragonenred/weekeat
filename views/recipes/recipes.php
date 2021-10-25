<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-recipes.php'); ?>

<main class="container">  
    
    <?php 
        foreach ($recipes as $key => $row) {?>   
        <div class="recipe">
            <img src="img/<?php echo $row['image'];?>" alt="imagen.jpg">
            <div class="recipe-content">
                <a href=""><p class="recipe-title"><?php echo $row['title'];?></p></a>

                <?php $items = json_decode($row['items']); 
                    foreach ($items as $item){
                        echo($item->id);
                    }
                ?>
                <p class="recipe-item">Manteca: 300 GR</p>
                <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
                <p class="recipe-item" >Lorem, ipsum dolor.</p>
                <p class="recipe-item" >Lorem, ipsum.</p>
                <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
                <p class="recipe-item" >Lorem, ipsum dolor.</p>
                <p class="recipe-item" >Lorem, ipsum.</p>
                <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
                <p class="recipe-item" >Lorem, ipsum dolor.</p>
                <p class="recipe-item" >Lorem, ipsum.</p>
            </div>
        </div>
        
      <?php  }  ?>

    <div class="recipe">
        <img src="img/recipegenerico.png" alt="imagen.jpg">
        <div class="recipe-content">
            <a href=""><p class="recipe-title">Lorem ipsum dolor sit amet consectetur.</p></a>
            <p class="recipe-item">Manteca: 300 GR</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
        </div>
    </div>
    <div class="recipe">
        <img src="img/recipegenerico.png" alt="imagen.jpg">
        <div class="recipe-content">
            <p class="recipe-title">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="recipe-item">Manteca: 300 GR</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
        </div>
    </div>
    <div class="recipe">
        <img src="img/recipegenerico.png" alt="imagen.jpg">
        <div class="recipe-content">
            <p class="recipe-title">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="recipe-item">Manteca: 300 GR</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
        </div>
    </div>
    <div class="recipe">
        <img src="img/recipegenerico.png" alt="imagen.jpg">
        <div class="recipe-content">
            <p class="recipe-title">Lorem ipsum dolor sit amet consectetur.</p>
            <p class="recipe-item">Manteca: 300 GR</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
            <p class="recipe-item" >Fideos Tallarin: 0.5 UN</p>
            <p class="recipe-item" >Lorem, ipsum dolor.</p>
            <p class="recipe-item" >Lorem, ipsum.</p>
        </div>
    </div>



</main>

<?php include_once "views/templates/footer.php"; ?>
</body>
</html>