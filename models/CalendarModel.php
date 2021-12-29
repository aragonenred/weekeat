<?php     
class Calendar_Model{
    private $calendar;
        
    public function __construct(){
        $this->db = Conectar::conexion(); //el :: es para ivocar un metodo estatico sin necesidad de instaciar un objeto de esa clase

    }


    public function getRecipes(){
        $sql="SELECT c.day, c.month, c.year, c.lunch_id,rl.title as lunch, c.dinner_id,  rd.title as dinner
              FROM calendar c
              LEFT JOIN recipes rl on c.lunch_id = rl.id
              LEFT JOIN recipes rd on c.dinner_id = rd.id
              ORDER BY year, month, day";
        try {
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->calendar[] = $row;
            }
        } catch (\Throwable $th) {
            echo "Ocurrio un error al consultar la Base de Datos " . $th ;
        }

        return $this->calendar;
    }

}




?>