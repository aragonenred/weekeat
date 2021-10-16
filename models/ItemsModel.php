<?php
class Items_model{
    private $db;
    private $items;

    public function __construct(){
        $this->db = Conectar::conexion(); //el :: es para ivocar un metodo estatico sin necesidad de instaciar un objeto de esa clase
        $this->items = array(); 
    }

    public function get_items(){
        $sql = 'SELECT * FROM items';
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

    public function insert_item($description, $um, $upc, $image){
        $sql = "INSERT INTO items (description, um, upc, image) VALUES ('$description', '$um', '$upc','$image')";
        echo $sql;
        $resultado = $this->db->query($sql);
    }



}
?>