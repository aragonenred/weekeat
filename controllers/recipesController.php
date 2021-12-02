<?php
class RecipesController{
    public function index(){
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

        
        require_once "views/recipes/recipes-list.php";
    }

    public function recipe_detail(){
        require_once('models/RecipesModel.php');
        $recipe = new Recipes_Model();
        $data = $recipe->get_recipe($_GET['id']);
        
        $recipe_detail = array(
                        'id'=> $data['body']['id'],
                        'title' => $data['body']['title'],
                        'steps'=> json_decode($data['body']['description']),
                        'image' => $data['body']['image'],
                        'items' => $data['items']
            );

        include_once('views/recipes/recipe-detail.php');
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

    }

}
?>