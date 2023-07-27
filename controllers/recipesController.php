<?php
header('Access-Control-Allow-Origin:*');
class RecipesController{
    
   
    public function recipeList(){
        require_once "models/RecipesModel.php";
        
    
        $recipe = new Recipes_Model();
        $recipesList = $recipe->get_recipes();
        /*
        for($i=0; $i<count($data['body']); $i++){
            

            
            
            $recipes[] = array(
                                'idrecipe'=> $data['body'][$i]['idrecipe'],
                                'title' => $data['body'][$i]['title'],
                                'description'=> $data['body'][$i]['description'],
                                'image' => $data['body'][$i]['image'],
                                'items' => $data['body'][$i]['items']
                              
            );
        }*/



        $json = json_encode($recipesList);
        echo $json;   
    }

    public function recipeDetail(){
        require_once('models/RecipesModel.php');
        $recipe = new Recipes_Model();
        $data = $recipe->get_recipe($_GET['idRecipe']);
        
        $recipe_detail = array(
                        'id'=> $data['body']['idrecipe'],
                        'title' => $data['body']['title'],
                        'description'=> $data['body']['description'],
                        'image' => $data['body']['image'],
                        'items' => $data['body']['items']
            );
        $json = json_encode($recipe_detail);
        echo $json;
    }


    public function edit(){
        require_once "models/RecipesModel.php";
        $recipe = new Recipes_Model();
        $data = $recipe->get_recipes();
     
        for($i=0; $i<count($data['body']); $i++){
            $recipes[] = array(
                                'id'=> $data['body'][$i]['id'],
                                'title' => $data['body'][$i]['title'],
                                'description'=> $data['body'][$i]['description'],
                                'image' => $data['body'][$i]['image'],
                                'items' => $data['items'][$i]
            );
        }
        include_once('views/recipes/editrecipe.php');
    }

 

    public function newRecipe(){
        require_once "models/ItemsModel.php";
        $items = new Items_Model();
        
        $data['items']= $items->get_items();


        include_once('views/recipes/newrecipe.php');
    }

    public function insert_recipe(){
        require_once "models/RecipesModel.php";
        $recipe = new Recipes_Model();

        for($i=0; $i<count($_POST['step']); $i++){
            $steps[] = array(
                'step' => $i + 1,
                'description' => $_POST['step'][$i]
          );
        }

        for($i=0;$i<count($_POST['item_id']); $i++){
            $items[] = array(
                 'item_id' =>$_POST['item_id'][$i],
                 'item_quantity' =>$_POST['item_quantity'][$i]
                );
        }


        $recipe_data = array(
                'title' => $_POST['title'],
                'description' => json_encode($steps),
                'image' => 'recipegenerico.png',
                'items' => $items
        );
        
       $recipe->add_recipe($recipe_data);

       require_once "views/recipes/recipes-list.php";
    }

}
?>