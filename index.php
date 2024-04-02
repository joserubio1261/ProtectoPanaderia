<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RubFood - Soluciones de Punto de Venta</title>
    <link rel="stylesheet" href="assets/css/estilo_rubfood.css">
    <script src="assets/js/popper.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <script type="module" src="assets/js/funciones_rubfoood.js"></script>
</head>

<body>
    <!-- header -->
    <header id="header" class="container-fluid">
        <div class="row">
            <div class="col-lg-4 ">
                <h1><span>R</span><span>u</span><span>b</span><span>F</span><span>o</span><span>o</span><span>d</span></h1>
            </div>
            <div class="col-lg-6 d-none  d-lg-block">
                <img class="fadeInImg show" src="assets/images/otros/LogoT.png" alt="">
            </div>
            <div class="col-lg-12">
                <h2><span>D</span><span>i</span><span>s</span><span>e</span><span>ñ</span><span>o</span><span>&nbsp;</span><span>W</span><span>e</span><span>b</span><span>&nbsp; </span><span>c</span><span>o</span><span>n</span><span>&nbsp; </span><span>O</span><span>p</span><span>c</span><span>i</span><span>ó</span><span>n</span><span> &nbsp;</span><span>d</span><span>e</span><span> &nbsp;</span><span>P</span><span>O</span><span>S</span></h2>
            </div>
        </div>
    </header>
    <!-- Section y footer-->
    <section class="container-fluid" sectionname="features" id="features" sectioncomponent="Features" sectionlabel="Features" sortorder="1" section-component="Features" site-name="Rubfood" site-id="nFXXltJF4UR7U22e3vPp" site-logo-url="https://storage.googleapis.com/mixo-sites/images/file-4c390b38-ab2f-4c21-b9d6-e069eae978d3.png" site-logo-size="lg" site-config="[object Object]" header-visible="true" header="[object Object]">
        <div class="row">
            <div class="text-center sec1 col-6 col-xs-12">
                <h1>Una página web para tu negocio</h1>
                <p>Crea una presencia en línea para tu empresa y llega a más clientes.</p>
                <!-- menu -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Visita los sitios de nuestros clientes
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="assets/php/forn.php">Forn Pasticeria Sant Roc</a></li>
                        <li><a class="dropdown-item" href="assets/php/burguer.php">Burger L'horta</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <img src="assets/images/otros/pc.jpg" alt="" class="animated-image">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 text_sect animated-image">
                <div class="t1">
                    <h2>Diseño personalizado</h2>
                    <p class="p_info">En Rubfood entendemos la importancia de tener una página web única y atractiva. Nuestro equipo de diseñadores trabajará contigo para crear un sitio web que refleje la identidad y los valores de tu empresa. Podrás elegir entre una amplia variedad de estilos y elementos visuales para asegurarte de que tu sitio web sea exactamente como lo imaginas.</p>
                </div>
            </div>
            <div class="text_sect col-sm-6 col-xs-12 col-lg-6 animated-image">
                <div class="t2">
                    <h2 id="sect_h2">Fácil de usar</h2>
                    <p class="p_info">No necesitas conocimientos técnicos para crear tu página web con Rubfood. Nuestra plataforma intuitiva te guiará paso a paso en el proceso de creación, para que puedas tener tu sitio web listo en poco tiempo. Además, nuestro equipo estará disponible para responder a cualquier pregunta que puedas tener y brindarte el apoyo necesario para asegurarte de que tengas una experiencia fluida y exitosa.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <img src="assets/images/otros/pc4.jpg" alt="" class="animated-image">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <img src="assets/images/otros/ts.jpg" alt="" class="animated-image">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 text_sect animated-image">
                <div class="t1">
                    <h2 id="sect_h2">Soporte técnico</h2>
                    <p class="p_info">En Rubfood, estamos comprometidos a brindarte el mejor servicio. Si tienes alguna pregunta o necesitas ayuda, nuestro equipo de soporte técnico estará disponible para asistirte en todo momento. Ya sea que necesites ayuda con la configuración inicial de tu sitio web, tengas preguntas sobre cómo actualizar contenido o encuentres algún problema técnico, estaremos aquí para ayudarte a resolverlo rápidamente.</p>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Contacta con nosotros</h3>
                    <form action="assets/php/contacto.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo">Correo electrónico:</label>
                            <input type="email" id="correo" name="correo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </form>
                </div>
                <div class="col-md-6" id="form_footer">
                    <h3>Información de contacto</h3>
                    <p>Puede ponerse en contacto con nosotros a través de los siguientes medios:</p>
                    <ul>
                        <li>Teléfono: <b>637188842</b> </li>
                        <li>Correo electrónico: <b>rubfood@hotmail.com</b></li>
                        <li class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3081.7614126529497!2d-0.46865632349326486!3d39.429519315131024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6051c6c56cfbf7%3A0x342b9d1e78f763c!2sIES%20Serra%20Perenxisa!5e0!3m2!1ses!2ses!4v1712053164413!5m2!1ses!2ses" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>