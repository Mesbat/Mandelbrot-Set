<?php

// MMY

function    get_limit($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor, $z_re, $z_im, $i) {
    $xtmp = $z_re;
    $z_re = (pow(( $z_re * $z_re + $z_im * $z_im ), ( $degree / 2 )) * cos($degree * atan2($z_im, $z_re))) + (($x/200) + $x1);
    $z_im = (pow(( $xtmp * $xtmp + $z_im * $z_im ), ( $degree / 2 )) * sin($degree * atan2($z_im, $xtmp))) + (($y/200) + $y1);
    $i++;
    if (sqrt(pow($z_re, 2) + pow($z_im, 2)) < 2 && $i < $iteration)
        return get_limit($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor, $z_re, $z_im, $i);
    else
        return $i;
}

function    draw_fractal_x($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor) {
    $y = 0;
    draw_fractal_y($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor);
    ++$x;
    if ($x < $longueur)
        return draw_fractal_x($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor);
}

function    draw_fractal_y($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor) {
    $z_re = 0;
    $z_im = 0;
    $i = get_limit($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor, $z_re, $z_im, 1);
    if($i == $iteration)
        imagesetpixel($image, $x, $y, $pixelcolor);
    else {
        $pixelcolor2  = imagecolorallocate($image, 85, ($i / $iteration) * 255, ($i / $iteration) * 255);
        imagesetpixel($image, $x, $y, $pixelcolor2);
    }
    ++$y;
    if ($y < $largeur)
        return draw_fractal_y($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor);
}

// Initialisation de Variables
if (!isset($_SESSION)) session_start();
$x1 = -2.1; // minimum abscisse 
$y1 = -1.2; // minimum ordonnee
$x = 0;
$iteration = $_SESSION['get']['iteration'];
$degree = $_SESSION['get']['degree'];
$longueur = 638; // 640px de long (638 + la border css)
$largeur = 478; // 480px de large (478 + la border css)

//Creation de l'image de base
$image = imagecreatetruecolor($longueur, $largeur);
$background = imagecolorallocate($image, 255, 255, 255);
$pixelcolor  = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0 ,0 , $background);

// Dessin de chaque pixel du fractal
draw_fractal_x($image, $x1, $y1, $x, $y, $iteration, $degree, $longueur, $largeur, $pixelcolor);

// Transformation du php en png et generation de l'image
header('Content-type: image/png');
imagepng($image);
?>