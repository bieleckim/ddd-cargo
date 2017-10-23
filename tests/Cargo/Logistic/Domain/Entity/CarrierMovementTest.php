<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\CarrierMovement;
use PHPUnit\Framework\TestCase;

class CarrierMovementTest extends TestCase
{
    public function testMovement()
    {
        $id = 'sample-id';
        $movement = new CarrierMovement($id);
        $this->assertEquals($id, $movement->getId());
    }
}
