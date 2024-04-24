<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_burguer.css">
    <script src="../js/popper.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/ace-rtl.min.css" />
    <script src="https://kit.fontawesome.com/7a3144b989.js" crossorigin="anonymous"></script>
    <!-- Agrega AOS Animaciones CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Burger L'horta</title>
</head>

<body class="container-fluid">
    <header>
        <a href="../../index.php"><i class="fa-solid fa-arrow-left"> RubFood</i><img src="../images/otros/LogoT.png" alt=""></a>
    </header>

    <section>
        <div class="accordion" id="acordeon">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <h2>Nuestra Historia</h2>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#acordeon">
                    <div class="accordion-body row nosotros">
                        <div class=" offset-lg-1 offset-md-1 historia col-md-5 col-lg-5 col-sm-12">
                            <p>Burger L’Horta abrió sus puertas el 5 de enero del 2017, antes de ese día surgieron varias circunstancias que seguro que muy poca gente sabe y que en esta breve historia os queremos contar, Burger L’horta surgió de la NO apertura de una inmobiliaria, en la cual ya tenía su nombre, su logo y sus posibles clientes. </p>
                            <p>¿Qué nombre tenia? Lo puedes encontrar en uno de nuestros platos de nuestra carta. A partir de los siguientes meses surgió la posibilidad de quedarnos un local de hostelería en Silla y de ahí surgió la idea de montar una hamburguesería solo especializada en hamburguesas, aunque tenemos que reconocer que al principio hacíamos un poco de todo.</p>
                            <p>En el 2018 nos trasladábamos a casa en el pueblo de uno de los socios y ese día también fue un día 5. El 5 de septiembre del 2018, abrimos Burger L’Horta Albal, y después de aguantar todos los inconvenientes posibles, de una pandemia mundial y de todo lo que no os podéis imaginar, seguimos en el mismo sitio que ese 5 de septiembre del 2018 poniendo sabor auténtico a nuestras burgers ¡ven a vivir y a crecer en la historia con nosotros!</p>
                        </div>
                        <div class="offset-lg-1 col-md-5 col-lg-5 col_sm_12 img_nosotros">
                            <img src="../images//burg/Burgeurs.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h2>Burger Del Mes</h2>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#acordeon">
                    <div class="accordion-body row mes_burguer_cont">
                        <div class="mes_burguer col-lg-6 col-md-6 col-sm-12">
                            <img src="../images/burg/kebap.jpg" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 detalles_mes row">
                            <div class="col-12">
                                <h2 style="color:white;"> La “KEBABEO” (MARZO)</h2>
                            </div>
                            <div class="col-12">
                                <p class="centrado-verticalmente">
                                    <span>🥩 2x100gr dry aged smash ‘burger’&nbsp;</span>
                                    <span>&nbsp;(con especias🌿 secretas)</span><br>
                                    <span>🍞 Pan de pita&nbsp;</span><br>
                                    <span>🧀 Doble cheddar blanco</span><br>
                                    <span>🥬 Lechuga corte fino</span><br>
                                    <span>🍅 Tomate</span><br>
                                    <span>🥒 Pepinillo “thick” (corte largo)</span><br>
                                    <span>💦 Salsa “Kebabeo”</span><br>
                                    <span>🌶️ Salsa Hot Honey</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h2>Carta</h2>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#acordeon">
                    <div class="accordion-body">
                        <div class="links">
                            <div class="row">
                                <div class="col">
                                    <div class="container-fluid nav_cont">
                                        <nav id="navbar" class="d-flex flex-row align-items-stretch">
                                            <nav class="nav nav-pills flex-row">
                                                <a class="nav-link l1 icons" href="#entrantes">
                                                    <span class="icono-lg"><img src="../images/burg/entrantes_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link icons" href="#french_fries">
                                                    <span class="icono-lg"><img src="../images/burg/fristas_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link icons" href="#ensaladas">
                                                    <span class="icono-lg"><img src="../images/burg/ensalada_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link l2 icons" href="#burgers">
                                                    <span class="icono-lg"><img src="../images/burg/burger_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link icons" href="#burgers_USA">
                                                    <span class="icono-lg"><img src="../images/burg/USA_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link icons" href="#wraps">
                                                    <span class="icono-lg"><img src="../images/burg/wrap_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link l3 icons" href="#sandwich">
                                                    <span class="icono-lg"><img src="../images/burg/sandwich_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link icons" href="#infantil">
                                                    <span class="icono-lg"><img src="../images/burg/infantil_icon.png" alt=""></span>
                                                </a>

                                                <a class="nav-link icons" href="#postres">
                                                    <span class="icono-lg"><img src="../images/burg/pastel_icon.png" alt=""></span>
                                                </a>

                                            </nav>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table>
                            <tr>
                                <th colspan="2" id="entrantes">Entrantes</th>
                            </tr>
                            <tr>
                                <td>
                                    FINGERS DE QUESO
                                    <p>Nuestra tapa estrella, no probarás unos más grandes y más buenos. Caseros 100%. (3,7,11)</p>
                                </td>
                                <td class="precio">6,00€</td>
                            </tr>
                            <tr>
                                <td>FINGERS DE POLLO
                                    <p>Tiras de pechuga adobadas y rebozadas con mucho amor. (3, 13)</p>
                                </td>
                                <td class="precio">6,00€</td>
                            </tr>
                            <tr>
                                <td>HORTA REMIX
                                    <p>Fingers de queso, pollo rebozado con chile dulce y patatas con mostaza miel, bacon jam y salsa de queso cheddar. (1,3,7,11,12,14)</p>
                                </td>
                                <td class="precio">7,00€</td>
                            </tr>
                            <tr>
                                <td>POLLO CAJÚN
                                    <p>Pollo sazonado al estilo cajún con salsa Thai. (3,7,11,12,13,14)</p>
                                </td>
                                <td class="precio">6,00€</td>
                            </tr>
                            <tr>
                                <td>ALITAS DE POLLO SINGAPORE
                                    <p>Alitas de pollo barbacoa con un toque picante y marinadas con salsa BBQ de chipotle. (1,7,11,12)</p>
                                </td>
                                <td class="precio">6,00€</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="french_fries">French fries</th>
                            </tr>
                            <tr>
                                <td>PATATAS PICANTONAS
                                    <p>Patatas envueltas con pimentón picante, alioli y salsa xemi. (5,7)</p>
                                </td>
                                <td class="precio">6,00€</td>
                            </tr>
                            <tr>
                                <td>PATATAS ROBBLAS
                                    <p>Nuestras patatas con Bacon jam, salsa cheddar y mostaza miel. (1,7,11,14)</p>
                                </td>
                                <td class="precio">6,00€</td>
                            </tr>
                            <tr>
                                <td>PATATAS NIVELL 50
                                    <p>Nuestras patatas con guacamole, chili, pico de gallo, jalapeños y salsa cheddar. (11)</p>
                                </td>
                                <td class="precio">6,50€</td>
                            </tr>
                            <tr>
                                <td>PATATAS BODEGA FOOD TRUCK
                                    <p>Nuestras patatas con cebolla frita, bacon crujiente, jugosa smash burger de 200g, fingers de queso y coronada con salsa cheddar y BBQ dulce.</p>
                                </td>
                                <td class="precio">11,00€</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="ensaladas">Ensaladas</th>
                            </tr>
                            <tr>
                                <td>FANECA
                                    <p>Lechuga Valenciana, pechuga de pollo braseada, queso Edam, picatostes y salsa mostaza miel. (1,3,7,11,14)</p>
                                </td>
                                <td class="precio">7,00€</td>
                            </tr>
                            <tr>
                                <td>L'HORT DE CHAMBERGO
                                    <p>Lechuga valenciana, jamón Serrano, queso de cabra, tomate, orégano y aliñada con aceite de oliva, sal y inagre balsámico.</p>
                                </td>
                                <td class="precio">7,00€</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="burgers">Burgers</th>
                            </tr>
                            <tr>
                                <td>ALBAL
                                    <p>LECHUGA, TOMATE, CHEDDAR, BACON Y MAYONESA</p>
                                </td>
                            </tr>
                            <tr>
                                <td>BENIPARRELL
                                    <p>SALSA BBQ, BACON, CHEDDAR Y CEBOLLA FRITA</p>
                                </td>
                            </tr>
                            <tr>
                                <td>TORRENTE
                                    <p>QUESO DE CABRA, JAMÓN, TOMATE Y LECHUGA</p>
                                </td>
                            </tr>
                            <tr>
                                <td>SILLA
                                    <p>MERMELADA DE FRESA Y QUESO DE CABRA</p>
                                </td>
                            </tr>
                            <tr>
                                <td>CATARROJA
                                    <p>SALSA XEMI, BACON, CEBOLLA CARAMELIZADA Y QUESO CHEDDAR</p>
                                </td>
                            </tr>
                            <tr>
                                <td>SEDAVÍ
                                    <p>PULLED PORK, SALSA BBQ, LECHUGA, CHEDDAR Y CEBOLLA FRITA</p>
                                </td>
                            </tr>
                            <tr>
                                <td>BIG BLAS
                                    <p>DOBLE HAMBURGUESA DE VACA VIEJA (400gr) DOBLE DE QUESO, DOBLE DE BACON Y MOSTAZA MIEL</p>
                                </td>
                            </tr>
                            <tr>
                                <td>LA VEGANA
                                    <p>BEYOND BURGER, MAYONESA VEGANA, LECHUGA, TOMATE, CEBOLLA PLANCHA Y QUESO VEGANO</p>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="2" class="th">Elige la carne</th>
                            </tr>
                            <tr>
                                <td>POLLO CRUJIENTE CASERO</td>
                                <td class="precio preciorigth">8,00€</td>
                            </tr>
                            <tr>
                                <td>VACA VIEJA</td>
                                <td class="precio preciorigth">9,00€</td>
                            </tr>
                            <tr>
                                <td>BLACK ANGUS</td>
                                <td class="precio preciorigth">9,00€</td>
                            </tr>
                            <tr>
                                <td>DRY AGED +70 DIAS MADURACIÓN</td>
                                <td class="precio preciorigth">10,00€</td>
                            </tr>
                            <tr>
                                <td>VEGANA BEYOND BURGER</td>
                                <td class="precio preciorigth">10,00€</td>
                            </tr>

                            <tr>
                                <th colspan="2" class="th">Extras</th>
                            </tr>
                            <tr>
                                <td>EXTRA PATATAS FRITAS</td>
                                <td class="precio preciorigth">1,00€</td>
                            </tr>
                            <tr>
                                <td>EXTRA PATATAS ROBBLAS</td>
                                <td class="precio preciorigth">2,50€</td>
                            </tr>

                            <tr>
                                <th colspan="2" class="th">Ingredientes Extras</th>
                            </tr>
                            <tr>
                                <td>Lechuga,Tomate, Cebolla frita, Cebolla Pochada</td>
                                <td class="precio preciorigth">0,20€</td>
                            </tr>
                            <tr>
                                <td>Cheddar, Queso de Cabra, Bacon, Jamón</td>
                                <td class="precio preciorigth">0,50€</td>
                            </tr>
                            <tr>
                                <td>Huevo Frito, Pulled Pork</td>
                                <td class="precio preciorigth">1,00€</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="burgers_USA">Burgers USA 11€</th>
                            </tr>
                            <tr>
                                <td>CALIFORNIA
                                    <p>Lechuga, cebolla, pepinillo, cheddar y salsa B.M. (1)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>MILWAUKEE
                                    <p>Cebolla pochada, queso cheddar y mantequilla.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>VINI JR
                                    <p>Mantequilla casera de oreo, bacon salado y queso cheddar</p>
                                </td>
                            </tr>
                            <tr>
                                <td>OKLAHOMA
                                    <p>Salsa Burger, cebolla a la plancha, Cheddar y Bacon Jam (1)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>NEW YORK
                                    <p>Salsa de Sweet Chili, queso Cheddar, Bacon y Pimientos Asados Marinados con salsa picante de Luisiana (1)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>BURGER DEL MES
                                    <p>(SOLO DISPONIBLE MIERCOLES Y JUEVES) *P.V.P puede variar según el mes</p>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="2" class="th">Extras</th>
                            </tr>
                            <tr>
                                <td>EXTRA PATATAS FRITAS</td>
                                <td class="precio preciorigth">1,00€</td>
                            </tr>
                            <tr>
                                <td>EXTRA PATATAS ROBBLAS
                                    <p>CON BACON JAM, SALSA CHEDDAR Y MOSTAZA MIEL</p>
                                </td>
                                <td class="precio preciorigth">2,50€</td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="info">
                                        Todas las Burgers USA utilizan DOBLE carne de 100g SMASH DRY AGED de más de 70 días <br>
                                        Todas las hamburguesas contienen los siguientes alérgenos: (3,7,11)
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="wraps">Wraps 7€</th>
                            </tr>
                            <tr>
                                <td>AVE CESAR
                                    <p>Pollo crujiente, bacon, queso Edam, lechuga, tomate y mostaza miel. (1,3,7,11,12,14)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>REBELDE BUEY
                                    <p>Hamburguesa de vaca vieja, salsa BBQ, queso cheddar, cebolla crujiente y bacon. (3,11)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>CAMPERO
                                    <p>Pechuga braseada, queso Edam, lechuga, tomate, cebolla y mayonesa. (3,7,11)</p>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" class="th">Extras</th>
                            </tr>
                            <tr>
                                <td>EXTRA PATATAS FRITAS</td>
                                <td class="precio preciorigth">1,00€</td>
                            </tr>
                            <tr>
                                <td>EXTRA PATATAS ROBBLAS
                                    <p>CON BACON JAM, SALSA CHEDDAR Y MOSTAZA MIEL</p>
                                </td>
                                <td class="precio preciorigth">2,50€</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="sandwich">Sandwich</th>
                            </tr>
                            <tr>
                                <td>MIXTO
                                    <p>Jamón york y queso. (3,11)</p>
                                </td>
                                <td class="precio preciorigth">€5,00</td>
                            </tr>
                            <tr>
                                <td>ALFAFAR
                                    <p>Jamón york, queso y huevo frito. (3,7,11)</p>
                                </td>
                                <td class="precio preciorigth">€5,50</td>
                            </tr>
                            <tr>
                                <td>BENETÚSSER
                                    <p>Lechuga, tomate, pechuga Braseada y mostaza miel. (1,3,11,14)</p>
                                </td>
                                <td class="precio preciorigth">€6,00</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="infantil">Menú Infantil</th>
                            </tr>
                            <tr>
                                <td>PATRULLA CANINA
                                    <p>Hot dog. (3)</p>
                                </td>
                                <td class="precio preciorigth">€5,00</td>
                            </tr>
                            <tr>
                                <td>CHICKEN LITTLE
                                    <p>Fingers de pollo. (3,7,11,12)</p>
                                </td>
                                <td class="precio preciorigth">€5,00</td>
                            </tr>
                            <tr>
                                <td>PIKACHU
                                    <p>Hamburguesa con queso. (3,11)</p>
                                </td>
                                <td class="precio preciorigth">€5,00</td>
                            </tr>
                            <tr>
                                <td>DORAEMON
                                    <p>Fingers de queso. (3,7,11)</p>
                                </td>
                                <td class="precio preciorigth">€5,00</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <th colspan="2" id="postres">Postres</th>
                            </tr>
                            <tr>
                                <td>CHEESECAKE DE OREO
                                    <p>(3, 7, 11)</p>
                                </td>
                                <td class="precio preciorigth">€4,50</td>
                            </tr>
                            <tr>
                                <td>CHEESECAKE DE GALLETAS LOTUS
                                    <p>(3,7,11,12)</p>
                                </td>
                                <td class="precio preciorigth">€4,50</td>
                            </tr>
                            <tr>
                                <td>POSTRE DEL MES</td>
                                <td class="precio preciorigth">€5,00</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="footer">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="img-container">
                    <img class="img1" src="../images/burg/lotus+.png" data-aos="fade-right" alt="" data-aos-duration="2000" data-aos-delay="200" loading="lazy" data-aos-once="true">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="img-container">
                    <img class="img4" src="../images/burg/Burgereta_caramel.png" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200" alt="" loading="lazy" data-aos-once="true">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="img-container">
                    <img class="img2" src="../images/burg/LA_CHAMPI.png" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200" alt="" loading="lazy" data-aos-once="true">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="img-container">
                    <img class="img3" src="../images/burg/LA_CROISSANT.png" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200" alt="" loading="lazy" data-aos-once="true">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>