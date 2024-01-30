<nav class="navbar">
    <div class="navbar-brand">
        <a href="<?=APP_URL;?>dashboard" class="navbar-item">
            <img src="app/views/img/bulma-logo.png" alt="Bulma" width="112" height="28">
        </a>
        <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="<?=APP_URL;?>dashboard" class="navbar-item">
                Dashboard
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a href="#" class="navbar-link">
                    Usuarios
                </a>
                <div class="navbar-dropdown isboxed">
                    <a href="#" class="navbar-item">
                        Nuevo
                    </a>
                    <a href="#" class="navbar-item">
                        Lista
                    </a>
                    <a href="#" class="navbar-item">
                        Buscar
                    </a>
                </div>
            </div>
        </div>
    

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a href="#" class="navbar-link">
                    ** USER NAME **
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a href="#" class="navbar-item">
                        Mi cuenta
                    </a>
                    <a href="#" class="navbar-item">
                        Mi foto
                    </a>
                    <hr class="navbar-divider">
                    <a href="#" class="navbar-item" id="btn_exit">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>