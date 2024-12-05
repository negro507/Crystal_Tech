<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
<link rel="stylesheet" href="../Public/Css/semantic.css">
<link rel="stylesheet" href="../Public/Css/all.css">
<link rel="stylesheet" href="../Public/Css/Pagina-Inicio.css">
<script src="../Public/Js/jquery-3.1.1.min.js"></script>
<script src="../Public/Js/semantic.js"></script>
<script src="../Public/Js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet" />
<link rel="shortcut icon" href="../Public/Img/Icono Pagina.ico" type="image/x-icon">
<link rel="stylesheet" href="..\Public\Css\carts.css">
  
    <title>Document</title>
</head>
<body>
  
<a href="..\Views\Catalogo.php">productos</a>
  
<div class="col-sm-3">
<!-- Logo de la Pagina -->
<a href="Pagina Inicio.php"><img class="logo" src="../Public/Img/Logo tienda.png" alt="compra.jpg"></a>
</div>

  <div class="products-container">
    
    <div class="product-header">
        <h5 class="codigo">codigo_producto</h5>
      <h5 class="productos">productos</h5>
      <h5 class="precio_producto">precio_producto</h5>
      <h5 class="quantity">cantidad</h5>
      <h5 class="total">total</h5>
    </div>
    <a href="..\Views\carts.php"><button onclick="removeItem()" class="boton">eliminar</button></a>

    <div class="products">
      
    </div>
  </div>


<script src="..\Public\Js\carrito.js"></script>



</body>
</html>