<?php

require_once __DIR__ . "/src/garbler.php";
use function src\garbler\garbleText as garbleText;

if (!isset($_GET['text'])) {
    http_response_code(400);
    echo "Invalid parameter";
    die();
}

$text = $_GET['text'];

echo garbleText($text);
