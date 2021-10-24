document.addEventListener('DOMContentLoaded', function(){

    console.log("load ok");

    const addFloat = document.querySelector("#add-float");
    const content = document.querySelector("#content");
    const btn_addItem = document.querySelector("#btn-addItem");
    const btn_addItem_float = document.querySelector("#btn-addItem-float");
    const tb_items = document.querySelector("#tb-items-alacena tbody");
    const tb_items_float = document.querySelector("#tb-items-float tbody");
    const btn_sidebar = document.querySelector("#sidebar-btn");
    const sidebar = document.querySelector("#sidebar");

 
    if(btn_addItem){
        btn_addItem.addEventListener("click", function(e){
            addFloat.style.display = "block";
            content.style.display= "none";
    
        });    
    }
    
    if(btn_addItem_float){
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
                       var itemNew = document.createElement("input");
                       var td = document.createElement("td");
                       itemNew.type = "text";
                       itemNew.setAttribute("name","ItemNew[]");
                       itemNew.setAttribute("value","1");
                       itemNew.setAttribute("hidden","");
                       td.appendChild(itemNew);
                       tr.appendChild(td); 
    
                       tb_items.appendChild(tr);
                    }
                    tb_items_float.children[i].children[4].children[0].checked = false; //Reseteo el checkbox 
                }
            }
            addFloat.style.display = "none";
            content.style.display= "block";
        });    
    }
    
    if(btn_sidebar){
        btn_sidebar.addEventListener('click', function(e){
            e.preventDefault();
            console.log("click");
            sidebar.style.display ="block";


        });
    }


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