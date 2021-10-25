<?php
class RecipesController{
    public function index(){
        require_once "models/RecipesModel.php";
        $recipe = new Recipes_Model();
        $data = $recipe->get_recipes();

        for($i=0; $i<count($data); $i++){
            $recipes[] = array(
                                'id'=> $data[$i]['id'],
                                'title' => $data[$i]['title'],
                                'description'=> $data[$i]['description'],
                                'image' => $data[$i]['image'],
                                'items'=> $data[$i]['items']
            );
        }

        
        require_once "views/recipes/recipes.php";
    }


}
?>