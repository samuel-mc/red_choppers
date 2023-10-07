<section class="mw--1440 grid--2cols px-2 px-lg-4 py-5 ">
    <img src="<?php echo __ROOT__; ?>/public/img/components/contacto.png" class="img-fluid my-auto">
    <div class="p-lg-5 p-2 bg-white shadow rounded--16 py-lg-0 py-4">
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
</section>