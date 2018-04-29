<?php
namespace src\garbler;

function garbleText(string $text) :string
{
    return hash("sha256", $text, false);
}
