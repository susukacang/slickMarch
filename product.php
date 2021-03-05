<?php
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

// $twig = new Environment($loader, ['autoescape' => false]);
// main and thumbnail images

$results = [
    "slick_img/random_1_640_480.jpg",
    "slick_img/random_2_640_480.jpg",
    "slick_img/random_3_640_480.jpg",
    "slick_img/random_4_640_480.jpg",
    // "slick_img/random_5_640_480.jpg",
    // "slick_img/random_6_640_480.jpg",
    // "slick_img/random_7_640_480.jpg",
    // "slick_img/random_8_640_480.jpg",
    // "slick_img/random_9_640_480.jpg",
    // "slick_img/random_10_640_480.jpg",
    // "slick_img/random_11_640_480.jpg",
    // "slick_img/random_12_640_480.jpg",
    // "slick_img/random_13_640_480.jpg",
    // "slick_img/random_14_640_480.jpg",
    // "slick_img/random_15_640_480.jpg",
    // "slick_img/random_16_640_480.jpg",
];

foreach ($results as $result) {
    // $data['images'][] = array(
       $images[] = array(
        // 'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
        // 'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
        'popup' => $result,
        'thumb' => $result
    );
}

echo $twig->render('product.html.twig', ['images' => $images, 'footer' => '<div>footer</div>']);