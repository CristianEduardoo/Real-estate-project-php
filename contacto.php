<?php include './includes/head.php' ?>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <?php include './includes/barra_movil.php' ?>
            </div>
        </div>
    </header>
    <main class="contacto-img">
        <div class="contenedor contenido-contacto">
            <h1>Rellene el formulario de contacto</h1>
            <form class="formulario" action="" method="post">
                <fieldset>
                    <legend>Informacion personal</legend>

                    <label for="nombre">Nombre completo *</label>
                    <input id="nombre" type="text" name="nombre" placeholder="Tu nombre">

                    <label for="email">Email *</label>
                    <input id="email" type="email" name="email" placeholder="Tu email">

                    <label for="telefono">Teléfono *</label>
                    <input id="telefono" type="tel" name="telefono" placeholder="Tu teléfono">

                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe un breve mensaje"></textarea>
                </fieldset>

                <fieldset>
                    <legend>Información sobre la propiedad</legend>

                    <label for="opciones">Vende o Compra</label>
                    <select id="opciones" name="venta_compra">
                        <option value="nada">--Seleccione una opción--</option>
                        <option value="vender">Vendo</option>
                        <option value="comprar">Compro</option>
                    </select>
                    <label for="presupuesto">Precio o presupuesto</label>
                    <input id="presupuesto" type="number" name="presupuesto" placeholder="Precio o presupuesto" min="0">
                </fieldset>

                <fieldset>
                    <legend>Contacto</legend>

                    <p>¿Como desea ser contactado?</p>
                    <div class="forma-contacto">
                        <label for="contactar-telefono">Teléfono</label>
                        <input id="contactar-telefono" name="contacto" type="radio" value="telefono">

                        <label for="contactar-email">Email</label>
                        <input id="contactar-email" name="contacto" type="radio" value="email">
                    </div>

                    <p>Eliga la fecha y la hora</p>

                    <label for="fecha">fecha *</label>
                    <input id="fecha" type="date" name="fecha">

                    <label for="hora">Hora *</label>
                    <input id="hora" type="time" name="hora" min="09:00" max="18:00">
                </fieldset>
                <div class="enviar-formulario">
                    <input type="submit" value="Enviar" class="btn-verde">
                </div>
            </form>
        </div>
    </main>
    <?php include './includes/footer.php' ?>
</body>

</html>