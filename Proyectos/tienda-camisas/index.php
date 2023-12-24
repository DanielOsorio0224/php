<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>    
    <body>
        <div id="container">
        <header id="header">
            <div id="logo">
                <img src="assets/camisa.jpg" alt="Camisa">
                <a href="index.php">
                    Tienda Camisetas
                </a>
            </div>
        </header>

        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>

                    <ul>
                        <li><a href="#">Mis Pedidos</a></li>
                        <li><a href="#">Gestionar Pedidos</a></li>
                    </ul>
                    
                    
                </div>
            </aside>

            <div id="central">
                <div class="product">
                    <img src="assets/camisa.jpg" alt="camiseta">
                    <h2>Camisa Negra</h2>
                    <p>50 dolares</p>
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>

        <footer id="footer">
            <p>Desarrollado por Daniel Osorio &copy; <?=date('Y') ?></p>
        </footer>
        </div>
    </body>    
</html>    