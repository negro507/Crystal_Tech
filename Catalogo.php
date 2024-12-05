<?php

include '../Inc/Header.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
  <link rel="stylesheet" href="../Public/Css/semantic.css">
  <link rel="stylesheet" href="../Public/Css/all.css">
  <link rel="stylesheet" href="../Public/Css/Catalogo.css">
  <script src="../Public/Js/jquery-3.1.1.min.js"></script>
  <script src="../Public/Js/semantic.js"></script>
  <script src="../Public/Js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>
<body>
  
  <br><br>
  <!--CARROUSEL DE IMAGENES DE LA PAGINA-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!--IMAGEN DEL CARROUSEL-->
        <img id="imagen1" src="../Public/Img/compra.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tienda la Marlly</h5>
          <!--NOMBRE DEL PRODUCTO-->
          <p>Tienda Oficial.</p>
          <!--DESCRIPCION DEL PRODUCTO-->
        </div>
      </div>
      <div class="carousel-item">
        <!--IMAGEN DEL CARROUSEL-->
        <img id="imagen2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwW91RQXMe77-R7FUtpL3GoCu2-ivVf_GPZw&usqp=CAU" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Aguila</h5>
          <!--NOMBRE DEL PRODUCTO-->
          <p>La mejor cerveza de Colombia.</p>
          <!--DESCRPCION DEL PREODUCTO-->
        </div>
      </div>
      <div class="carousel-item">
        <!--IMAGEN DEL CARROUSEL-->
        <img id="imagen3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwW91RQXMe77-R7FUtpL3GoCu2-ivVf_GPZw&usqp=CAU" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Aguila</h5>
          <!--NOMBRE DEL PRODUCTO-->
          <p>La mejor cerveza de Colombia</p>
          <!--DESCRIPCION DEL PRODUCTO-->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  

   <!--PRIMER CONTENEDOR PRODUCTO-->
   <div class="container text-center">
    <h3 id="letra1">DESPENSA</h3>
    <br>
    <!--TITULO DE LA CATEGORIA ALIMENTOS-->
    <a id="mas" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
      </svg></a>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
      <div class="col">
        <div class="producto-container">
          <h6>Aceite Rica Palma</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/aceite.jpg" class="rounded-circle" alt="aceite">
          <h5>$15.000</h5>
          <a class="add-cart cart1" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Mantequilla Campi</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/campi.jpg" alt="campi">
          <h5>$20.000</h5>
          <a class="add-cart cart2" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Sardina Vancamps</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/sardina.jpg" alt="sardina">
          <h5>$10.000</h5>
          <a class="add-cart cart3" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Atun Vancamps</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/atun.jpg" alt="atun">
          <h5>$25.000</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!--SEGUNDO CONTENEDOR PRODUCTO-->
  <h3 id="letra2">LACTEOS</h3>
  <br>
  <!--TITULO DE LA CATEGORIA DE ASEO Y HOGAR-->
  <a id="mas3" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </svg></a>
  <div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="producto-container">
          <h6>Queso crema</h6>
          <!--PRODUCTO DE ASEO-->
          <img src="..\Public\Img\quesocrema.jpg" class="rounded-circle" alt="aceite">
          <h5>$7,790</h5>
          <a class="add-cart cart5" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Leche Colanta</h6>
          <!--PRODUCTO DE ASEO-->
          <img src="..\Public\Img\colanta.jpg" alt="campi">
          <h5>$3.000</h5>
          <a class="add-cart cart6" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Nestle klim</h6>
          <!--PRODUCTO DE ASEO-->
          <img src="..\Public\Img\klim.jpg" alt="sardina">
          <h5>$92,900</h5>
          <input type="hidden">
          <a class="add-cart cart7" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Quesito Colanta</h6>
          <!--PRODUCTO  DE ASEO-->
          <img src="..\Public\Img\quesito.jpg" alt="atun">
          <h5>$6.930</h5>
          <a class="add-cart cart8" href="#">add cart</a>
        </div>
      </div>
    </div>
  </div>
  <br>  
  <!--TERCER CONTENEDOR DE PRODUCTO-->
  <h3 id="letra3">Bebidas</h3>
  <br>
  <!--TITULO DE LA CATEGORIA BEBIDAS-->
  <a id="mas2" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </svg></a>
  <div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="producto-container">
          <h6>Coca-Cola</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse2.mm.bing.net/th?id=OIP.A56jx9AiH6gcXaOmr8fmkQHaHa&pid=Api&P=0" alt="">
          <h5>$4.000</h5>
          <a class="add-cart cart9" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Jugo del valle</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\valle.jpg" alt="">
          <h5>$2.000</h5>
          <a class="add-cart cart10" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Manzana Postobon</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse1.mm.bing.net/th?id=OIP.YnLZ6ilgc3KVK0FL3bj_dwHaHa&pid=Api&P=0" alt="">
          <h5>$4.000</h5>
          <a class="add-cart cart11" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Colombiana</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse3.mm.bing.net/th?id=OIP.Jq60uoyXPVhf8AHHjWNW0QHaHa&pid=Api&P=0" alt="">
          <h5>$4.000</h5>
          <a class="add-cart cart12" href="#">add cart</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

   <!---CUARTO CONTENEDOR--->
  <h3 id="letra3">Aseo y Hogar</h3>
  <br>
  <!--TITULO DE LA CATEGORIA BEBIDAS-->
  <a id="mas2" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </svg></a>
  <div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="producto-container">
          <h6>Detergente Fab</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\detergente.jpg" alt="">
          <h5>$4.450</h5>
          <a class="add-cart cart13" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Jabon Protex</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\protex.png" alt="">
          <h5>$3.900</h5>
          <a class="add-cart cart14" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Fabuloso</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\fabuloso.jpg" alt="">
          <h5>$10.390</h5>
          <a class="add-cart cart16" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Papel Higienico Scott</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\papel.jpg" alt="">
          <h5>$2.400</h5>
          <a class="add-cart cart17" href="#">add cart</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <h3 id="letra3">LICORES</h3>
  <br>
  <!--TITULO DE LA CATEGORIA BEBIDAS-->
  <a id="mas2" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </svg></a>
  <div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="producto-container">
          <h6>Aguardiente antioqueño verde</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\descarga.jpg" alt="">
          <h5>$70.000</h5>
          <a class="add-cart cart18" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Ron viejo de caldas</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\caldas.jpg" alt="">
          <h5>$24.000</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Ron Medellin</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\images (1).jpg" alt="">
          <h5>$51.000</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Aguila original</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\aguila.jpg" alt="">
          <h5>$2.790</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <h3 id="letra3">SNACKS</h3>
  <br>
  <!--TITULO DE LA CATEGORIA BEBIDAS-->
  <a id="mas2" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </svg></a>
  <div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="producto-container">
          <h6>De Todito BBQ</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\todito.jpg" alt="">
          <h5>$7.200</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Golpe con todo ranchero</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\golpe.jpg" alt="">
          <h5>$5.400</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>margaritas de limon</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\margaritas.jpg" alt="">
          <h5>$3.000</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <h6>Chocolatina Jumbo</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="..\Public\Img\jumbo.jpg" alt="">
          <h5>$3.000</h5>
          <a class="add-cart cart4" href="#">add cart</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  


<script src="..\Public\Js\carrito.js"></script>

<?php

include '../Inc/Footer.php'

?>
</body>
</html>