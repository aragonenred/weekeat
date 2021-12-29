function Calendar(){
    this.date;
    this.day;  
    this.week;

    this.nextWeek = function(date){
      date = this.getLastDatWeek(date);
      return date;
    }

    this.prevWeek = function(date){
      date = this.getFirstDayWeek(date);
      date.setDate(date.getDate() - 7);

      return date;
    }

    this.loadCalendar=function(){
      var cal;
      const xhr = new XMLHttpRequest;
      xhr.open('GET', 'http://localhost/weekeat/index.php?c=Calendar&a=getCalendar',false);
      xhr.onload = function(e){
         if(xhr.status === 200){
             cal = JSON.parse(xhr.responseText);        

             
         }
     }
      xhr.send(null); 
      return cal;
    }


    this.getFirstDayWeek = function(fecha /**aaaa-mm-dd**/){       
      var date = new Date(fecha.getFullYear() + '-' + (fecha.getMonth()+1) + '-' + fecha.getDate() +' 00:00'); 
      date.setDate(date.getDate() - date.getDay());
    
      return(date);
    }

    this.getLastDatWeek = function(fecha){    
      var date = new Date(fecha.getFullYear() + '-' + (fecha.getMonth()+1) + '-' + fecha.getDate() +' 00:00'); 
      date.setDate((date.getDate() - date.getDay()) + 7);
          
      return(date);
    }



}

