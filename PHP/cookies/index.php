<?php
//cookie básica
setcookie("micookie","valor cookie");

//Cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>
<a href="ver_cookies.php">Ver galletas </a>