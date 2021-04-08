<?php
//image locale
$blhole = "img/blackhole.jpg";

// image size
$size = getimagesize($blhole);

$width = $size[0];
$heigth = $size[1];
//jpg ou jpeg
$im = @imagecreatefromjpeg($blhole);



//texte dans image

// Fond blanc et texte bleu
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Ajout de la phrase en haut à gauche
imagestring($im, 5, 0, 0, 'Hello world!', $textcolor);

// définir le contenue de l'en-tete de l'image
header('content-type:image/jpeg');

// afficer l'image
imagejpeg($im);

print_r($im);


?>