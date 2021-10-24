<?php
class ItemsController{
    public function index(){
        echo"llegue";
        require_once "models/ItemsModel.php";
        $item = new Items_model();
        $data["titulo"] = "Descripcion";
        $data["items"] = $item->get_items();

        require_once "views/items/items.php";
    }

    public function new(){
        $data["titulo"] = "Description";
        require_once "views/items/newitem.php";

    }

    public function edit(){
        require_once "models/ItemsModel.php";
        $item = new Items_model();
        $data["titulo"] = "Descripcion";
        $data["items"] = $item->get_items();

        require_once("views/items/edititems.php");
    }


    public function insert_item(){
        require_once "models/ItemsModel.php";
        $item = new Items_model();
        $description= $_POST['I_name']; 
        $um = $_POST['I_um']; 
        $upc = "0"; 
        $image ="Itemgenerico.png";
    
        if($description<>'' && $um <>''){
            $item->insert_item($description, $um, $upc, $image);
        }else{
            echo "Hay datos vacios";
        }
       $this->edit();

    }

    public function update_items(){
        require_once("models/ItemsModel.php");
        $item = new Items_model();
        
        for($i=0; $i<count($_POST['id']); $i++) { 
            $id = $_POST['id'][$i];
            $description= $_POST['description'][$i]; 
            $um = $_POST['um'][$i];    
            
            $item->update_item($id, $description,$um);        
        }
        
        $this->index();
    }

    
}
?>