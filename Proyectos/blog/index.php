<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Comentarios</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <!-- Cabecera -->
    <header id="header">
        <div id="logo">
            <a href="index.php">
                Blog de Comentarios
            </a>
        </div>
    
    <!-- Menu -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Cateoria 1</a>
                </li>
                <li>
                    <a href="index.php">CAtegoria 2</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>

    <div id="container">
    <!-- BArra lateral -->
        <aside id="asidebar" class="block_aside">
            <div id="login">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="pass">Password</label>
                    <input type="password" name="pass" />

                    <input type="submit" value="Ingresar">
                </form>
            </div>

            <div id="register" class="block_aside">
                <h3>Ingresa tus Datos</h3>
                <form action="registro.php" method="POST">
                    <label for="name">Nombre</label>
                    <input type="texto" name="name" />

                    <label for="last_name">Apellidos</label>
                    <input type="text" name="last_name" />

                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="pass">Password</label>
                    <input type="password" name="pass" />

                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </aside>

    <!-- Caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="">
                <h2>Titulo de la entrada</h2>
                <p>
                    Texto de la entrada
                </p>
                </a>
            </article>
            <div id="ver_todas">
            <a href="">Ver todas las entradas</a>
        </div>
        </div>        
        <div class="clearfix"></div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <p>Desarrollado por Daniel Osorio &copy;</p>
    </footer>
</body>
</html>