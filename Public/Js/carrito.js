var carts = document.querySelectorAll('.add-cart');

const products = [
    {
    codigo_producto: 1,
    Nombre_Producto: 'ACEITE',
    Precio_Producto: 15.000,
    tag: 'ALIMENTOS',
    incart: 0
    },

    {
    codigo_producto: 2,
    Nombre_Producto: 'MANTEQUILLA',
    Precio_Producto:  20.000,
    tag: 'ALIMENTOS',
    incart: 0
    },

    {
    codigo_producto: 3,
    Nombre_Producto: 'SARDINA',
    Precio_Producto: 10.000,
    tag: 'ALIMENTOS',
    incart: 0
    },

    {
    codigo_producto: 4,
    Nombre_Producto: 'ATUN',
    Precio_Producto: 25.000,
    tag: 'ALIMENTOS',
    incart: 0
    },

    {
    codigo_producto: 5,
    Nombre_Producto: 'Queso crema',
    Precio_Producto: 25.000,
    tag: 'LACTEOS',
    incart: 0
    },

    {
    codigo_producto: 6,
    Nombre_Producto: 'Leche colanta',
    Precio_Producto: 3.000,
    tag: 'LACTEOS',
    incart: 0
    },

    {
    codigo_producto: 7,
    Nombre_Producto: 'Nestle klim',
    Precio_Producto: 92.900,
    tag:'LACTEOS',
    incart: 0
    },

    {
    codigo_producto: 8,
    Nombre_Producto: 'Quesito colanta',
    Precio_Producto: 6.300,
    tag: 'LACTEOS',
    incart: 0
    },

    {
    codigo_producto: 9,
    Nombre_Producto: 'Coca Cola',
    Precio_Producto: 4.000,
    tag: 'BEBIDAS',
    incart: 0
    },
     
    {
    codigo_producto: 10,
    Nombre_Producto: 'Aguila original',
    Precio_Producto: 2.790,
    tag: 'BEBIDAS',
    incart: 0
    },

    {
    codigo_producto: 11,
    Nombre_Producto: 'Manzana postobon',
    Precio_Producto: 4.000,
    tag: 'BEBIDAS',
    incart: 0
    },

    {
    codigo_producto: 12,
    Nombre_Producto: 'Colombiana postobon',
    Precio_Producto: 4.000,
    tag: 'BEBIDAS',
    incart: 0
    },

    {
    codigo_producto: 13,
    Nombre_Producto: 'Detergente fab',
    Precio_Producto: 4.450,
    tag: 'ASEO Y HOGAR',
    incart: 0
    },

    {
    codigo_producto: 14,
    Nombre_Producto: 'Jabon protex',
    Precio_Producto: 3.900,
    tag: 'ASEO Y HOGAR',
    incart: 0
    },

    {
    codigo_producto: 15,
    Nombre_Producto: 'Fabuloso',
    Precio_Producto: 10.390,
    tag: 'ASEO Y HOGAR',
    incart: 0
    },

    {
    codigo_producto: 15,
    Nombre_Producto: 'Papel higienico scott',
    Precio_Producto: 2.400 ,
    tag: 'ASEO Y HOGAR',
    incart: 0
    },

    {
    codigo_producto: 16,
    Nombre_Producto: 'Aguardiente Antioqueño verde',
    Precio_Producto: 70.000,
    tag: 'LICORES',
    incart: 0
    },

    {
    codigo_producto: 17,
    Nombre_Producto: 'Ron viejo de caldas',
    Precio_Producto: 24.000,
    tag: 'LICORES',
    incart: 0
    },
     
    {
    codigo_producto: 18,
    Nombre_Producto: 'Ron medellin',
    Precio_Producto: 51.000,
    tag: 'LICORES',
    incart: 0
    },

    {
    codigo_producto: 19,
    Nombre_Producto: 'Aguila original',
    Precio_Producto: 2.790,
    tag: 'LICORES',
    incart: 0
    },

    {
    codigo_producto: 20,
    Nombre_Producto: 'De Todito BBQ',
    Precio_Producto: 7.200,
    tag: 'Snacks',
    incart: 0
    },

    {
    codigo_producto:21,
    Nombre_Producto: 'Golpe con todo ranchero',
    Precio_Producto: 5.400,
    tag: 'Snacks',
    incart: 0
    },

    {
    codigo_producto: 22,
    Nombre_Producto: 'margaritas de limon',
    Precio_Producto: 3.000,
    tag: 'Snacks',
    incart: 0
    },

    {
    codigo_producto:23,
    Nombre_Producto: 'Chocolatina Jumbo',
    Precio_Producto: 3.000,
    tag: 'Snacks',
    incart: 0

    }
];



for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click', () =>{   
        cartNumbers(products[i]);
        totalcost(products[i]);
     })
}

function onLoadcartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
       document.getElementsByClassName('.cart span').productNumbers;
    }
}

function cartNumbers(products) {

    let productNumbers = localStorage.getItem('cartNumbers');
   


    productNumbers = parseInt(productNumbers);

    if(productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.getElementsByClassName('.cart span').productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.getElementsByClassName('.cart span').textContent = 1;
    }

    setItem(products);
}

function setItem(products){
    var cartItems = localStorage.getItem('productsIncart');
    cartItems = JSON.parse(cartItems);
    console.log("my cartitems", cartItems);

    if(cartItems){

        if(cartItems[products.tag]){
            cartItems = {
                ...cartItems,
                [products.tag]: products
            }
        }
        /*cartItems[products.tag].incart += 1;*/
    } else{
        agregarcarrito(cartItems);
        cartItems = {
       [products.tag]: products
    }
}



    localStorage.setItem("productsIncart",JSON.stringify(cartItems));

    function agregarcarrito(cartItems) {
       cartItems = {
        [products.incart]: products
       }
        
    }
}

function totalcost(products) {

   let cartcost = localStorage.getItem('totalcost');

   console.log(typeof cartcost);

   if(cartcost) {
    cartcost = parseInt(cartcost);
    localStorage.setItem("totalcost", cartcost + products.Precio_Producto);
   } else {
    localStorage.setItem("totalcost", products.Precio_Producto);
   }   
}

function displaycart() {
    var cartItems = localStorage.getItem("productsIncart");
    cartItems = JSON.parse(cartItems);
    var productscontainer = document.querySelector
    (
    ".products"
    );
    let cartcost = localStorage.getItem('totalcost');

    if(cartItems && productscontainer) {
        productscontainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productscontainer.innerHTML += `
            <div class="products">
            <img src="../imagen/${item.tag}.jpg">
            <div class="codigo_producto">${item.codigo_producto}</div>
            <span class="nombre_producto">${item.Nombre_Producto}</span>
            </div>
            <div class="precio">${item.Precio_Producto},00</div>
            <div class="cantidad"> 
            <span>${item.incart}</span>
            </div>
            <div class="total">
            </div>
            `,

            `
            <div class="products">
            <img src="../imagen/${item.tag}.jpg">
            <div class="codigo_producto">${item.codigo_producto}</div>
            <span class="nombre_producto">${item.Nombre_Producto}</span>
            </div>
            <div class="precio">${item.Precio_Producto},00</div>
            <div class="cantidad"> 
            <span>${item.incart}</span>
            </div>
            <div class="total">
            </div>
            `;


        });

        productscontainer.innerHTML += `
        <div class="baskettotalcontainer">
        <h4 class="baskettotaltitle">
        </h4>
        <h4 class="baskettotal">
        ${cartcost},00
        </h4>
        </div>

        `;
            
    }
}



removeItem = (cartItems) => {
    var cartItems = localStorage.getItem('productsIncart');
    
    if(cartItems){
        localStorage.removeItem('productsIncart');
    }else
    {
        localStorage.removeItem('productsIncart');
    }
}


onLoadcartNumbers();
displaycart();