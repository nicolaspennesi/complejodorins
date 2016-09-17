<div class="c-navbar-wrapper clearfix">
    <div class="c-brand c-pull-left">
        <a href="index.html" class="c-logo">
            <img src="assets/base/img/logo-amarillo.png" alt="Logo" class="c-desktop-logo">
            <img src="assets/base/img/logo-amarillo.png" alt="Logo" class="c-desktop-logo-inverse">
            <img src="assets/base/img/logo-amarillo.png" alt="Logo" class="c-mobile-logo"> </a>
        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
            <span class="c-line"></span>
            <span class="c-line"></span>
            <span class="c-line"></span>
        </button>
        <button class="c-topbar-toggler" type="button">
            <i class="fa fa-ellipsis-v"></i>
        </button>
    </div>

    <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
        <ul class="nav navbar-nav c-theme-nav">
            <li class="c-menu-type-classic<?php echo ($section == "inicio" ? " c-active" : ""); ?>">
                <a href="index.php" class="c-link dropdown-toggle">Inicio</a>
            </li>
            <li class="c-menu-type-classic<?php echo ($section == "conocenos" ? " c-active" : ""); ?>">
                <a href="conocenos.php" class="c-link dropdown-toggle">Conocenos</a>
            </li>
            <li class="c-menu-type-classic<?php echo ($section == "apartamentos" ? " c-active" : ""); ?>">
                <a href="javascript:;" class="c-link dropdown-toggle">Apartamentos
                    <span class="c-arrow c-toggler"></span>
                </a>
                <ul class="dropdown-menu c-menu-type-classicc-pull-left">
                    <li class="dropdown-submenu">
                        <a href="#">Dos Ocupantes (Opción a 3)</a>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#">Cuatro Ocupantes Pre-Estándar</a>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#">Cuatro Ocupantes</a>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#">Seis Ocupantes</a>
                    </li>

                </ul>
            </li>
            <li class="c-menu-type-classic<?php echo ($section == "servicios" ? " c-active" : ""); ?>">
                <a href="servicios.php" class="c-link dropdown-toggle">Servicios</a>
            </li>
            <li class="c-menu-type-classic<?php echo ($section == "mar-de-ajo" ? " c-active" : ""); ?>">
                <a href="mar-de-ajo.php" class="c-link dropdown-toggle">Mar de Ajó</a>
            </li>
            <li class="c-menu-type-classic<?php echo ($section == "contacto" ? " c-active" : ""); ?>">
                <a href="contacto.php" class="c-link dropdown-toggle">Contacto</a>
            </li>

        </ul>
    </nav>
</div>
