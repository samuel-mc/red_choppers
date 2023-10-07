<?php $title = isset($title) ? $title : 'Tanko';
?>

<header class="d-none d-lg-block">
    <!-- Top section  -->
    <div class="bg--black py-2 px-2">
        <div class="mw--1440 d-flex justify-content-end">
            <a class="a--white" href="mailto:info@redchoppers.com">
                <i class="fa-solid fa-envelope"></i>
                <span>
                    info@redchoppers.com
                </span>
            </a>
            <a class="a--white mx-5" href="tel:+100020002000">
                <i class="fa-solid fa-phone"></i>
                <span>
                    +100020002000
                </span>
            </a>
            <div>
                <a class="a--white mx-1" href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a class="a--white mx-1" href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a class="a--white mx-1" href="">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Bottom section  -->
    <div class="mw--1440 d-flex justify-content-between align-items-center bg-white py-2 px-2">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="mw--160">
        <nav>
            <ul class="d-flex text--sm w-100 list--unstyled">
                <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Acerca' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>nosotros">Acerca</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Experiencias' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>servicios">Experiencias</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Servicios empresariales' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Servicios empresariales</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Helicopteros' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Helicopteros</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--red py-2 px-4 w--fit h--fit text--bold">
            Reserva
        </a>
    </div>
</header>

<header class="bg--lightBlue p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="mw--160">
        <button class="btn btn--darkBlue btn--square px-3 " onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed z-10 bg-white w-100 py-4" id="mobileMenu" style="top: 0;">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="mw--160">
            <button class="btn btn-danger btn--square px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text--white"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--sm w-100 list--unstyled">
                    <li class="mx-2 my-2"><a class="text--lg <?php echo $title == 'Inicio' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                    <li class="mx-2 my-2"><a class="text--lg <?php echo $title == 'Acerca' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>nosotros">Acerca</a></li>
                    <li class="mx-2 my-2"><a class="text--lg <?php echo $title == 'Experiencias' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>servicios">Experiencias</a></li>
                    <li class="mx-2 my-2"><a class="text--lg <?php echo $title == 'Servicios empresariales' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Servicios empresariales</a></li>
                    <li class="mx-2 my-2"><a class="text--lg <?php echo $title == 'Helicopteros' ? 'a--black text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Helicopteros</a></li>
                </ul>
            </nav>
            <div class="mt-5">
                <div class="d-flex flex-column align-items-start">
                    <a class="a--grey" href="mailto:info@redchoppers.com">
                        <i class="fa-solid fa-envelope"></i>
                        <span>
                            info@redchoppers.com
                        </span>
                    </a>
                    <a class="a--grey my-3" href="tel:+100020002000">
                        <i class="fa-solid fa-phone"></i>
                        <span>
                            +100020002000
                        </span>
                    </a>
                    <div>
                        <a class="a--grey mx-2" href="">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a class="a--grey mx-2" href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a class="a--grey mx-2" href="">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--red py-2 px-4 w--fit h--fit text--bold">
                Reserva
            </a>
        </div>
    </div>
</nav>