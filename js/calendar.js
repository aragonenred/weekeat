function Calendar(){
   this.date = new Date();
   this.day = this.date.getDate();  
   this.fisrtDayWeek =  this.day - this.date.getDay() +1 //primer dia lunes


   this.getWeek = function(){
        var week = {
            'Lunes:': this.fisrtDayWeek,
            'Martes:' : this.fisrtDayWeek +1,
            'Miercoles:' : this.fisrtDayWeek +2,
            'Jueves:' : this.fisrtDayWeek +3,
            'Viernes:' : this.fisrtDayWeek +4,
            'Sabado:' : this.fisrtDayWeek +5,
            'Domingo:' : this.fisrtDayWeek +6
        }
        return week;
   }

   this.addDaysToDate = function (date, days){
        var newdate = new Date(date);
        newdate.setDate(newdate.getDate() + days);
        return newdate;
   }



}

