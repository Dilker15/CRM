

const Clickbutton = document.querySelectorAll('.button')
const CarritoCompras = document.querySelector('.CarritoCompras')
let carrito = []
//console.log(Clickbutton)
Clickbutton.forEach(btn =>{
    btn.addEventListener('click', addToCarritoItem)
})

function addToCarritoItem(e){
    const button = e.target
    const item = button.closest('.col-lg-3')
   // const itemMarca=   calzado.dataset.marca
    const itemMarca = item.querySelector('.marca').textContent;
    const itemDetalle = item.querySelector('.detalle').textContent;
    const itemPrecio = item.querySelector('.precio').textContent;
    const itemImg =item.querySelector('.imagen_fija').src;

     
    //console.log(itemImg)
    //console.log(button)
    const newItem ={
        marca: itemMarca,
        detalle: itemDetalle,
        precio: itemPrecio,
        img: itemImg,
        cantidad: 1
    }
    addItemCarrito(newItem)
}

function addItemCarrito(newItem){
    const alert = document.querySelector('.alert')
setTimeout(function(){
    alert.classList.add('hide')
},2000)
alert.classList.remove('hide')

    const InputElemento = CarritoCompras.getElementsByClassName('input__elemento')
 for(let i =0; i<carrito.length; i++){
     if(carrito[i].img.trim() === newItem.img.trim()){
         carrito[i].cantidad ++;
         const inputValue =InputElemento[i]
         inputValue.value ++;
         CarritoTotal()
         return null;
     }
 }
carrito.push(newItem)
renderCarrito()
}

function renderCarrito(){
    CarritoCompras.innerHTML=''
    carrito.map(item =>{
        const tr = document.createElement('tr')
        tr.classList.add('ItemCarrito')
        const Content = `
        <th scope="row">1</th>
                <td class="table__productos">
                  <img src = ${item.img} alt ="" class="i">  
                  <div class="col">
                  <h6 class="tittle">${item.marca}</h6>       
                  <h6 class="">${item.detalle}</h6> </div>  
                </td>
                <td class="table__price"><p> ${item.precio}</p></td>
                <td class="table__cantidad">
                  <input type ="number" min="1" value =${item.cantidad} class="input__elemento">
                  <button class="delete btn btn-danger">x</button>
                </td> `
        
    tr.innerHTML =Content;
    CarritoCompras.append(tr)

tr.querySelector(".delete").addEventListener('click', removeItemCarrito)
tr.querySelector(".input__elemento").addEventListener('change',sumaCantidad)
    })
    CarritoTotal()
}

function CarritoTotal(){
    let total = 0;
    const itemCartTotal = document.querySelector('.itemCartotal')
    carrito.forEach((item) => {
        const precio = Number(item.precio.replace("Bs.",''))
        total = total + precio*item.cantidad
    })
    itemCartTotal.innerHTML = `Total Bs. ${total}`
    addLocalStorage()
}

function removeItemCarrito(e){
    const buttonDelete = e.target
    const tr = buttonDelete.closest(".ItemCarrito")
    const img = tr.querySelector('.i').src;
  //  console.log(img)
    for(let i =0; i<carrito.length; i++){
        if(carrito[i].img.trim() === img.trim()){
            carrito.splice(i,1)
        }
    }
    const alert = document.querySelector('.remove')
    setTimeout(function(){
        alert.classList.add('remove')
    },2000)
    alert.classList.remove('remove')

    tr.remove()
    CarritoTotal()

}

function sumaCantidad(e){
    const sumaInput = e.target
    const tr = sumaInput.closest(".ItemCarrito")
    const img = tr.querySelector('.i').src;
    carrito.forEach(item => {
        if(item.img.trim() === img.trim()){
            sumaInput.value < 1 ? (sumaInput.value = 1) : sumaInput.value;
            item.cantidad = sumaInput.value;
            CarritoTotal()
        }
    })

}

function addLocalStorage(){
     localStorage.setItem('carrito',JSON.stringify(carrito))
}

window.onload = function(){
    const storage = JSON.parse(localStorage.getItem('carrito'));
    if(storage){
        carrito = storage;
        renderCarrito()
    }
}

  function pregunta(){  
    swal({
      title: "Registrado exitosamente!",
      text: "Redireccionando in 2 segundos.",
      type: "success",
      timer: 2000,
      showConfirmButton: false
    }, function(){
          window.location.href = "/";
    });
         } 