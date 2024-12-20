<!DOCTYPE html>
<html lang="en">
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
<title>Tienda la Marlly</title>
</head>

<body>
    <div class="container-fluid">
        <header class="Header-Principal">
            <input type="hidden" name="inicio" value="inicio">
            <!-- Aqui ira todo el contenido del header, como puede ser: Icono de la pagina, Iconos redes sociales, Barra de navegacion, Imagen de la tienda y Titulo. -->
            <nav class="Nav-1">
                <!-- Aqui ira el contenido de el primer Nav que es: Icono de la pagina, Icono whatsapp, Icono Facebook, Icono Instagram, Icono Twitter, Caja de Busqueda, Icono Usuario. -->
                <div class="row">
                    <div class="col-sm-3">
                        <!-- Logo de la Pagina -->
                        <a href="Pagina Inicio.php"><img class="logo" src="../Public/Img/Logo tienda.png" alt="compra.jpg"></a>
                    </div>
                    <div class="col-sm-1">
                        <!-- Todos los Iconos Visibles en la Pagina -->
                        <div class="icono" id="Whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="icono" id="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="icono" id="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="icono" id="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="usuario">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalToggleLabel" style="text-align: center;">Inicio de Sesion</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../Controllers/ControladorUsuarios.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <label for="">Correo</label>
                                                    <input type="hidden" name="action" value="iniciar">
                                                    <input type="email" name="correo" id="Correo" class="form-control" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <label for="">Contraseña</label>
                                                    <input type="password" name="contrasena" id="Contrasena" class="form-control" required>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-outline-success">Iniciar Sesion</button>
                                            <br><br>
                                            <a href="">Olvidaste tu Contraseña?</a>
                                            <br><br>
                                            <div class="ui horizontal divider">
                                                Tambien Puedes Acceder Con
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8">
                                                    <button class="fb form-control">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" id="Fb">
                                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                        </svg>
                                                        Acceder con Facebook
                                                    </button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8">
                                                    <button class="Gmail form-control">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                        </svg>
                                                        Acceder con Correo
                                                    </button>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Crear una Nueva Cuenta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel2">Registrarse</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../Controllers/ControladorUsuarios.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <label for="">Nombre</label>
                                                    <input type="hidden" name="action" value="insertar">
                                                    <input type="text" name="nombre" id="Nombre" class="form-control" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <label for="">Correo</label>
                                                    <input type="email" name="correo" id="Correo" class="form-control" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <label for="">Celular</label>
                                                    <input type="text" name="celular" id="Celular" class="form-control" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <label for="">Contraseña</label>
                                                    <input type="password" name="contrasena" id="Contrasena" class="form-control" required>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-outline-success">Registrarse</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Volver al Inicio de Sesion</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button" id="Registro">Iniciar Sesion</a>
                    </div>
                </div>
            </nav>
            <!-- Aqui ira el contenido del segundo Nav que es: Menu de navegacion de las secciones de la pagina  -->
            <nav class="Nav-2">
                <a href="Catalogo.php">Productos</a>
                <a href="#Categorias">Categorias</a>
                <a href="#Factura">Factura Digital</a>
                <a href="#Footer">Nosotros</a>
            </nav>
            <!-- Titulo de la Pagina -->
            <section class="container-fluid Textos-Header">
                <h1>Tienda la Marlly</h1>
                <h2>Calidad y Buenos Precios Asegurados</h2>
            </section>
        </header>
        <br>
        <main>
            <!-- Carrusel principal de la pagina en el que se presentaran: Nuevos productos, Promociones, Descuentos, Etc. -->
            <section class="Seccion-Carrusel">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <!-- Contenido del carrusel (Se puede aumentar el numero de imagenes, copiando y pegando estas lineas de codigo) -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../Public/Img/Rebajas.webp" class="d-block w-100">
                            <div class="carousel-caption d-none d-sm-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../Public/Img/Promocion.webp" class="d-block w-100">
                            <div class="carousel-caption d-none d-sm-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../Public/Img/Rebajas.webp" class="d-block w-100">
                            <div class="carousel-caption d-none d-sm-block">
                            </div>
                        </div>
                    </div>
                    <!-- Js del Framework Bootstrap que permite el desplazamiento del carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <br><br><br>
            <section id="Categorias">
                <h2 class="Titulo">Categorias</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="circle-1"></div>
                        </div>
                        <div class="col-sm-5">
                            <div class="circle-2"></div>
                        </div>
                        <div class="col-sm-1">
                            <div class="circle-3"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="circle-5"></div>
                        </div>
                        <div class="col-sm-5">
                            <div class="circle-6"></div>
                        </div>
                        <div class="col-sm-1">
                            <div class="circle-7"></div>
                        </div>
                    </div>
                </div>
            </section>
            <br><br>
            <section id="Factura">
                <br>
                <h2 class="Titulo">Factura Digital</h2>
                <div class="Texto-factura">
                    <div class="Contenido-Factura">
                        Esta pagina contara con una Factura digital la cual ayudara a tener mas organizadas las compras
                        y ventas dentro del sitio web, En esta factura apareceran impresos algunos de los datos del cliente
                        y los detalles de la compra.
                        <br><br>
                        Este recibo debera ser presentado ya sea al dueño de la tienda, o a la persona encargada del domicilio,
                        Si toda la informacion en la factura es real, la persona recibira su pedido.
                        <br><br>
                        He aqui un Ejemplo de una Factura Digital ya existente
                        <br><br><br>
                        <img src="../Public/Img/th (1).webp" alt="">
                    </div>
                </div>
            </section>
        </main>
        <br><br>
        <footer class="container-fluid Footer" id="Footer">
            <div class="Espaciado-footer">
                <div class="Contenido-footer">
                    <h4>Tienda</h4>
                    <p>Nombre:</p>
                    <p>Telefono:</p>
                </div>
                <div class="Contenido-footer">
                    <h4>Desarrolladores</h4>
                    <p>Sebastian Builes</p>
                    <p>B-s-g2011@hotmail.com</p>
                    <hr class="Separador">
                    <p>Carlos Moreno</p>
                    <p>Correo</p>
                    <hr class="Separador">
                    <p>Tomas Castaño</p>
                    <p>Correo</p>
                </div>
                <div class="Contenido-footer">
                    <img src="../Public/Img/Logo tienda.png" alt="">
                </div>
            </div>
            <h2 class="Titulo-final">
                &copy; Tienda la Marlly | Sebastian Builes - Carlos Moreno - Tomas
                castaño
            </h2>
        </footer>
    </div>
</body>

</html>