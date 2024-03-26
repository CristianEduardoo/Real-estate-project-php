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

    <main class="contenedor">
        <h1>Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div>
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    30 Años de experiencia
                </blockquote>

                <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. 
                    In dictum felis et nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. 
                    Nunc porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. 
                    Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor. 
                    Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est. 
                    Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.</p>

                <p>Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

    <?php include './includes/footer.php' ?>
</body>

</html>