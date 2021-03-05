<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);
// main and thumbnail images
$images = [
    "slick_img/random_1_640_480.jpg",
    "slick_img/random_2_640_480.jpg",
    "slick_img/random_3_640_480.jpg",
    "slick_img/random_4_640_480.jpg",
    "slick_img/random_5_640_480.jpg",
    "slick_img/random_6_640_480.jpg",
    "slick_img/random_7_640_480.jpg",
    "slick_img/random_8_640_480.jpg",
    "slick_img/random_9_640_480.jpg",
    "slick_img/random_10_640_480.jpg",
    "slick_img/random_11_640_480.jpg",
    "slick_img/random_12_640_480.jpg",
    "slick_img/random_13_640_480.jpg",
    "slick_img/random_14_640_480.jpg",
    "slick_img/random_15_640_480.jpg",
    "slick_img/random_16_640_480.jpg",
];

echo $twig->render('index.html.twig', ['images' => $images]);