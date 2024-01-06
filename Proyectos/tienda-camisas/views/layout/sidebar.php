
<aside id="lateral">
                <div id="login" class="block_aside">

                    <?php if(!isset($_SESSION['idendity'])): ?>
                    <h3>Entrar a la web</h3>
                    <form action="index.php?controller=usuario&action=login" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>                    
                    <?php else: ?>
                        <h3><?=$_SESSION['idendity']->nombre?><?=$_SESSION['idendity']->apellidos?></h3>
                    <?php endif; ?>    
                    <ul>                                       
                        <?php if(isset($_SESSION['admin'])): ?>
                            <li><a href="index.php?controller=categoria">Gestionar Categorias</a></li>
                            <li><a href="index.php?controller=producto">Gestionar Productos</a></li>
                            <li><a href="#">Gestionar Pedidos</a></li>                            
                        <?php endif; ?>
                        <?php if(isset($_SESSION['identity'])): ?>
                            <li><a href="#">Mis Pedidos</a></li>
                            <li><a href="index.php?controller=usuario&action=logout">Cerrar Sesion</a></li>
                        <?php else: ?>    
                            <li><a href="index.php?controller=usuario&action=registro">Registrate Aqui</a></li>
                        <?php	endif ?> 
                    </ul>
                    
                    
                </div>
            </aside>
            <div id="central">