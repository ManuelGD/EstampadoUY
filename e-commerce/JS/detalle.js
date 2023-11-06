const url = new URLSearchParams(window.location.search);
const param = url.get("id").split("-");
let idd = param[0];

let carrito = [];
document.addEventListener("load", function () {
  carrito = [];
  if (localStorage.getItem("idP").charAt(0) == ",") {
    let str = localStorage.getItem("idP").slice(1);
    localStorage.setItem("idP", str);
  }

  carrito = localStorage.getItem("idP").split(",");
});

const divContenido = document.getElementById("detalles_producto");
const divContenidoNoProm = document.getElementById("detalles_producto");
const divContenidoProm = document.getElementById("detalles_producto");

if (localStorage.getItem("idP")) {
  carrito = localStorage.getItem("idP").split(",");
}

fetch(`../Backoffice/API/detalles_prod.php?id=${idd}`)
  .then((response) => response.json())
  .then((data) => {
    let contenido = '<div class="detalles_producto"> ';
    for (let i = 0; i < data.length; i++) {
      if (param[1] == null) {
        param[1] = "";
        prec = "$" + data[i].precio_producto;
      } else {
        param[1] = "$" + param[1];
        prec = "<del>$" + data[i].precio_producto + "</del>";
      }
      contenido += `
        <div class="todoprod">         
          <div class="imagenprod">
            <img src="../Backoffice/imagenes/${data[i].imagen_producto}" width="450px">
          </div>
          <div class="todito">
          <div class="tarjeta1">
            <div class="nombreprod">
              <h3>${data[i].nombre_producto}</h3>
            </div> 
            <div class="preciosprod">
              <p>${param[1]}</p>
              <p>${prec}</p>
            </div>
            </div>
             <div class="tarjeta2">
              <button id="${data[i].idProducto}-${param[1]}" class="agregaralcarritoprod">Agregar al Carrito</button>

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

//Click en agregar al carrito (no promocionados)
divContenidoNoProm.addEventListener("click", function (event) {
  if (event.target.className === "agregaralcarritoprod") {
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
  if (event.target.className === "agregaralcarritoprod") {
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
