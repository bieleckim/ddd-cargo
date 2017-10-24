<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\CarrierMovement;
use Cargo\Logistic\Domain\Entity\Location;
use PHPUnit\Framework\TestCase;

class CarrierMovementTest extends TestCase
{
    public function testMovement()
    {
        $locationFrom = $this->createMock(Location::class);
        $locationTo = $this->createMock(Location::class);
        $id = 'sample-id';

        $movement = new CarrierMovement($id, $locationFrom, $locationTo);

        $this->assertEquals($id, $movement->getId());
        $this->assertEquals($locationFrom, $movement->getLocationFrom());
        $this->assertEquals($locationTo, $movement->getLocationTo());
    }
}
