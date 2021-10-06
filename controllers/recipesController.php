<?php
class RecipesController{
    public function index(){
        require_once "models/RecipesModel.php";
        $item = new Recipes_Model();
        $data["titulo"] = "Descripcion";

        require_once "views/recipes/recipes.php";
    }


}
?>