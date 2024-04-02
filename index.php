<?php include './includes/head.php' ?>

<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <?php include './includes/barra_movil.php' ?>
            </div>
            <h1>Agencia Inmobiliaria Exclusiva en Venta de Casas y Departamentos</h1>
        </div>
    </header>
    <main class="contenedor">
        <h1>Mas sobre Nosotros</h1>
        <div class="iconos_nosotros">
            <div class="icono">
                <img src="./build/img/iconos/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit neque hac tristique, a nisl purus ultrices nunc accumsan molestie etiam habitant eros curae, orci aliquam at sociosqu fames convallis pharetra ut eleifend.</p>
            </div>
            <div class="icono">
                <img src="./build/img/iconos/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit neque hac tristique, a nisl purus ultrices nunc accumsan molestie etiam habitant eros curae, orci aliquam at sociosqu fames convallis pharetra ut eleifend.</p>
            </div>
            <div class="icono">
                <img src="./build/img/iconos/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit neque hac tristique, a nisl purus ultrices nunc accumsan molestie etiam habitant eros curae, orci aliquam at sociosqu fames convallis pharetra ut eleifend.</p>
            </div>
        </div>
    </main>
    <section class="contenedor">
        <h2>Casas y Departamentos en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio"> <!-- anuncio 1 -->
                <picture>
                    <source srcset="./build/img/anuncios/anuncio1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncios/anuncio1.jpg" alt="anuncios">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con exelente vista, acabados de lujo a un exelente precio</p>
                    <p class="precio">3,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_wc.svg" alt="icono wc" />
                            <p>4</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_estacionamiento.svg" alt="icono estacionamiento" />
                            <p>1</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_dormitorio.svg" alt="icono hanitaciones" />
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="btn-amarillo-block">Ver propiedad</a>
                </div>
            </div> <!-- fin anuncio 1 -->
            <div class="anuncio"> <!-- anuncio 2-->
                <picture>
                    <source srcset="./build/img/anuncios/anuncio2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncios/anuncio2.jpg" alt="anuncios">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa Centrica en Madrid</h3>
                    <p>Casa con diseño moderno, así como una buena domotica y amueblada
                    </p>
                    <p class="precio">5,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_wc.svg" alt="icono wc" />
                            <p>4</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_estacionamiento.svg" alt="icono estacionamiento" />
                            <p>2</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_dormitorio.svg" alt="icono hanitaciones" />
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="btn-amarillo-block">Ver propiedad</a>
                </div>
            </div> <!-- fin anuncio 2-->
            <div class="anuncio"> <!-- anuncio 3 -->
                <picture>
                    <source srcset="./build/img/anuncios/anuncio3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/anuncios/anuncio3.jpg" alt="anuncios">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Hermosa casa de lujo</h3>
                    <p>Casa con piscina y acabados de lujo en la ciudad, exelente oportunidad</p>
                    <p class="precio">4,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_wc.svg" alt="icono wc" />
                            <p>5</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_estacionamiento.svg" alt="icono estacionamiento" />
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="./build/img/iconos/icono_dormitorio.svg" alt="icono hanitaciones" />
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="btn-amarillo-block">Ver propiedad</a>
                </div>
            </div> <!-- fin anuncio 3 -->
        </div> <!-- contenedor-anuncios -->
        <div class="ver-todas">
            <a href="anuncios.php" class="btn-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <div class="contenedor info">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo</p>
            <a href="contacto.php" class="btn-amarillo">Contáctanos</a>
        </div>
    </section>

    <div class="contenedor seccion-inferior">
        <section> <!-- section 1 -->
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog"> <!-- blog 1 -->
                <div>
                    <picture>
                        <source srcset="./build/img/blog/blog1.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="./build/img/blog/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span class="spafecha">25/03/2024</span> por: <span>Admin</span> </p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog"> <!-- blog 2 -->
                <div>
                    <picture>
                        <source srcset="./build/img/blog/blog2.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="./build/img/blog/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span class="spafecha">25/03/2024</span> por: <span>Admin</span> </p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section> <!-- Fin section 1 -->

        <section class="testimoniales"> <!-- section 2 -->
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Cristian Castro</p>
            </div>
        </section> <!-- Fin section 2 -->
    </div>

    <?php include './includes/footer.php' ?>
</body>

</html>