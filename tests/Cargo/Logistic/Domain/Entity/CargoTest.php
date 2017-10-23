<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\Cargo;
use Cargo\Logistic\Domain\ValueObject\CargoId;
use PHPUnit\Framework\TestCase;

class CargoTest extends TestCase
{
    public function testCargo()
    {
        $cargoId = $this->createMock(CargoId::class);
        $cargo = new Cargo($cargoId);
        $this->assertEquals($cargoId, $cargo->getId());
    }
}
