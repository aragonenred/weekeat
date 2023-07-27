<?php
class Recipes_model{
    private $db;
    private $recipes;

    public function __construct(){
        $this->db = Conectar::conexion(); //el :: es para ivocar un metodo estatico sin necesidad de instaciar un objeto de esa clase
        $this->items = array(); 
    }

    public function get_recipes(){
        $sql="SELECT a.idrecipe, a.title, a.description, a.image,
                     CASE WHEN MIN(CASE WHEN b.quantity > c.stock THEN '0' ELSE '1' END) = '0' THEN 'FALSE' ELSE 'TRUE' END AS available,
                     SUM(CASE WHEN b.quantity > c.stock THEN 1 else 0 end) as faltante
              FROM recipes a
              LEFT JOIN recipevsitem b ON a.idrecipe = b.idrecipe
              LEFT JOIN items c ON c.iditem = b.iditem
              GROUP BY a.idrecipe, a.title, a.description, a.image";

              
        $resultado = $this->db->query($sql);

        while($row = $resultado->fetch_assoc()){

            $data = Array(
                            'idrecipe'=> $row['idrecipe'],
                            'title' => $row['title'],
                            'description'=> $row['description'],
                            'image' => $row['image'],
                            'available' => $row['available'],
                            'faltante' => $row['faltante']
            );
                        
            $this->recipes[] = $data;      
          
        }
        return $this->recipes;
    }

 
    public function get_recipe($idRecipe){
        $sql="SELECT idrecipe, title, description, image FROM recipes  WHERE idrecipe=".$idRecipe;
        $resultado = $this->db->query($sql);

        $data = $resultado->fetch_assoc(); 
        //Traigo todos los items de esa receta
        foreach($data as $recipe){
            $items = $this->get_item_recipe($data['idrecipe']);  
         }

        $this->recipes['body'] = Array (
                                        'idrecipe'=> $data['idrecipe'],
                                        'title' => $data['title'],
                                        'description'=> $data['description'],
                                        'image' => $data['image'],
                                        'items' => $items
        );

        return $this->recipes;
    }


    private function get_item_recipe($id_recipe){
        $sql = "SELECT recipevsitem.idrecipe, recipevsitem.iditem, recipevsitem.quantity, items.description, items.stock, items.um, items.image 
                FROM recipevsitem 
                LEFT JOIN items ON recipevsitem.iditem = items.iditem WHERE recipevsitem.idrecipe = ".$id_recipe;
        $resultado = $this->db->query($sql);
        $items=null;
        
        while($item = $resultado->fetch_assoc()){              
            $items[] = array(
                        'idrecipe'=> $item['idrecipe'],
                        'iditem' => $item['iditem'],
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