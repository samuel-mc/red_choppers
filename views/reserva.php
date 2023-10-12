<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>

    <section class="mw--1440 gap--24 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12553.592375151657!2d-103.4155344027112!3d20.701884548290305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af02a12f0407%3A0x3528adfe5a1062e6!2sLIT%20Investment%20Center!5e0!3m2!1ses-419!2smx!4v1697138294626!5m2!1ses-419!2smx" width="600" height="400" class="w-100 p-0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="mw--1440 grid--2cols gap--24">
        <div class="p-2 p-lg-4">
            <h2 class="text--xl text--bold font--jf text-center">Reserva <span class="text--red text--bold">tu experiencia </span></h2>
            <p class="text--grey py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sint sit amet error corporis esse repellat expedita veritatis deleniti,</p>
            <div class="p-lg-4 p-2 bg-white shadow rounded--16 py-lg-0 py-4">
                <h2 class="text--xl text--bold font--jf text-center">Ponte en <span class="text--red">contacto </span></h2>
                <form class="text--sm">
                    <div class="grid--2cols py-2 gap--24">
                        <div>
                            <label for="nombre" class="font-weight-bold m-0">Nombre completo</label>
                            <input name="mensaje" id="mensaje" type="text" placeholder="Nombre" class="input m-1">
                        </div>
                        <div>
                            <label for="email" class="font-weight-bold m-0">Correo electronico</label>
                            <input name="email" id="email" type="text" placeholder="ejemplo@email.com" class="input m-1">                
                        </div>
                    </div>
                    <div class="py-2">
                        <label for="telefono" class="font-weight-bold m-0">Telefono</label>
                        <input name="telefono" id="telefono" type="text" placeholder="Teléfono" class="input m-1">
                    </div>
                    <div class="py-2">
                        <label for="telefono" class="font-weight-bold m-0">Telefono</label>
                        <input name="telefono" id="telefono" type="text" placeholder="Teléfono" class="input m-1">
                    </div>
                    <div class="py-2">
                        <label for="fecha" class="font-weight-bold m-0">Fecha</label>
                        <input name="fecha" id="fecha" type="date" placeholder="" class="input m-1 text--grey">
                    </div>
                    <div class="py-2">
                        <label for="servicio" class="font-weight-bold m-0">Servicio</label>
                        <select name="servicio" id="servicio" class="input text--grey m-1">
                            <option value="value1" selected>Traslados ejecutivos</option>
                            <option value="value2">Traslados empresariales</option>
                            <option value="value3">Traslados personales</option>
                        </select>
                    </div>

                    <div class="py-2">
                        <label for="mensaje" class="font-weight-bold m-0">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="20" rows="10" class="input textarea m-1" placeholder="Escribe aquí tu mensaje..."></textarea>
                    </div>
                    <button type="button" class="btn btn--red py-3 px-5 w--fit h--fit text--bold">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
        <div class="bg--black px-5 py-lg-5 py-2 text--white rounded d-flex flex-column text-break">
            <h2 class="my-3">Detalle <br> <span class="text--bold"> de contacto</span></h2>
            <div>
                <p>NUESTRA UBICACIÓN</p>
                <h2 class="my-3 text--bold">Calle, colonia, ciudad, CP. país</h2>
            </div>
            <div>
                <p>LLAMANOS</p>
                <h2 class="my-3 text--bold">(55)3029-5603</h2>
            </div>
            <div>
                <p>Envianos un correo</p>
                <h2 class="my-3 text--bold">contacto@dominio.com</h2>
            </div>
            <div class="mt-auto ml-auto">
                <img src="<?php echo __ROOT__; ?>/public/img/whaPhone.png" style="width: 150px;">
            </div>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>