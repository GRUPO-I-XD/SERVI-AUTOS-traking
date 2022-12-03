<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar-top">
            <ul class="navbar-top-ul">
                <li class="navbar-top-item">
                    <a href="login.html" class="navbar-top-links">Registro</a>
                </li>
                <li class="navbar-top-item">
                    <a href="login.html" class="navbar-top-links">Iniciar sesión</a>
                </li>
                <li class="navbar-top-item">
                    <a href="#" class="navbar-top-links">
                        <i class="zmdi zmdi-shopping-cart"></i> Carrito
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar">
            <header class="nabvar-mobile is-size-5-mobile">
                <a class="navbar-mobile-link has-text-white" href="#" id="btn-mobile"><i class="zmdi zmdi-menu"></i></a>
                <a class="navbar-mobile-link has-text-white" href="#">SERVI-AUTOS tracking</a>
                <a class="navbar-mobile-link has-text-white" href="index.html"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
            </header>
            <nav class="nav-menu --nav-dark-light" id="mySidenav">
                <form class="form-group " action="#">
                    <div class="form-group-container">
                        <span class="form-group-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-group-input" placeholder="BUSʕ•́ᴥ•̀ʔCAR">
                    </div>
                </form>

                <a class="is-hidden-mobile brand is-uppercase has-text-weight-bold has-text-dark" href="index.html">SERVI-AUTOS tracking
                </a>
                <ul class="nav-menu-ul">
                    <li class="nav-menu-item" id="men">
                        <a class="nav-menu-link link-submenu" href="#">Vehiculos de carga<i
                                class="zmdi zmdi-chevron-down"></i></a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                    
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Turbo</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Sencillo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Patineta</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Mula de dos ejes y tres</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                                                      
                                </li>
                            
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item" id="women">
                        <a href="#" class="nav-menu-link link-submenu">Automoviles Familiares <i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">

                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                         <ul class="sub-menu-ul">
                                                                            
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">

                                    <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Segunda mano</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Con 7 plazas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Familiares deportivos</a></li>
                                        
                                    </ul>
                                </li>
                            
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas fin de año</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                        
                    <li class="nav-menu-item"><a href="lookbook.html" class="nav-menu-link">Volquetas</a></li>
                    <li class="nav-menu-item"><a href="login.html" class="nav-menu-link active">Registro</a></li>
                    <li class="nav-menu-item"><a href="login.html" class="nav-menu-link">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </nav>
    </header>
    <!-- Banner -->
    <div class="banner banner-second">
        <div class="banner-container ">
            <h1>SERVI-AUTOS tracking</h1>
            <h2>Venta y Servicios de vehiculos</h2>
        </div>
    </div>

    <div class="container">
        <div class="columns">
            <div class="column">
                <h2 class="is-size-4">Registrar Vehiculos</h2>
                <form action="registrovehiculo.php" method="POST" class="form-control">
        
                     <!--<input type="email" placeholder="Email" class="form-control-field">-->
                    <input type="modelo" name="marca" placeholder="marca" class="form-control-field" required>
                    <!--<input type="password" placeholder="Password" class="form-control-field">-->
                    <input type="modelo" name="modelo" placeholder="modelo" class="form-control-field" required>
                    <!--<input type="password" placeholder="Confirma tu password" class="form-control-field">-->
                    <input type="valor" textarea name="valor" placeholder="valor" class="form-control-field" required>
                              
                     <button type="submit" value="Enviar" class="btn btn-default btn-primary">Ingresar Vehiculo</button>
                </form>
            </div>
<!--TABLA Formulario  -->       


<!--TABLA Formulario  -->       
            <div class="column">
                <?php
                // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
                $link = new PDO('mysql:host=localhost;dbname=registros', 'root', ''); // el campo vaciío es para la password.
                ?>
                <table class="table table-striped">
                     
                        <thead>
                        <tr>
                            <th>marca</th>
                            <th>modelo</th>
                            <th>valor</th>     
                        </tr>
                        </thead>
                <?php foreach ($link->query('SELECT * from registroautos') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
                <tr>
                    <td><?php echo $row['marca'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
                    <td><?php echo $row['modelo'] ?></td>
                    <td><?php echo $row['valor'] ?></td>
                 </tr>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>


<!-- footer 
    
    <footer class="footer">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Información</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">La marca</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Local stores</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Servicios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Mapa del sitio</a></li>
                    </ul>
                </div>

                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Porqué comprar</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios y retornos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios seguros</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Testimonios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Award waining</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Etival trading</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Tu cuenta</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Iniciar sesión</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Registro</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver carrito </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver catálogo</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Track an order</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Catalogo</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo Autos Usados</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo Autos Nuevos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo Carga Pesada</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                

                <div class="column is-full">
                    <div class="footer-socials">
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
-->
        <!--
        <div class="footer-bar-top">
            <div class="container">
                <a class="footer-bar-top-links" href="#">2019 SERVI-AUTOS tracking</a>
            </div>
        </div>
-->

    </footer>
    <script src="js/main.js"></script>


</body>

</html>