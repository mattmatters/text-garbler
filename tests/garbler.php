<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/garbler.php';

use PHPUnit\Framework\TestCase;
use function src\garbler\garbleText as garbleText;

final class GarbleTest extends TestCase
{
    public function testReturnsAString(): void
    {
        $this->assertTrue(is_string(garbleText('something')));
    }

    public function cannotUseNonStrings(): void
    {
        $this->expectException(InvalidArgumentException::class);

        garbleText(2);
    }

    public function resultDoesNotEqualInput(): void
    {
        $input = 'poop';
        $this->assertTrue(garbleText($input) !== $input);
    }
}
