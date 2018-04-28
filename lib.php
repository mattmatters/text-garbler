<?php

function handleText(string $text) :string
{
    return hash("sha256", $text, false);
}
