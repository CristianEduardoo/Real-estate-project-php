<?php include './includes/head.php' ?>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php"><!-- Otra opción es: "/" -->
                    <img class="logo-header" src="./build/img/logo.svg" alt="logo_bienesRaices" />
                </a>

                <nav class="navegacion-header">
                    <a href="nosotros.php">Acerca de nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
        </div>
    </header>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog"> <!-- blog 1 -->
            <div>
                <picture>
                    <source srcset="./build/img/blog/blog1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/blog/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
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

        <article class="entrada-blog"> <!-- blog 3 -->
            <div>
                <picture>
                    <source srcset="./build/img/blog/blog3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/blog/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span class="spafecha">25/03/2024</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog"> <!-- blog 4 -->
            <div>
                <picture>
                    <source srcset="./build/img/blog/blog4.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="./build/img/blog/blog4.jpg" alt="Texto Entrada Blog">
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

    </main>
    <?php include './includes/footer.php' ?>
</body>

</html>