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
    const btn_add_item_recipe = document.querySelector("#recipe-btn-add-item");
    const btn_add_step = document.querySelector("#btn-add-step");

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

    if(btn_add_item_recipe){
        btn_add_item_recipe.addEventListener('click', function(e){
            e.preventDefault();

            var list_items = document.querySelector("#list_items");
            var cantidad = document.querySelector("#quantity");

            var item ={
                        'id': list_items.value,
                        'image': list_items.options[list_items.selectedIndex].getAttribute("image"),
                        'description': list_items.options[list_items.selectedIndex].text,
                        'quantity': cantidad.value,
                        'um': list_items.options[list_items.selectedIndex].getAttribute("um")
                    };
            
            if(item.quantity >0){
                var tabla_items = document.querySelector("#tb-items-alacena tbody");
                var tr = document.createElement("tr");
                tr.innerHTML =  '<td><input type="text" value="'+ item.id +'" name="item_id[]" class="id_item input_hidden" ><img src="img/'+ item.image +'" alt="" class="img-items"></td>';
                tr.innerHTML += '<td><input class="input-item-blocked w-100" type="text" readonly name="item_description[]" id="" value ="'+ item.description +'"></td>'
                tr.innerHTML += '<td><input class="input-item-blocked" type="text" readonly name="item_quantity[]" id="" value="'+ item.quantity +'"> '+ item.um +'</td>';
                tabla_items.appendChild(tr);
                cantidad.value = "";
            }else{
                window.alert("Ingresa una cantidad válida");
            }

        });
    }

    if(btn_add_step){
        btn_add_step.addEventListener('click', function(e){
            e.preventDefault();
            var content_recipe = document.querySelector("#recipe_detail_steps");
            var content_div = document.createElement("div");
            content_label = document.createElement("label");
            content_textarea = document.createElement("textarea");

            content_div.innerHTML = '<Label for="step-1" >Paso '+(content_recipe.childElementCount + 1)+':</Label>';
            content_div.innerHTML +='<textarea style="min-width: 100%" name="step[]" cols="30" rows="3" placeholder="1. Pasos para preparación"></textarea>';

            content_recipe.appendChild(content_div);


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