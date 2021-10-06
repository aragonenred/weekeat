<?php
class ItemsController{
    public function index(){
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
}
?>