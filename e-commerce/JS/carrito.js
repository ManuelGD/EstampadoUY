const totalPrecioCarrito = document.getElementById("totalPrecioCarrito");
let carrito;
let total, precio;
function valortotal() {
  total = 0;
  for (let i = 0; i < carrito.length; i++) {
    let item = carrito[i].split("-");
    precio = item[1];
    total += parseInt(precio);
  }

  totalPrecioCarrito.innerHTML = total;
}


document.addEventListener("DOMContentLoaded", function () {
  carrito = [];
  if (localStorage.getItem("idP").charAt(0) == ",") {
    let str = localStorage.getItem("idP").slice(1);
    localStorage.setItem("idP", str);
  }
  cargarcarrito();
  carrito = localStorage.getItem("idP").split(",");
  valortotal();
});

let productos, listaDeItems;
let i;
const divContenido = document.getElementById("prodsC");

//divCarro.addEventListener("click", function (event) {
function cargarcarrito() {
  listaDeItems = localStorage.getItem("idP").split(",");

  let texto = "";
  //productos = localStorage.getItem("idP");
  for (let i = 0; i < listaDeItems.length; i++) {
    item = listaDeItems[i].split("-");
    if (i == listaDeItems.length - 1) {
      texto += item[0];
    } else {
      texto += item[0] + ",";
    }
  }

  productos = texto;
  console.log(productos);

  fetch(`../Backoffice/API/prods_carrito.php?prods=${productos}`)
    .then((response) => response.json())
    .then((data) => {
      if (localStorage.getItem("idP") == "") {
        divContenido.innerHTML = `<h2>No hay productos en el carrito de compras</h2>`;
        totalPrecioCarrito.innerHTML = 0;

      } else {
        let contenido = '<div class="detalles_producto"> ';
        for (let i = 0; i < data.length; i++) {
          
          
          for (let j = 0; j < listaDeItems.length; j++) {
            item = listaDeItems[j].split("-");
          if(data[i].idProducto==item[0]){
            precio="";
            if(data[i].precio_producto !== item[1]){
              precio="<del>$"+data[i].precio_producto+"</del>";
            }
          contenido += `
          <div class="todoprod">
            <div class="todito">
              <div class="infoProd">
                <div class="nombreprod">
                  <p>${data[i].nombre_producto}</p>
                </div> 
                <div class="imagenprod">
                  <img src="../Backoffice/imagenes/${data[i].imagen_producto}" width="75px">
                </div>
                <div class="preciosprod">
                
                <p id="p${data[i].idProducto}">$${item[1]} ${precio}</p>
               
                </div>
              </div>
              <div class="operarCarrito">
                <button id="${data[i].idProducto}-${item[1]}" class="eliminar">Eliminar</button>
               
              </div>
            </div>
          </div>
        `;
      }
          }
        }
        contenido += `</div>`;
        divContenido.innerHTML = contenido;
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });

  divContenido.addEventListener("click", function (event) {
    if (event.target.className === "eliminar") {
      carrito = localStorage.getItem("idP").split(",");
   
      const productIdToRemove = event.target.id;
      const updatedCarrito = carrito.filter(
        (productId) => productId !== productIdToRemove
      );

      localStorage.setItem("idP", updatedCarrito.join(",")); // Actualiza el carrito en localStorage

      cargarcarrito();
      location.reload();
      valortotal();
      carritoVacio();
      
    }
  });


}

