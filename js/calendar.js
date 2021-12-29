//CALENDARIO
document.addEventListener('DOMContentLoaded', function(){

    const btn_nextWeek = document.querySelector("#calendar_week_next");
    const btn_prevWeek = document.querySelector("#calendar_week_prev");
    var calendar = new Calendar();
    const listaCal = calendar.loadCalendar();
    const dateToday = new Date();
    var actualweek = new Date();

    loadWeek(dateToday);

    btn_nextWeek.addEventListener("click", function(e){
        e.preventDefault()
        calendar = new Calendar();
        actualweek = calendar.nextWeek(actualweek);
        loadWeek(actualweek);       
    });
    btn_prevWeek.addEventListener("click", function(e){
        e.preventDefault()
        calendar = new Calendar();
        actualweek = calendar.prevWeek(actualweek);
        loadWeek(actualweek);        
    });

    
    function loadWeek(date){
        //var date = new Date();  
        var primerDiaSemana = calendar.getFirstDayWeek(date);
        var ultimoDiaSemana = calendar.getLastDatWeek(date);
        
        var week = Array();

        for(i=0; i<listaCal.length; i++){
            let fechaCal = new Date(listaCal[i].year + '-' + listaCal[i].month + '-' + listaCal[i].day + ' 00:00');   
            if(fechaCal >= primerDiaSemana && fechaCal < ultimoDiaSemana){
                week.push(listaCal[i]);
            }     
        }    
        drawWeek(week, primerDiaSemana);
    }

    function drawWeek(week, firstDay){
    let calendar_week = document.querySelector('#calendar_week');
    calendar_week.innerHTML ='';
    
    for(let i2=0; i2<7; i2++){//Recorro los siete dias de la seman para dibujarlos uso "i2" porque son for anidados
            let largo = week.length;
            var dayPrint = {lunch: false, dinner: false } //Bandera para saber si lo imprimi o no con el recorido de week
            
            for(let i=0; i<largo; i++){ //Recorro el objeto week
                
                if(week[0].day === String(firstDay.getDate())){ //Si conincide con el día de la semana lo imprimo
                    let calendar_day = document.createElement('div');
                    calendar_day.classList.add('calendar_day');
                    calendar_day.innerHTML = `<div class="calendar_day_head">
                                                <h4 > ${week[0].day} de ${week[0].month} </h4> 
                                            </div>
                                            <div class="calendar_day_body">      
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-sun"></i></td>
                                                            <td id_recipe="${week[0].lunch_id}">${week[0].lunch !==null ?(dayPrint.lunch =true, week[0].lunch ):''}</td>
                                                            <td><i class="fas fa-pencil-alt"></td>                       
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-moon" ></i></td>
                                                            <td id_recipe="${week[0].dinner_id}">${week[0].dinner !==null ?(dayPrint.dinner=true, week[0].dinner):''}</td>
                                                            <td><i class="fas fa-pencil-alt"></td>                       
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> `;
                    calendar_week.appendChild(calendar_day);       
                    week.splice(0,1);     
                }    
            }
            if(!dayPrint.lunch && !dayPrint.dinner ){ //Si no lo imprimio ya impimo uno por defecto
                let calendar_day = document.createElement('div');
                    calendar_day.classList.add('calendar_day');
                    calendar_day.innerHTML = `<div class="calendar_day_head">
                                                <h4 >${firstDay.getDate() +' de '+ (firstDay.getMonth()+1)}  </h4> 
                                            </div>
                                            <div class="calendar_day_body">      
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-sun"></i></td>
                                                            <td> </td>
                                                            <td><i class="fas fa-pencil-alt"></td>                       
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-moon" ></i></td>
                                                            <td> </td>
                                                            <td><i class="fas fa-pencil-alt"></td>                       
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> `;
                    calendar_week.appendChild(calendar_day);
            }
            
            firstDay.setDate(firstDay.getDate()+1);
        }
    }
});