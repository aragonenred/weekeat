function Calendar(){
   this.date;
   this.day;  
   this.week;


   this.nextWeek = function(){
        this.week = "Entre al calendario";
        return this.week;
   }

   this.prevWeek = function(){
        
     return week;
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


}

