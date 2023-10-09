<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <?php include 'components/qSomos.php'; ?>
    <?php include 'components/carrusel.php'; ?>

    <section class="mw--1440 grid--2cols gap--24 p-2 p-lg-4">
        <div class="bg--black px-5 py-2 text--white text-center rounded">
            <img src="<?php echo __ROOT__; ?>/public/img/about/mision.png" class="w--64">
            <h2 class="my-3">Misión</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi morbi sit consectetur elit.
            </p>
        </div>
        <div class="bg--black px-5 py-2 text--white text-center rounded">
            <img src="<?php echo __ROOT__; ?>/public/img/about/vision.png" class="w--64">
            <h2 class="my-3">Visión</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi morbi sit consectetur elit.
            </p>
        </div>
    </section>

    <section class="mw--1440 py-5">
        <div class="w--50 text-center">
            <h2 class="text--xl">Lo que nuestros <span class="text--red">clientes opinan</span></h2>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        </div>
        <div id="carouselClientes" class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track p-5">
                <ul class="splide__list">
                    <li class="splide__slide bg--lightGrey p-4">
                        <header class="d-flex justify-content-between py-4">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo __ROOT__; ?>/public/img/about/opinion.png" class="w--64">
                                <div class="mx-3">
                                    <h3 class="text--md text--bold">Nombre</h3>
                                    <h4 class="text--sm text--grey">Subtitulo</h4>
                                </div>
                            </div>

                            <img src="<?php echo __ROOT__; ?>/public/img/about/comillas.png" class="w--64 d-none d-md-block">
                        </header>
                        <main class="py-4 border-top">
                            <p class="text--sm">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac."
                            </p>
                            <img src="<?php echo __ROOT__; ?>/public/img/about/stars.png">
                        </main>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>

<script>
    const carouselClientes = new Splide('#carouselClientes', {
        autoplay: true,
        type: 'loop',
        gap: '1.6rem',
        focus: '1',
        perPage: 2,
        perMove: 1,
        isNavigation: false,
        breakpoints: {
            1024: {
                perPage: 2,
                gap: '1rem',
            },
            480: {
                perPage: 1,
                gap: '1rem',
            },
        },
        autoScroll: {
            speed: 2,
        },
    });

    carouselClientes?.mount();
</script>