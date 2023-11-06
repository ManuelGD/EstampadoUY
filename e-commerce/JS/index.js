let carrito = [];
document.addEventListener("load", function () {
  carrito = [];
  if (localStorage.getItem("idP").charAt(0) == ",") {
    let str = localStorage.getItem("idP").slice(1);
    localStorage.setItem("idP", str);
  }

  carrito = localStorage.getItem("idP").split(",");
});

const divBtnPaginas = document.getElementById("btn-paginas");
const divContenido = document.getElementById("prods");
const divContenidoProm = document.getElementById("prods_prom");
const divCarro = document.getElementById("divcarro");
const btn_buscar = document.getElementById("lupa");
const txt_buscar = document.getElementById("busqueda");

if (localStorage.getItem("idP")) {
  carrito = localStorage.getItem("idP").split(",");
}

//Cargar Productos Promocionados
fetch("../Backoffice/API/productos_promo.php")
  .then((response) => response.json())
  .then((data) => {
    const divContenido = document.getElementById("prods_prom");
    var contenido = '<div class="tarjetas_productos"> ';
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
                            <button id="${data[i].idProducto}-${data[i].precio_promocion}" class="añadir_al_carro">Agregar al Carrito</button>
                            <a href="prod.html?id=${data[i].idProducto}-${data[i].precio_promocion}"  class="vermas">Ver mas</a>
                        </div>
                    </div>
  
        `;
    }
    contenido += ` </div> `;
    divContenido.innerHTML = contenido;
  })
  .catch((error) => {
    console.error("Error: ", error);
  });

//Funcion que genera botones para el paginado
// function cargarBotones(){
function cargarBotones() {
  fetch("../Backoffice/API/cantidad_productos.php")
    .then((response) => response.json())
    .then((data) => {
      let contenido = "";
      const ppp = 8;

      paginas = data[0] / ppp;
      if (data[0] % ppp !== 0) {
        paginas++;
      }

      for (let i = 1; i < paginas; i++) {
        contenido += `
                 <button>${i}</button>
                 `;
      }

      divBtnPaginas.innerHTML = contenido;
    })
    .catch((error) => {
      console.error("Error: ", error);
    });
}

//Cargar pagina
function cargarPagina(numPagina) {
  fetch(`../Backoffice/API/productos_pagina.php?p=${numPagina}`)
    .then((response) => response.json())
    .then((data) => {
      let contenido = '<div class="tarjetas_productos"> ';
      for (let i = 0; i < data.length; i++) {
        contenido += `
                 
                        <div class="tarjeta">
                            <div class="fyp">
                                <img src="../Backoffice/imagenes/${data[i].imagen_producto}" width="250px">
                            </div>
                            <h3>${data[i].nombre_producto}</h3>
                            <div class="precios">
                                <p>$${data[i].precio_producto}</p>
                            </div>
                            <div class="boton-contenedor">
                                <button id="${data[i].idProducto}-${data[i].precio_producto}" class="añadir_al_carro">Agregar al Carrito</button>
                                <a href="prod.html?id=${data[i].idProducto}" id="${data[i].idProducto}" class="vermas">Ver mas</a>
                            </div>
                        </div>
      
            `;
      }
      contenido += ` </div> `;
      divContenido.innerHTML = contenido;
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

//Click en algun boton del paginado
divBtnPaginas.addEventListener("click", function (event) {
  if (event.target.tagName === "BUTTON") {
    cargarPagina(event.target.textContent);
  }
});
cargarPagina(1);
cargarBotones();

//Click en agregar al carrito (no promocionados)
divContenido.addEventListener("click", function (event) {

  if (event.target.className === "añadir_al_carro") {
    if (carrito.length > 0) {
      //("1-200,4-679,7-90");
      if (carrito.includes(event.target.id) == false) {
        let item = event.target.id;
        //precio aca

        carrito.push(event.target.id);
        //localStorage.setItem("idP","");
        localStorage.setItem("idP", carrito);
      }
    } else {
      carrito = [];
      carrito.push(event.target.id);
      localStorage.setItem("idP", carrito);
    }
  }
});

//Click en agregar al carrito (promocionados)
divContenidoProm.addEventListener("click", function (event) {

  if (event.target.className === "añadir_al_carro") {
    if (carrito.length > 0) {
      if (carrito.includes(event.target.id) == false) {
        let item = event.target.id;
        //precio aca

        carrito.push(event.target.id);
        //localStorage.setItem("idP","");
        localStorage.setItem("idP", carrito);
      }
    } else {
      carrito = [];
      carrito.push(event.target.id);
      localStorage.setItem("idP", carrito);
    }
  }
});

//busqueda
btn_buscar.addEventListener("click", function (event) {
    fetch(`../../Backoffice/API/buscar_prod.php?prod=${txt_buscar.value}`)
    .then((response) => response.json())
    .then((data) => {
      let contenid = '<div class="tarjetas_productos"> ';
      for (let i = 0; i < data.length; i++) {
        contenid += `
                 
                        <div class="tarjeta">
                            <div class="fyp">
                                <img src="../Backoffice/imagenes/${data[i].imagen_producto}" width="250px">
                            </div>
                            <h3>${data[i].nombre_producto}</h3>
                            <div class="precios">
                                <p>$${data[i].precio_producto}</p>
                            </div>
                            <div class="boton-contenedor">
                                <button id="${data[i].idProducto}-${data[i].precio_producto}" class="añadir_al_carro">Agregar al Carrito</button>
                                <button id="${data[i].idProducto}" class="vermas">Ver mas</button>
                                <button id="${data[i].idProducto}" class="vermas">Ver mas</button>
                                <button id="${data[i].idProducto}" class="vermas">Ver mas</button>

                            </div>
                        </div>
      
            `;
      }
      contenid += ` </div> `;
      divContenido.innerHTML = contenid;
    })
    .catch((error) => {
      console.error("Error:", error);
    });

});

