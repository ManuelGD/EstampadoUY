const divBtnPaginas = document.getElementById("btn-paginas");
const divContenido = document.getElementById("prods");

//Cargar Productos Promocionados
fetch("../Backoffice/API/productos_promo.php")
    .then(response => response.json())
    .then(data => {
        const divContenido = document.getElementById("prods_prom")
        var contenido = '<div class="tarjetas_productos"> '
        for (let i = 0; i < data.length; i++) {
            contenido += `
             
                    <div class="tarjeta">
                        <div class="fyp">
                            <div class="promocion">Promoción</div>
                            <img src="../Backoffice/imagenes/${data[i].imagen_producto}">
                        </div>
                        <h3>${data[i].nombre_producto}</h3>
                        <div class="precios">
                            <p class="precio_antiguo">$${data[i].precio_producto}</p>
                            <p>$${data[i].precio_promocion}</p>
                        </div>
                        <div class="boton-contenedor">
                            <button class="añadir_al_carro">Agregar al Carrito</button>
                            <button class="vermas">Ver mas</button>
                        </div>
                    </div>
  
        `
        
        }
        contenido += ` </div> `
        divContenido.innerHTML = contenido
    })
    .catch(error => {
        console.error("Error: ", error)
    });

//Funcion que genera botones para el paginado
// function cargarBotones(){
divBtnPaginas.innerHTML = `<button>1</button>`

 fetch("../Backoffice/API/cantidad_productos.php")
     .then(response => response.json())
     .then(data => {
         let contenido = '';
         const ppp = 8;

         paginas = data[0] / ppp;
         if(data[0] % ppp !== 0){
             paginas++;
         }
         
         for(let i = 1; i < paginas; i++){
             contenido += `
                 <button>${i}</button>
                 `
         }

         divBtnPaginas.innerHTML = contenido;
     })
     .catch(error => {
         console.error("Error: ",error);
     });
    
//}

//Cargar pagina
function cargarPagina(numPagina){
    fetch(`../Backoffice/API/productos_pagina.php?p=${numPagina}`)
        .then(response => response.json())
        .then(data => {
            let contenido = '<div class="tarjetas_productos"> '
            for (let i = 0; i < data.length; i++) {
                contenido += `
                 
                        <div class="tarjeta">
                            <div class="fyp">
                                <img src="../Backoffice/imagenes/${data[i].imagen_producto}">
                            </div>
                            <h3>${data[i].nombre_producto}</h3>
                            <div class="precios">
                                <p>$${data[i].precio_producto}</p>
                            </div>
                            <div class="boton-contenedor">
                                <button class="añadir_al_carro">Agregar al Carrito</button>
                                <button class="vermas">Ver mas</button>
                            </div>
                        </div>
      
            `
            
            }
            contenido += ` </div> `
            divContenido.innerHTML = contenido
        })
        .catch(error => {
            console.error("Error:", error);
        });
    }    

 
//Click en algun boton del paginado
divBtnPaginas.addEventListener("click", function(event) {
    if(event.target.tagName === "BUTTON"){
        cargarPagina(event.target.textContent)
        console.log(event.target.textContent)
    }
});

cargarPagina(1);
cargarBotones();
