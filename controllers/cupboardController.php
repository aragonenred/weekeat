<?php
class CupboardController{
    public function index(){
        require_once "models/CupboardModel.php";
        $cupboard = new Cupboard_Model();
        $data["titulo"] = "Alacena";
        $data["items"] = $cupboard->get_items_cupboard();

        require_once "views/cupboard.php";
    }

}
?>