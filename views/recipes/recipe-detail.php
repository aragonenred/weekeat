<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-recipes.php'); ?>

<main class="container relative">
    <div id="content" class="recipe_detail">

        <div class="recipe_detail_header">
            <h2><?php echo $recipe_detail['title'] ?></h2>
            <p><i class="fas fa-pencil-alt"></i></p>
        </div>
        
        <div class="recipe_image">
            <img src="img/<?php echo $recipe_detail['image']; ?>" alt="">
        </div>

        <div class="recipe_detail_steps">
        <?php for($i=0; $i<count($recipe_detail['steps']); $i++){?>
                     <p><?php echo ($recipe_detail['steps'][$i]->step .'. ' . $recipe_detail['steps'][$i]->description) ; ?></p>

        <?php   }?>   
        </div>

        <div class="recipe_detail_items">    
            <table id="tb-items-alacena" class="tb-items-alacena">       
                <tr><th></th><th></th><th></th><th></th><th></th></tr>    
                <?php for($i=0; $i<count($recipe_detail['items']); $i++){?>
                    <tr>
                        <td><img src="img/<?php echo $recipe_detail['items'][$i]['image'] ?>" alt="" class="img-items"></td>
                        <td><?php echo $recipe_detail['items'][$i]['description'] ?></td>
                        <td><?php echo $recipe_detail['items'][$i]['quantity'] .' '. $recipe_detail['items'][$i]['um'] ?></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                <?php    }  ?>
            </table>  

        
            


        </div>
         
        
       



    </div>

        
  
</main>

<?php include_once "views/templates/footer.php"; ?>
</body>
</html>