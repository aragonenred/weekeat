<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-recipes.php'); ?>

<main class="container">  
    
    <?php 
        foreach ($recipes as $key => $row) {?>      
        <div class="recipe">
            <img src="img/<?php echo $row['image'];?>" alt="imagen.jpg">
            <div class="recipe-content">
                <a href="index.php?c=recipes&a=recipe_detail&id=<?php echo $row['id'];?>"><p class="recipe-title"><?php echo $row['title'];?></p></a>
                <?php foreach($row['items'] as $item){ ?>
                        <p class="recipe-item" ><?php echo $item['description'];?>:  <?php echo $item['quantity']; echo ' '.$item['um'];  ?></p>         
                <?php } ?>
            </div>
        </div>
        <div class="separator"><i class="fas fa-dot-circle"></i><i class="fas fa-dot-circle"></i><i class="fas fa-dot-circle"></i></div>
        
      <?php  }  ?>

    



</main>

<?php include_once "views/templates/footer.php"; ?>
</body>
</html>