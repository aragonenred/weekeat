<?php
class Recipes_model{
    private $db;
    private $recipes;

    public function __construct(){
        $this->db = Conectar::conexion(); //el :: es para ivocar un metodo estatico sin necesidad de instaciar un objeto de esa clase
        $this->items = array(); 
    }

    public function get_recipes(){
        $sql="SELECT * FROM recipes";
        $resultado = $this->db->query($sql);

        while($row = $resultado->fetch_assoc()){
            $this->recipes[] = $row;
        }

        return $this->recipes;
    }

    public function insert_recipe(){
        
    }



}
?>