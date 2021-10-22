<?php
class Cupboard_Model{
    private $db;
    private $items;
    
    public function __construct(){
        $this->db = Conectar::conexion(); //el :: es para ivocar un metodo estatico sin necesidad de instaciar un objeto de esa clase

    }

    public function get_items_cupboard(){
        $sql = "SELECT c.id_item, i.description, c.quantity, i.um, i.image FROM cupboard c INNER JOIN items i ON c.id_item = i.id ";
        try {
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->items[] = $row;
            }
        } catch (\Throwable $th) {
            echo "Ocurrio un error al consultar la Base de Datos " . $th ;
        }
        
        return $this->items;
    }
 
    public function update_cupboard($id_item, $quantity){
        $sql= ("UPDATE cupboard SET quantity=".$quantity." WHERE id_item=".$id_item);
        $this->db->query($sql);
    }

    public function add_item_cupboard($id_item, $quantity){
        $sql= "INSERT INTO cupboard(id_item, quantity) VALUES (".$id_item.", ".$quantity.")";
        echo $sql;
        $this->db->query($sql);

    }



}
?>