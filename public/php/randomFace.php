<?php
header('Content-Type: application/json');

$images = glob('../images/faces-of-vaat/*.jpg');
if ($images === false) {
    try {
        echo json_encode(['error' => 'Failed to read images directory'], JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
    }
    exit;
}

$randomImage = $images[array_rand($images)];

try {
    echo json_encode(['image' => $randomImage], JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}