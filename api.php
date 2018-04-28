<?php

require_once __DIR__ . "/lib.php";

if (!isset($_GET['text'])) {
    http_response_code(400);
    echo "Invalid parameter";
    die();
}

$text = $_GET['text'];

echo handleText($text);
