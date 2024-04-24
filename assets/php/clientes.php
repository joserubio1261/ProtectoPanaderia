<?php
session_start();
require_once "../clases/UsuarioManager.php";
require_once "../clases/RolesC.php";
require_once "../clases/Conexion.php";
require_once "../clases/ProductosC.php";

// Verificar si se ha enviado una solicitud para cerrar sesión
if (isset($_GET['logout'])) {
    // Destruir todas las variables de sesión
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }

    // Destruir la sesión
    session_destroy();
    header("Location: forn.php");
    exit();
}

// Verificar si el usuario está autenticado y tiene el rol adecuado
if (!isset($_SESSION['nombre_usuario']) || RolesC::obtenerNombrePorId($_SESSION['id_rol']) !== 'Cliente') {
    header("Location: forn.php");
    exit();
}

// Obtener el id de usuario de la sesión
$idUsuario = $_SESSION['id_usuario'];

// La ruta de la imagen de perfil
$rutaImagenPerfil = UsuarioManager::obtenerRutaImagenPerfil($idUsuario);
$nombreUsuario = $_SESSION['nombre_usuario'];
// Obtener productos
$productos = ProductosC::obtenerTodosLosProductos();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Perfil Clietnes<?php echo $nombreUsuario; ?></title>
    <link rel="stylesheet" href="../css//estilo_cliente.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/ace.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

</head>

<body class="container-fluid login-layout">
    <div class="row Header" id="titulo">
        <div class="col-lg-1 col-md-1">
            <?php if ($rutaImagenPerfil) : ?>
                <img id="img_perfil" src="<?php echo $rutaImagenPerfil; ?>" alt="Imagen de perfil">
            <?php endif; ?>
        </div>
        <div class="col-lg-4 col-md-8" style="margin-top: 1vw;">
            <h2><?php echo $nombreUsuario; ?>! </h2>
        </div>
        <div class="col-lg-6 col-md-12">
            <h1>Forn Pasticeria Sant Roc</h1>
        </div>
        <div class="menu" style="margin-top: 1vw;">
            <button id="opciones" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="../images/iconos/menu.png" alt="Opciones"></button>
            <div class="offcanvas offcanvas-end " data-bs-scroll="true" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <!--<h5 class="offcanvas-title" id="offcanvasRightLabel">Opciones</h5>-->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <a class="cerrarS" href="?logout=true">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row section">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <nav id="productos-navbar" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#dulces">Dulces</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#curasanes"><i class="fas fa-birthday-cake"></i> Curasanes</a>
                            <a class="nav-link ms-3 my-1" href="#ensaimadas"><i class="fas fa-pie"></i> Ensaimadas</a>
                            <a class="nav-link ms-3 my-1" href="#cocas"><i class="fas fa-pie"></i> Cocas</a>
                            <a class="nav-link ms-3 my-1" href="#bizcochos"><i class="fas fa-pie"></i> Bizcochos</a>
                            <a class="nav-link ms-3 my-1" href="#donuts"><i class="fas fa-pie"></i> Donuts</a>
                            <a class="nav-link ms-3 my-1" href="#EspecialidadesDeChocolate"><i class="fas fa-pie"></i> Especialidades de Chocolate</a>
                            <a class="nav-link ms-3 my-1" href="#milhojas"><i class="fas fa-pie"></i>Milhojas</a>
                        </nav>
                        <a class="nav-link salados" href="#salados">Salados</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#pizzas"><i class="fas fa-pizza-slice"></i> Pizzas</a>
                            <a class="nav-link ms-3 my-1" href="#empanadas"><i class="fas fa-bread-slice"></i> Empanadas</a>
                            <a class="nav-link ms-3 my-1" href="#empanadillas"><i class="fas fa-bread-slice"></i> Empanadillas</a>
                            <a class="nav-link ms-3 my-1" href="#palitos"><i class="fas fa-bread-slice"></i> Palitos</a>
                            <a class="nav-link ms-3 my-1" href="#creps"><i class="fas fa-bread-slice"></i> Creps</a>
                            <a class="nav-link ms-3 my-1" href="#saladitos"><i class="fas fa-bread-slice"></i> Saladitos</a>
                            <a class="nav-link ms-3 my-1" href="#pan"><i class="fas fa-bread-slice"></i> Panes</a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div data-bs-spy="scroll" data-bs-target="#productos-navbar" data-bs-offset="0" class="scrollspy-productos" tabindex="0" style="background-image: url('../images/otros/fondo_productos.jpg'); background-size: cover;">
                    <div id="dulces">
                        <h4>Dulces</h4>
                    </div>
                    <div id="curasanes">
                        <h5>Curasanes</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && strpos(strtolower($producto->descripcion), 'curasanes') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="ensaimadas">
                        <h5>Ensaimadas</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && strpos(strtolower($producto->descripcion), 'ensaimadas') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="cocas">
                        <h5>Cocas</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && (strpos(strtolower($producto->descripcion), 'coca') !== false || strpos(strtolower($producto->descripcion), 'pan') !== false)) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="bizcochos">
                        <h5>Bizcochos</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && strpos(strtolower($producto->descripcion), 'bizcocho') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="donuts">
                        <h5>Donuts</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && strpos(strtolower($producto->descripcion), 'donuts') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="EspecialidadesDeChocolate">
                        <h5>Especialidades de Chocolate</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && (strpos(strtolower($producto->descripcion), 'palmeras') !== false || strpos(strtolower($producto->descripcion), 'cañas') !== false || strpos(strtolower($producto->descripcion), 'bomba') !== false)) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="milhojas">
                        <h5>Milhojas</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'dulce' && strpos(strtolower($producto->descripcion), 'milhojas') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="salados">
                        <h4>Salados</h4>
                    </div>
                    <div id="pizzas">
                        <h5>Pizzas</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'pizza') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="empanadas">
                        <h5>Empanadas</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'empanada') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="empanadillas">
                        <h5>Empanadillas</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'empanadilla') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="palitos">
                        <h5>Palitos</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'palitos') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="creps">
                        <h5>Creps</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'crep') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="saladitos">
                        <h5>Saladitos</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'saladitos') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="salados">
                        <h5>Curasanes Salados</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'curasanes') !== false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="pan">
                        <h5>Panes</h5>
                        <?php foreach ($productos as $producto) : ?>
                            <?php if ($producto->tipo === 'salado' && strpos(strtolower($producto->descripcion), 'pan') !== false && stripos($producto->descripcion, 'empanadilla') === false) : ?>
                                <div class="producto">
                                    <h5><?php echo $producto->nombre; ?></h5>
                                    <p><?php echo $producto->descripcion; ?></p>
                                    <p>Precio: <?php echo $producto->precio; ?></p>
                                    <p>Cantidad en stock: <?php echo $producto->cantidad_en_stock; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="../js/bootstrap.min.js"></script>
</body>

</html>