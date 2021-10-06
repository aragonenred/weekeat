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
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->items[] = $row;
        }
        return $this->items;
    }

    public function insert_item($description, $um, $upc, $image){
        $sql = "INSERT INTO vehiculos (description, um, upc, image) VALUES ('$description', '$um', '$upc','$image')";
        $resultado = $this->db->query($sql);

    }



}
?>