<?php include './includes/head.php' ?>

<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/"><!-- Otra opción es: "/" -->
                    <img class="logo-header" src="./build/img/logo.svg" alt="logo_bienesRaices" />
                </a>

                <nav class="navegacion-header">
                    <a href="nosotros.php">Acerca de nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
            <h1>Agencia Inmobiliaria Exclusiva en Venta de Casas y Departamentos</h1>
        </div>
    </header>
    <main class="contenedor seccion">
        <h1>Mas sobre Nosotros</h1>
        <div class="iconos_nosotros">
            <div class="icono">
                <img src="./build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit neque hac tristique, a nisl purus ultrices nunc accumsan molestie etiam habitant eros curae, orci aliquam at sociosqu fames convallis pharetra ut eleifend.</p>
            </div>
            <div class="icono">
                <img src="./build/img/icono2.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit neque hac tristique, a nisl purus ultrices nunc accumsan molestie etiam habitant eros curae, orci aliquam at sociosqu fames convallis pharetra ut eleifend.</p>
            </div>
            <div class="icono">
                <img src="./build/img/icono3.svg" alt="Icono Seguridad" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit neque hac tristique, a nisl purus ultrices nunc accumsan molestie etiam habitant eros curae, orci aliquam at sociosqu fames convallis pharetra ut eleifend.</p>
            </div>
        </div>
    </main>
    <section class="seccion contenedor">
        <h2>Casas y Departamentos en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio"> <!-- anuncio 1 -->
                <picture>
                    <source srcset="./build/img/anuncio1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncio1.jpg" alt="anuncios">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con exelente vista, acabados de lujo a un exelente precio</p>
                    <p class="precio">3,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc" />
                            <p>4</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
                            <p>1</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono hanitaciones" />
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton btn-amarillo">Ver propiedad</a>
                </div>
            </div> <!-- fin anuncio 1 -->
            <div class="anuncio"> <!-- anuncio 2-->
                <picture>
                    <source srcset="./build/img/anuncio2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncio2.jpg" alt="anuncios">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa Centrica en Madrid</h3>
                    <p>Casa con diseño moderno, así como una buena domotica y amueblada
                    </p>
                    <p class="precio">5,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc" />
                            <p>4</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
                            <p>2</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono hanitaciones" />
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton btn-amarillo">Ver propiedad</a>
                </div>
            </div> <!-- fin anuncio 2-->
            <div class="anuncio"> <!-- anuncio 3 -->
                <picture>
                    <source srcset="./build/img/anuncio3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncio3.jpg" alt="anuncios">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Hermosa casa de lujo</h3>
                    <p>Casa con piscina y acabados de lujo en la ciudad, exelente oportunidad</p>
                    <p class="precio">4,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc" />
                            <p>5</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono hanitaciones" />
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton btn-amarillo">Ver propiedad</a>
                </div>
            </div> <!-- fin anuncio 3 -->
        </div> <!-- contenedor-anuncios -->
        <div class="ver-todas">
            <a href="anuncios.php" class="boton btn-verde">Ver todas</a>
        </div>
    </section>



    <?php include './includes/footer.php' ?>
</body>

</html>