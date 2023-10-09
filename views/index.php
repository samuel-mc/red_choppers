<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <section class="mw--1440 home__hero grid--2cols px-2 px-lg-4 py-5">
        <div class="d-flex flex-column justify-content-center pr-lg-5">
            <h2 class="text--black text--bold text--xl mb-4">
                <span class="text--red">RED CHOPPERS</span> <br>
                LA MANERA MÁS FÁCIL DE VOLAR.
            </h2>
            <p class="text--grey text--md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi morbi sit consectetur elit nibh faucibus morbi. Sed sit eget est lacus.
            </p>
        </div>
        <div></div>
    </section>

    <?php include 'components/qSomos.php'; ?>
    
    <?php include 'components/nExperiencias.php'; ?>

    <section class="mw--1440 px-2 px-lg-4 py-5 text-center">
        <h2 class="text--xl text--black">
            Nuestros servicios <br><span class="text--red font-weight-bold">empresariales</span>
        </h2>
        <p class="text--grey my-4">
            At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.
        </p>
        <div class="grid--4cols text-center gap--24 p-lg-4 p-2">
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">VUELO EJECUTIVO MEXICO - PUEBLA PARA 3 PERSONAS</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">VUELO EJECUTIVO PARA 5 PERSONAS MEXICO - PUEBLA</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">VUELO EJECUTIVO PARA 3 PERSONAS. MEXICO - QUERETARO</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">VUELO EJECUTIVO PARA 5 PERSONAS MEXICO - QUERETARO</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">PAQUETE DE 10 HORAS EN HELICOPTERO BELL 206</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">PAQUETE DE 10 HORAS EN HELICOPTERO AIRBUS EC-130</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">PAQUETE DE 10 HORAS EN HELICOPTERO AGUSTA 109</h6>
            </div>
            <div class="p-lg-2 p-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/heliBlack.png" class="px-2 py-4">
                <h6 class="capitalize">PAQUETE DE 10 HORAS EN HELICOPTERO AIRBUS AS-350</h6>
            </div>
        </div>
        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--red py-3 px-5 w--fit h--fit text--bold">
            Reservar
        </a>
    </section>

    <?php include 'components/carrusel.php'; ?>

    <section class="mw--1440 grid--2cols px-2 px-lg-4 py-5 align-items-center">
        <div>
            <h2 class="text--xl text--black">
                Ambulancia <span class="text--red">aérea</span>
            </h2>
            <p class="text--grey my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed felis lectus, condimentum dictum magna vitae, ultricies interdum sapien. Quisque vel quam a lorem congue dictum. Vivamus rhoncus sapien non commodo maximus. Aliquam ut feugiat nisi. Nulla ut risus ac diam cursus porta. Cras non arcu non massa interdum sollicitudin. Sed a placerat augue.
            </p>
            <a href="<?php echo __ROOT__; ?>/ambulanciaAerea" class="btn btn--red py-3 px-5 w--fit h--fit text--bold">
                Conocer servicio
            </a>
        </div>
        <div class="text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/home/ambulanciaAerea.png" class="w-100 mw--640">
        </div>
    </section>

    <section class="mw--1440 px-2 px-lg-4 py-5 text-center bg--black">
        <h2 class="text--xl text--white py-4">
            No lo pienses más ponte en contacto con nosotros
        </h2>
        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--red py-3 px-5 w--fit h--fit text--bold">
            Empezar
        </a>
    </section>

    <?php include 'components/contacto.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>