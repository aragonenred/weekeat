<?php
class Recipes_model{
    private $db;
    private $recipes;

    public function __construct(){
        $this->db = Conectar::conexion(); //el :: es para ivocar un metodo estatico sin necesidad de instaciar un objeto de esa clase
        $this->items = array(); 
    }

    public function get_recipes(){
        $sql="SELECT id, title, description, image FROM recipes";
        $resultado = $this->db->query($sql);

        while($row = $resultado->fetch_assoc()){
            //Traigo todos los items de esa receta
            $items = $this->get_item_recipe($row['id']);      
            
            $this->recipes['body'][] = $row;      
            $this->recipes['items'][] = $items; 
        }
        return $this->recipes;
    }

 
    public function get_recipe($id){
        $sql="SELECT id, title, description, image FROM recipes  WHERE id=".$id;
        $resultado = $this->db->query($sql);

        $this->recipes['body'] = $resultado->fetch_assoc(); 

        //Traigo todos los items de esa receta
        foreach($this->recipes as $recipe){
            $items = $this->get_item_recipe($recipe['id']);  
            $this->recipes['items'] = $items; 
        }

        return $this->recipes;
    }


    private function get_item_recipe($id_recipe){
        $sql = "SELECT itemsrecipe.id_recipe, itemsrecipe.id_item, itemsrecipe.quantity, items.description, items.um, items.image FROM itemsrecipe LEFT JOIN items ON itemsrecipe.id_item = items.id WHERE itemsrecipe.id_recipe = ".$id_recipe;
        $resultado = $this->db->query($sql);
        $items=null;
        
        while($item = $resultado->fetch_assoc()){              
            $items[] = array(
                        'id_recipe'=> $item['id_recipe'],
                        'id_item' => $item['id_item'],
                        'quantity' => $item['quantity'],
                        'description' => $item['description'],
                        'um' =>$item['um'],
                        'image' =>$item['image']
                    );
            } 
            
        return $items;
    }

    public function add_recipe($recipeData){
        $sql ="INSERT INTO recipes (title, description, image) VALUES ('".$recipeData['title']."','".$recipeData['description']."', '".$recipeData['image']."')";
        $this->db->query($sql);
        $lastId= $this->db->insert_id;

        for($i=0; $i<count($recipeData['items']); $i++){
            $this->add_item_recipe($lastId, $recipeData['items'][$i]['item_id'],$recipeData['items'][$i]['item_quantity']);
        }
    }

    private function add_item_recipe($recipe_id, $item_id, $quantity){
        $sql ="INSERT INTO itemsrecipe (id_recipe, id_item, quantity) VALUES ('".$recipe_id."','".$item_id."','".$quantity."' )";
        $this->db->query($sql);
    }



}
?>