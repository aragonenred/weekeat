<?php
class CupboardController{
    public function index(){
        require_once "models/CupboardModel.php";
        $cupboard = new Cupboard_Model();
        $data["titulo"] = "Alacena";
        $data["items"] = $cupboard->get_items_cupboard();
        
        require_once "views/cupboard/cupboard.php";
    }

    public function edit(){
        require_once "models/CupboardModel.php";
        require_once "models/ItemsModel.php";
        
        $cupboard = new Cupboard_Model();
        $items = new Items_model();

        $data['cupboard'] = $cupboard->get_items_cupboard();
        $data['items'] = $items->get_items();
        require_once "views/cupboard/editcupboard.php";
    }

    public function update(){
        require_once "models/CupboardModel.php";
        $cupboard = new Cupboard_Model();

        for($i=0; $i <count($_POST['id']); $i++){  
            //Valido si es nuevo o sol otengo que actualizar la cantidad
           if($_POST['ItemNew'][$i]==="0"){ 
               //Valido si la cantidad es = 0 lo elimino. Caso contrario lo actualizo
               if((float)$_POST['quantity'][$i]<=0){
                    $cupboard->delete_item_cupboard($_POST['id'][$i]);
               }else{
                    $cupboard->update_cupboard($_POST['id'][$i], $_POST['quantity'][$i]); 
               }

            }else if($_POST['ItemNew'][$i]==="1"){//Si es nuevo...
                $cupboard->add_item_cupboard($_POST['id'][$i], $_POST['quantity'][$i]);    
            } 
        }
        
        $this->index();
    }

}
?>