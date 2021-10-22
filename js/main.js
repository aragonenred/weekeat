document.addEventListener('DOMContentLoaded', function(){

    const alacenaFloat = document.querySelector("#alacena-add-float");
    const alacenaContent = document.querySelector("#alacena-content");
    const btn_addItem = document.querySelector("#btn-addItem");
    const btn_addItem_float = document.querySelector("#btn-addItem-float");
    const tb_items = document.querySelector("#tb-items-alacena tbody");
    const tb_items_float = document.querySelector("#tb-items-float tbody");

 

    btn_addItem.addEventListener("click", function(e){
        alacenaFloat.style.display = "block";
        alacenaContent.style.display= "none";


    });
    btn_addItem_float.addEventListener("click", function(e){
        e.preventDefault();
        for(var i=1; i<tb_items_float.childElementCount; i++){
            var cantidad = tb_items_float.children[i].children[2].children[0].value;
            var checked = tb_items_float.children[i].children[4].children[0].checked;
            var idItem = tb_items_float.children[i].children[0].children[0].value;

            console.log(cantidad);
            
            if(checked && cantidad >0){     
                if(!comprobarItem(idItem)){
                   var tr = document.createElement("tr");                 
                   tr.innerHTML = tb_items_float.children[i].innerHTML;
                   tr.children[2].children[0].setAttribute('value', cantidad); //Le cargo la cantidad
                   tr.children[4].remove(); //borro el checkbox
                   
                   //Creo un input que voy a usar para indicar cuando un item es nuevo:
                   var add = document.createElement("input");
                   var td = document.createElement("td");
                   add.type = "text";
                   add.setAttribute("name","ItemNew[]");
                   add.setAttribute("value","1");
                   td.appendChild(add);
                   tr.appendChild(td); 

                   tb_items.appendChild(tr);
                }
                tb_items_float.children[i].children[4].children[0].checked = false; //Reseteo el checkbox 
            }
        }
        alacenaFloat.style.display = "none";
        alacenaContent.style.display= "block";
    });

    function comprobarItem(id){
        var resultado = false;
        for(var i=1; i<tb_items.childElementCount; i++){
            if(tb_items.children[i].children[0].children[0].value === id){
                console.log("Ya existe este elemento: " + id);
                resultado = true;
            }
        }
        return resultado;
    }




});