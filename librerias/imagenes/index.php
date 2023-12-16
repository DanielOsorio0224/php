<?php

require_once '../vendor/autoload.php';

$foto_original = 'wow.png';
$guardar_en = 'fotomodificada.png';

$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(250,250);

$thumb->crop(50,50,120,120);

$thumb->show();
$thumb->save($guardar_en);
