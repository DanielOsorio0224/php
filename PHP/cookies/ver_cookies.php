<?php

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'] ;
}else{
    echo "No existe la cookie";
}

?>