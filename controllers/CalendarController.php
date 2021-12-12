<?php
class CalendarController{
    public function index(){
        
       $fecha_actual = date("d-m-Y",strtotime("29-12-2021"));
      
       $week = $this->getWeek($fecha_actual);

       include_once("views/calendar/calendar.php");
       
    }


    private function daysToDate($date, $days, $operator){
        $newdate = date("d-m-Y", strtotime($date.$operator." ".$days." days"));
              
        return $newdate;
    }



    private function getWeek($date){
        $firstDayWeek = $this->daysToDate(date("d-m-Y",strtotime($date)),date("w",strtotime($date)) -1, "-" );
       
        $week = Array(
                    'Lunes' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 0,"+"),
                    'Martes' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 1,"+"),
                    'Miercoles' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 2,"+"),
                    'Jueves' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 3,"+"),
                    'Viernes' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 4,"+"),
                    'Sabado' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 5,"+"),
                    'Domingo' =>$this->daysToDate(date("d-m-Y",strtotime($firstDayWeek)), 6,"+"));
        return $week;
    }
   
}
?>