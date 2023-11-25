<?php require_once 'lateral.php';  ?>
<!-- BArra lateral -->
<aside id="sidebar" >

            <div id="buscador" class="block">
                <h3>Buscar</h3>
                <form action="buscar.php" method="POST">                    
                    <input type="text" name="buscar" />
                    <input type="submit" value="Buscar">
                </form>
            </div>
            <div id="login" class="block">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="pass">Password</label>
                    <input type="password" name="pass" />

                    <input type="submit" value="Ingresar">
                </form>
            </div>

            <div id="register" class="block">
                <h3>Ingresa tus Datos</h3>
                <form action="registro.php" method="POST">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" />

                    <label for="last_name">Apellidos</label>
                    <input type="text" name="last_name" />

                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="pass">Password</label>
                    <input type="password" name="pass" />

                    <input type="submit" value="Registrarse" name="submit">
                </form>
            </div>
        </aside>
