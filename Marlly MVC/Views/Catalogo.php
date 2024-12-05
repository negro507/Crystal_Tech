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
    <h3 id="letra1">Alimentos</h3>
    <br>
    <!--TITULO DE LA CATEGORIA ALIMENTOS-->
    <a id="mas" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
      </svg></a>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Aceite Rica Palma</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/aceite.jpg" class="rounded-circle" alt="aceite">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Mantequilla Campi</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/campi.jpg" alt="campi">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Sardina Vancamps</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/sardina.jpg" alt="sardina">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Atun Vancamps</h6>
          <!--PRODUCTO DE ALIMENTOS-->
          <img src="../Public/Img/atun.jpg" alt="atun">
          <h5>$0000</h5>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!--SEGUNDO CONTENEDOR PRODUCTO-->
  <h3 id="letra2">Aseo y hogar</h3>
  <br>
  <!--TITULO DE LA CATEGORIA DE ASEO Y HOGAR-->
  <a id="mas3" href="">Ver más <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </svg></a>
  <div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Jabon Protex</h6>
          <!--PRODUCTO DE ASEO-->
          <img src="https://tse1.mm.bing.net/th?id=OIP.JFL7tt6m5CPg1stF1QZUQgHaHa&pid=Api&P=0" class="rounded-circle" alt="aceite">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Jabon Rey</h6>
          <!--PRODUCTO DE ASEO-->
          <img src="https://tse2.mm.bing.net/th?id=OIP.7YBxBalNDP15PJn5WuTC-gHaHa&pid=Api&P=0" alt="campi">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Suavitel</h6>
          <!--PRODUCTO DE ASEO-->
          <img src="https://tse2.mm.bing.net/th?id=OIP.Bgylz82lV4TwdVmLSg-mXQHaHa&pid=Api&P=0" alt="sardina">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Detergente Fab</h6>
          <!--PRODUCTO  DE ASEO-->
          <img src="https://tse3.mm.bing.net/th?id=OIP.7yeO7wMBECLUL7fq6khxLQHaHa&pid=Api&P=0" alt="atun">
          <h5>$0000</h5>
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
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="" height="16" fill="currentColor" class="" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Coca-Cola</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse2.mm.bing.net/th?id=OIP.A56jx9AiH6gcXaOmr8fmkQHaHa&pid=Api&P=0" alt="">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="" height="16" fill="currentColor" class="" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Aguila Original</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse1.mm.bing.net/th?id=OIP.KjuDNyeazXAKEKYSbz-nYAHaHa&pid=Api&P=0" alt="">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="" height="16" fill="currentColor" class="" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Manzana Postobon</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse1.mm.bing.net/th?id=OIP.YnLZ6ilgc3KVK0FL3bj_dwHaHa&pid=Api&P=0" alt="">
          <h5>$0000</h5>
        </div>
      </div>
      <div class="col">
        <div class="producto-container">
          <a href=""><svg id="agregar" xmlns="http://www.w3.org/2000/svg" width="" height="16" fill="currentColor" class="" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
          <h6>Colombiana</h6>
          <!--PRODUCTO DE BEBIDAS-->
          <img src="https://tse3.mm.bing.net/th?id=OIP.Jq60uoyXPVhf8AHHjWNW0QHaHa&pid=Api&P=0" alt="">
          <h5>$0000</h5>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
<?php

include '../Inc/Footer.php'

?>

</body>
</html>