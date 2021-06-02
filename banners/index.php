<?php
$banners = glob('*.png');
$file = $banners[array_rand($banners)];
$type = 'image/png';
header('Content-Type:'.$type);
readfile($file);
?>
