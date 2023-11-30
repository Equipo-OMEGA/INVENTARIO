<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <!-- La barra de navegación comienza aquí -->

    <div class="navbar-brand">
        <!-- La marca de la barra de navegación, como el logotipo y el botón de menú -->

        <a class="navbar-item" href="index.php?vista=home">
            <!-- Un enlace con la clase 'navbar-item' que lleva a la página de inicio -->
            <img src="./img/logo_omega_invent.png">
            <!-- Una imagen del logotipo -->
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <!-- Un botón que se convierte en un menú desplegable en dispositivos móviles -->
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <!-- El menú de la barra de navegación -->

        <div class="navbar-start">
            <!-- Elementos de menú en la parte izquierda de la barra de navegación -->

            <!-- Menú desplegable de "Usuarios" -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <!-- Elementos de submenú relacionados con usuarios -->
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <!-- Menú desplegable de "Categorías" -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>

                <div class="navbar-dropdown">
                    <!-- Elementos de submenú relacionados con categorías -->
                    <a href="index.php?vista=category_new" class="navbar-item">Nueva</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <!-- Menú desplegable de "Productos" -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <!-- Elementos de submenú relacionados con productos -->
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <!-- Elementos de menú en la parte derecha de la barra de navegación -->

            <div class="navbar-item">
                <div class="buttons">
                    <!-- Botones para "Mi cuenta" y "Salir" -->
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="button is-danger is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
